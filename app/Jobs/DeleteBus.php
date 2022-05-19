<?php

namespace App\Jobs;

use App\Models\Bus;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeleteBus implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    private Bus $bus;

    public function __construct(Bus $bus)
    {
        $this->bus = $bus;
    }

    public function handle()
    {
        $this->bus->delete();
    }
}
