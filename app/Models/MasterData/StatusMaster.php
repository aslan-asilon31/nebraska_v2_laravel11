<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusMaster extends Model
{
    use HasFactory;

    protected $table = 'status_masters';
    protected $primaryKey = 'id';

    protected $fillable = [
        'status_id',
        'name',
        'lang',
        'lang_id',
    ];
}
