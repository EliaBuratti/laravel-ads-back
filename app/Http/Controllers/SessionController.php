<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class SessionController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request)
    {
        if ($request->session()->has('key')) {
            var_dump('old visitor');

            return response(true);

        } else {

            $session = $request->session()->all();
            $request->session()->put('key', ($session['_token']));
            var_dump('new visitor');
            return response(false);
        }
    }

    public function exit(Request $request) {

        session()->flush();
        var_dump('Forgetted');


    }
}
