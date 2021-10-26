<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventary extends Model
{
    use HasFactory;
    protected $primarykey= 'inventary_id';

    protected $fillable=['rand_name', 'ori_name', 'size'];
}
