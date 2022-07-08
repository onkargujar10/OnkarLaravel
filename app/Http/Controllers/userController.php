<?php

namespace App\Http\Controllers;

use App\Events\UserCreated;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function eventListener(Request $request)
    {
        $userName = "User";
        $t = time();
        $userEmail = 'user5@gmail.com';
        $userTimeStamp = date("Y-m-d H:i:s",$t);
        $MainEvent = event( new UserCreated($userName,$userEmail,$userTimeStamp));
        if ($MainEvent[0] == 'Done') {
            dd("Data Logged Successfully.");
        }else{
            dd("Something went wrong");
        }
    }
}
