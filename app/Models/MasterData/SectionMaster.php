<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionMaster extends Model
{
    use HasFactory;
    protected $table = 'section_masters';
    protected $primaryKey = 'section_id';

}
