<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\UserActivated;
use App\Notifications\UserDeactivated;

class ActivatorController extends Controller
{
    public function activateUser(Request $request, User $user){
        $user->is_active = 1;
        $user->save();

        $user->notify(new UserActivated());
        return redirect()->back()->with('success', "{$user->name} has been activated successfully");
    }

    public function deactivateUser(Request $request, User $user){
        $user->is_active = 0;
        $user->save();

        $user->notify(new UserDeactivated());
        return redirect()->back()->with('success', "{$user->name} has been Deactivated successfully");
    }
}
