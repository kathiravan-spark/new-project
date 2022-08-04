<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankName;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BankName $bank_name)
    {
       $this->middleware('auth');
       $this->bank_name = $bank_name;
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bank_name =$this->bank_name->get();
        return view('home',compact('bank_name'));
    }
}
