<?php

namespace App\Models;

use App\Concerns\IsUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;
    use IsUser;

    protected $fillable = [
        'user_id',
    ];

    public function buses()
    {
        return $this->hasMany(Bus::class);
    }
}
