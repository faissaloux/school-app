<?php

namespace App\Jobs;

use App\Enums\Roles;
use App\Http\Requests\StoreTeacherRequest;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateTeacher implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function handle()
    {
        $user = User::create($this->data);
        $user->teacher()->create();
    }

    public static function fromRequest(StoreTeacherRequest $request)
    {
        $data = $request->except('_token');
        $data['password'] = bcrypt($data['password']);
        $data['role'] = Roles::TEACHER;

        return new static($data);
    }
}
