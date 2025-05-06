<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {
            Mail::to('info@gratuityglobal.org')->send(new ContactEmail($request->except('_token')));
            Log::info('send success');
            return redirect()->back()->with(['message' => "Message successfully sent"]);
        } catch(\Exception $e) {
            Log::info($e->getMessage());
            return redirect()->back()->with(['error' => "Message failed to sent"]);
        }
    }
}
