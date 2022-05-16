<?php

namespace App\Concerns;

trait SendAlerts
{
    protected function success(string $msg)
    {
        $this->sendAlert('success', $msg);
    }

    protected function error(string $msg)
    {
        $this->sendAlert('error', $msg);
    }

    private function sendAlert(string $type, string $msg)
    {
        session()->flash($type, trans($msg));
    }
}
