<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class UserEntry
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        $abc = DB::table('users')->insert(
            ['name' => $event->userName, 'email' => $event->userEmail , 'password' => 'Pass@234' ,'created_at' => $event->userTimeStamp]
        );
        if ($abc == "true") {
            return "Done";
        } else {
            return "Something went wrong";
        }
    }
}
