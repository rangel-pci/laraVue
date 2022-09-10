<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['uf', 'city', 'place'];
    public $timestamps = false;

    /**
     * Cliente que possui o endereço
     */
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
