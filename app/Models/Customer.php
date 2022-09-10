<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rg', 'email', 'cellphone', 'photo'];

    /**
     * Endereço associado ao cliente
     */
    public function address(){
        return $this->hasOne(Address::class);
    }
}
