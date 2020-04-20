<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller; //new
use Illuminate\Http\Request;
use App\User;
use App\Address;

class AccountController extends Controller
{
    /**
     * Display a listing of the user data and address.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $address = Address::find(Auth::user()->address_id);
        return view('account', compact('address','user'));
    }
}
