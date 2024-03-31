<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankMaster extends Model
{
    use HasFactory;

        
    protected $table = 'bank_masters';
    protected $primaryKey = 'bank_id';

    protected $fillable = [
        'product_id',
        'status_id',
        'image_id',
        'name',
        'lang',
        'lang_id',
    ];
}
