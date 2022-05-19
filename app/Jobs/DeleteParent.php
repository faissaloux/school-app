<?php

namespace App\Jobs;

use App\Models\Parents;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeleteParent implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    private Parents $parent;

    public function __construct(Parents $parent)
    {
        $this->parent = $parent;
    }

    public function handle()
    {
        $this->parent->delete();
    }

}
