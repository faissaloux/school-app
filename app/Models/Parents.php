<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parents extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'parents';

    protected $fillable = [
        'user_id',
    ];
}
