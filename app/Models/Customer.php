<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'corporate_name',
        'cpf_cnpj',
        'email',
        'phone_number',
        'cep',
        'uf',
        'city',
        'address',
        'is_active',
    ];
}
