<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $data['allData'] = User::where('is_admin', 0)->where('is_active', 0)->get();
        return view('adminHome',$data);
    }

    public function activateUser(Request $request, User $user){
        $user->is_active = 1;
        // $user->save();
        return redirect()->back()->with('success', "{$user->name} has been activated successfully");
    }

}


