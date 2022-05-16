<?php

namespace App\Jobs;

use App\Http\Requests\UpdateParentRequest;
use App\Models\Parents;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateParent implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    private Parents $parent;
    private array $data;
    
    public function __construct(Parents $parent, array $data)
    {
        $this->parent = $parent;
        $this->data = $data;
    }

    public static function fromRequest(Parents $parent, UpdateParentRequest $request): self
    {
        $data = $request->except('_token');
        unset($data['password_confirmation']);

        if ($data['password']) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        return new static($parent, $data);
    }

    public function handle()
    {
        $this->parent->user()->update($this->data);
    }
}
