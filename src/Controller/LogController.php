<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Activelog; //Use this in your controller

class LogController extends Controller
{
    public function index(){
        Activelog::logadd('My Testing Add To Log.');
        return "yes";
    }
    
    public function show(){
        $logs = Activelog::loglists();
        return view('vendor.activelava.activelog.ActiveLog',compact('logs'));
        
    }
}