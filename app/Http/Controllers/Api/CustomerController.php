<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Http\Resources\CustomerCollection;
use App\Http\Resources\CustomerResource;
use App\Mail\SendMail;
use App\Models\Address;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

use stdClass;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = new CustomerCollection(Customer::with('address')->orderBy('name')->get());
        return response()->json($customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * Faz a validação utilizando CustomerRequest
     * E verifica se a imagem é válida
     * Envia o email de cadastro após salvar o cliente
     */
    public function store(CustomerRequest $request)
    {
        $data = $request->validated();

        $data['photo'] = 'defaultImage.jpg';

        if(isset($request->photo)){
            $data['photo'] = $this->storeBase64Image($request->photo);
        }

        $customer = Customer::create($data);
        $address = new Address($data);
        $customer->address()->save($address);

        if($customer){
            $this->sendNewCustomerEmail($customer);
        }

        return response()->json(new CustomerResource($customer));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(new CustomerResource(Customer::find($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        $data = $request->validated();

        $customer = Customer::find($id);

        if(isset($request->photo)){
            $data['photo'] = $this->storeBase64Image($request->photo);
        }
        $oldImg = $customer->photo;

        $customer->update($data);

        $address = Address::find($customer->address->id);
        $address->update($data);

        $this->destroyOldCustomerImage($oldImg);
        $customer->refresh();

        return response()->json(new CustomerResource($customer));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);

        $this->destroyOldCustomerImage($customer->photo);
        $customer->address->delete();
        $customer->delete();

        return response()->noContent();
    }

    /**
     * Deleta a foto antiga do cliente
     */
    public function destroyOldCustomerImage($oldImg){
        if($oldImg == 'defaultImage.jpg') { return true; }
        unlink(storage_path('app/public/'.$oldImg));
    }

    /**
     * Converte e salva a imagem
     */
    public function storeBase64Image($base64image){

        $img = Image::make($base64image);
        $imgName = md5(uniqid()).rand(1, 99).'.jpg';
        $path = storage_path('app/public/').$imgName;
        $img->save($path, 90);

        return $imgName;
    }

    /**
     * Envia um email ao cliente informando que o cadastro foi concluído
     */
    public function sendNewCustomerEmail($customer){
        $data = new stdClass();
        $data->fromAddress = config('mail.from.address');
        $data->fromName = config('mail.from.name');
        $data->subject = 'Situação Cadastral';
        $data->toAddress = $customer->email;
        $data->toName = $customer->name;
        $data->templatePath = 'emails.customers.new_register';

        Mail::to($data->toAddress)->send(new SendMail($data));
    }
}
