<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = notification::latest('date')->paginate(3);    
       
        // when there are no notifications, send a message no notifications found
        if ($notifications->isEmpty()) {
            return view('notifications.index', [
                'notifications' => $notifications,
                'message' => 'Geen meldingen gevonden',
            ]);
        }
        return view('notifications.index', compact('notifications'));

    }
}
