<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\Areeze; 
use App\Confirm;

class NotificationController extends Controller
{
    //

    function getNotifications()
    {
        $statuses = Status::where('status_name', 'Rejected')->get('id');
        // $notifications = Confirm::where('status_id', 'IN',$statuses )->get();
        $notifications = Confirm::all();

        return response->json($notifications);

    }
}
