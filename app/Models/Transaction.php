<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';             // memanggil nama table

    protected $primaryKey = 'nota';    // primary key ny
    protected $keyType = 'string';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'nota',
        'date',
        'id_user',
        'id_customer',
    ];

    public function customer() {
        return $this->hasOne(Customer::class, 'id', 'id_customer');
    }

    public function detail() {
        return $this->hasMany(DetailTransaction::class, 'nota', 'nota');
    }

    public function user() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
