<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceMaster extends Model
{
    use HasFactory;

    protected $table = 'price_masters';
    protected $primaryKey = 'price_id';

    protected $fillable = [
        'product_id',
        'status_id',
        'image_id',
        'name',
        'lang',
        'lang_id',
    ];
}
