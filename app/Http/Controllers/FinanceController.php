<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\ServiceException;

class FinanceController extends Controller
{
    public function showPage(Request $request)
    {


        return view(
            'web.financing',
            [
                'page' => 'financing'
            ]
        );
    }
}
