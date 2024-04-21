<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewPostNotification;
use Illuminate\Support\Facades\Auth;

class AlexController extends Controller
{
    public function alex(Request $request)
    {
        $request->session()->put('badge', '200431');
        event(new NewPostNotification('138720', "Ada task yang di assign untukmu, dari Alex!"));
        return view('welcomealex');
    }

    public function budi(Request $request)
    {
        $request->session()->put('badge', '138720');
        event(new NewPostNotification('200431', "Ada task yang di assign untukmu, dari Budi!"));
        return view('welcomebudi');
    }
}
