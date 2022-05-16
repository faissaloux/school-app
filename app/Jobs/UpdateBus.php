<?php

namespace App\Jobs;

use App\Http\Requests\UpdateBusRequest;
use App\Models\Bus;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateBus implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    private Bus $bus;
    private array $data;
    
    public function __construct(Bus $bus, array $data)
    {
        $this->bus = $bus;
        $this->data = $data;
    }

    public static function fromRequest(Bus $bus, UpdateBusRequest $request): self
    {
        $data = $request->except('_token');

        return new static($bus, $data);
    }

    public function handle()
    {
        $this->bus->update($this->data);
    }
}
