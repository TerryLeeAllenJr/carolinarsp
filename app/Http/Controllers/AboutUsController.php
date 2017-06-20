<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function showPage(Request $request)
    {
        return view('web.about-us', [
            'page' => 'about-us'
        ]);
    }
}
