<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategory';

    protected $fillable = [
        'category_id',
        'subcategory_name'

    ];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }
}
