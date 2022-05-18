<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\ResponseFactory;

class ResponseServiceProvider extends ServiceProvider
{
    public function boot(ResponseFactory $factory)
    {
        $factory->macro('error', function ($details = null, $message = null) use ($factory)
        {
            $format = [
                'status' => 'error',
                'message' => $message ? trans($message) : trans('responses.errors.something_went_wrong'),
                'details' => $details,
            ];
            
            return $factory->make($format);
        });

        $factory->macro('success', function ($message = null) use ($factory)
        {
            $format = [
                'status' => 'success',
                'message' => trans($message),
            ];
            
            return $factory->make($format);
        });

        $factory->macro('data', function ($data = null) use ($factory) 
        {
            $format = [
                'status' => 'success',
                'data' => $data,
            ];
            
            return $factory->make($format);
        });

        $factory->macro('errorMessage', function ($message = null) use ($factory)
        {
            $format = [
                'status' => 'error',
                'message' => $message ? trans($message) : trans('responses.errors.something_went_wrong'),
            ];
            
            return $factory->make($format);
        });

        $factory->macro('successWithData', function ($message = null, $data = null) use ($factory)
        {
            $format = [
                'status' => 'success',
                'message' => trans($message),
                'data' => $data,
            ];
            
            return $factory->make($format);
        });
    }
}
