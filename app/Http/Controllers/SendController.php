<?php

namespace App\Http\Controllers;

use App\Models\Send;
use Illuminate\Http\Request;

class SendController extends Controller
{
    //
    public function addSubscriber(Request $request)
    {
        Send::create([
            'email' => $request->email
        ]);

        return redirect('/');
    }
}
