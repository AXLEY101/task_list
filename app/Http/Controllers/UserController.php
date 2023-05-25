<?php

declare(strict_type=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterPost;
//use Illuminate\Support\Facades\Auth;
use App\Models\User as UserModel;
//use App\Models\CompletedTask as CompletedTaskModel;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller{

public function index(){
    return view("/user/register");
}

public function register(UserRegisterPost $request){
    //バリデート済みのデータ取得
    $datum = $request->validated();
    //パスワードハッシュ化
    $datum['password'] = Hash::make($datum['password']);
    //
    $datum['email_verified_at'] = date('Y-m-d H:i:s');
    //確認用
    //var_dump($datum);
    
    //テーブルへのINSERT
        try {
            $r = UserModel::create($datum);
        } catch(\Throwable $e){
            // XXX　本当はログに書く等の処理をする。　今回は一旦「出力する」だけ
            echo $e->getMessage();
            exit;
        }

        // 会員登録成功
        $request->session()->flash('user_register_success', true);

        //二重投稿防止でページ切り替え
        return redirect('/');
    
}

}
