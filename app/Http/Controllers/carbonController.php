<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Student;

class carbonController extends Controller
{

    public function lastweek($lastWeekUsersCount){
        $lastWeekUsersCount = Student::whereDate('created_at', '>=',Carbon::now()->addWeeks(-1))->count();
        
        return $lastWeekUsersCount;
    }

    public function lastmoth($lastMonthUsersCount){
        $lastMonthUsersCount = Student::whereDate('created_at', '>=',Carbon::now()->addMonths(-1))->count();

        return $lastMonthUsersCount;
    }
}
