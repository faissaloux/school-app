<?php

namespace App\Models;

use App\Enums\TripStatuses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bus extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'teacher_id',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function onTrip()
    {
        return !$this->offTrip();
    }

    public function offTrip()
    {
        $finished = 0;
        $studentsCount = $this->students->count();

        foreach ($this->students as $student) {
            $finished += optional($student->tripsStatuses->first())->status == TripStatuses::FINISH ? 1 : 0;
        }

        return !$studentsCount || ( $studentsCount > 0 && $finished > 0 && $studentsCount == $finished );
    }
}
