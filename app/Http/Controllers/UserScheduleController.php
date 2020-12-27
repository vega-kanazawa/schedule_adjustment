<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tables\User;
use App\Models\Tables\Schedule;
use App\Models\Tables\Adjustment;
use App\Models\Tables\UserSchedule;

class UserScheduleController extends Controller
{
    /**
     * 一覧を表示
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        //$user_list = User::model()->getAll();

        return view('user_schedule.index');
    }

    /**
     * 新しいユーザーを保存
     *
     * @param  Request  $request
     * @return Response
     */
    public function edit(Request $request)
    {
        $name = $request->input('name');

        //
        return view('user_schedule.index');
    }




}
