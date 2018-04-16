<?php

namespace App\Helpers;
use Request;
use App\Activelog as ActiveLogModel;

class Activelog
{

    public static function logadd($subject)
    {
        $log = [];
        $log['subject'] = $subject;
        $log['url'] = Request::fullUrl();
        $log['method'] = Request::method();
        $log['ip'] = Request::ip();
        $log['agent'] = Request::header('user-agent');
        $log['user_id'] = auth()->check() ? auth()->user()->id : 1;
        ActiveLogModel::create($log);
    }

    public static function loglists()
    {
        return ActiveLogModel::latest()->get();
    }

}