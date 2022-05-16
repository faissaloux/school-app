<?php

namespace App\Jobs;

use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateTeacher implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    private Teacher $teacher;
    private array $data;
    
    public function __construct(Teacher $teacher, array $data)
    {
        $this->teacher = $teacher;
        $this->data = $data;
    }

    public static function fromRequest(Teacher $teacher, UpdateTeacherRequest $request): self
    {
        $data = $request->except('_token');
        unset($data['password_confirmation']);

        if ($data['password']) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        return new static($teacher, $data);
    }

    public function handle()
    {
        $this->teacher->user()->update($this->data);
    }
}
