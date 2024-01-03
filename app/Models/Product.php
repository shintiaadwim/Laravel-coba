<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function index()
    {
        return view('product');
    }

    protected $fillable = [
        'nama_product',
        'kode_product',
        'harga_product'
    ];
}
