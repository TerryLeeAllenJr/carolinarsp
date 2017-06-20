<?php

namespace App\Services;

use App\RecentWork;
use App\Exceptions\ServiceException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RecentWorkService
{

    public static function getRecentWork() {

        try{

            return RecentWork::select('title','img','description','services','date')->limit(6)->get()->toArray();

        } catch( ModelNotFoundException $e ) {

            throw new ServiceException($e);

        }

    }


}