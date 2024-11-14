<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Customer extends Model
{
  use HasFactory;
    
  protected $fillable = [
    'name',
    'email',
    'phone',
    'produk_id'
  ];

  public function produk()
{
    return $this->belongsTo(Produk::class, 'produk_id');
}
}
