<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'parent_id',
        'bus_id',
    ];

    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
}
