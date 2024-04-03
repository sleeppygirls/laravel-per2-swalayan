<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Stuff extends Model
{
    use HasFactory;

    protected $table = 'stuffs';             // memanggil nama table

    protected $primaryKey = 'id';    // primary key ny
    protected $keyType = 'string';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'image',
        'name',
        'price',
        'unit',
        'status',
        'id_category'
    ];

    function category() {
        return $this->HasOne(Category::class, 'id', 'id_category');
    }

    function detail() {
        return $this->hasMany(DetailTransaction::class, 'id_stuff', 'id');
    }
}
