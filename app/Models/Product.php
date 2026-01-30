<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'reference',
        'description_courte',
        'prix',
        'stock',
        'categorie_id',
        'image'
    ];

  public function category()
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }

}
