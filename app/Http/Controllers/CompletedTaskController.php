<?php

declare(strict_type=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use App\Http\Requests\TaskRegisterPostRequest;
use Illuminate\Support\Facades\Auth;
//use App\Models\Task as TaskModel;
use App\Models\CompletedTask as CompletedTaskModel;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CompletedTaskController extends Controller{

    protected function getListBuilder(){
        return CompletedTaskModel::where('user_id',Auth::id())
                            ->orderBy('priority','DESC')
                            ->orderBy('period')
                            ->orderBy('created_at');
    }


    public function list(){
        //ページネーション表示数
        $per_page = 20;

        //一覧の取得
        $list = $this->getListBuilder()
                            ->paginate($per_page);

        return view('task/completed_list',['list' => $list]);
    }

}
?>