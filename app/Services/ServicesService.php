<?php

namespace App\Services;

use App\Service;
use App\Exceptions\ServiceException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServicesService
{
    
    public static function getService($slug) {

        try{

            return Service::where('slug','=',$slug)->firstOrFail()->toArray();

        } catch( ModelNotFoundException $e ) {

            throw new ServiceException($e);

        }

    }
    
    
}