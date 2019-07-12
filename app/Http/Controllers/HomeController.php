<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RecentWorkService;
use App\Exceptions\ServiceException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class HomeController extends Controller
{
    public function showPage(Request $request)
    {
        return view(
            'web.home',
            [
                'page' => 'home'
            ]
        );
    }
}
