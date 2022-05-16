<?php

namespace App\Jobs;

use App\Enums\Roles;
use App\Http\Requests\StoreParentRequest;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateParent implements ShouldQueue
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
        $user->parent()->create();
    }

    public static function fromRequest(StoreParentRequest $request)
    {
        $data = $request->except('_token');
        $data['password'] = bcrypt($data['password']);
        $data['role'] = Roles::PARENT;

        return new static($data);
    }
}
