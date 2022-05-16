<?php

namespace App\Jobs;

use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateStudent implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    private Student $student;
    private array $data;
    
    public function __construct(Student $student, array $data)
    {
        $this->student = $student;
        $this->data = $data;
    }

    public static function fromRequest(Student $student, UpdateStudentRequest $request): self
    {
        $data = $request->except('_token');

        return new static($student, $data);
    }

    public function handle()
    {
        $this->student->update($this->data);
    }
}
