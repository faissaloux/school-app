<?php

namespace App\Jobs;

use App\Http\Requests\StoreBusRequest;
use App\Models\Bus;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateBus implements ShouldQueue
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
        Bus::create($this->data);
    }

    public static function fromRequest(StoreBusRequest $request)
    {
        $data = $request->except('_token');

        return new static($data);
    }
}
