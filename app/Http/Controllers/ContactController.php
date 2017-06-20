<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showPage(Request $request)
    {
        return view(
            'web.contact', [ 'page' => 'contact' ]
        );
    }

    public function postContact(Request $request) {

        $this->validate($request, [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'subject' => 'required|regex:/^[\pL\s\-]+$/u',
            'message' => 'required|regex:/^[\pL\s\-]+$/u'
        ]);


        $data = $request->all();

        // TODO: Style email.
        // TODO: Validate contact info.
        Mail::raw( $data['message'] , function($message) use ($data)
        {
            $message->subject('Website Contact Notification: ' . $data['subject']);
            $message->from($data['email'], $data['name']);
            $message->to(env('ADMIN_EMAIL','lee@allen-industries.com'));
        });

        // Send confirmation email to sender.
        // Send email to site admin.
        Mail::raw( 'Thanks for contacting us! We have received your message and will be in touch shortly.' ,
            function($message) use ($data) {
                $message->subject('Thanks for Contacting Us');
                $message->from('no-reply@carolinarsp.com', 'Carolina Roofing Siding Painting');
                $message->to($data['email']);
            }
        );

        // TODO: Style thanks page and error pages.
        return redirect()->route('web.thank-you');

    }

    public function showThankYou() {
        return view('web.thank-you', ['page' => 'thank-you']);
    }
}