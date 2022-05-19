<?php

namespace App\Models;

use App\Concerns\IsUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parents extends Model
{
    use HasFactory;
    use SoftDeletes;
    use IsUser;

    protected $table = 'parents';

    protected $fillable = [
        'user_id',
    ];

    public function children()
    {
        return $this->hasMany(Student::class, 'parent_id');
    }
}
