<?php

namespace App\Http\Controllers;

use App\Models\Courrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Savecontroller extends Controller
{
    public function page_boite(){
      return view('boite');
    }

    public function page_save(){
        return view('form');
    }

    public function create()
    {
        request()->validate([
            'exp'=>['required'],
            'objet'=>['required'],
            'codeC'=>['required'],

         ] );
$cour=Courrier::create([
            'expediteur'=>request('exp'),
            'objet'=>request('objet'),
            'code'=>request('codeC'),
]);
#dd($cour->code);

return redirect('/pdf') ;

    }

    public function log(Request $request)
{
    Auth::logout();
    Session::flush();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
}
