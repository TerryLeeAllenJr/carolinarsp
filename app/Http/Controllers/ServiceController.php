<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ServicesService;
use App\Services\RecentWorkService;
use App\Exceptions\ServiceException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ServiceController extends Controller
{
    public function showPage(Request $request, $slug = null)
    {

        try{
            $slug = ( isset($slug) ) ? $slug : 'roofing';
            $service = ServicesService::getService($slug);
            $recentWork = RecentWorkService::getRecentWork();
        }catch(ServiceException $e){
            throw new NotFoundHttpException($e);
        }

        return view(
            'web.services',
            [
                'page' => 'services',
                'service' => $service,
                'recentWork' => $recentWork
            ]
        );
    }
}