<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;

    protected $table = 'detail_transactions';             // memanggil nama table

    protected $primaryKey = 'id';    // primary key ny
    protected $keyType = 'string';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'nota',
        'id_stuff',
        'count',
        'price',
        'discount',
    ];

    public function stuff() {
        return $this->hasOne(Stuff::class, 'id', 'id_stuff');
    }

    public function transaction() {
        return $this->hasMany(Transaction::class, 'nota', 'nota');
    }
}
