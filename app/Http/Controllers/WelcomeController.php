<?php

declare(strict_type=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller{

    /*
    *　トップページを表示する
    *
    * @return \Illuminate\View\View
    */
    public function index(){
        return view("welcome");
    }
    
    public function second(){
        return view("welcome_second");
    }

}
?>