<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    protected $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function send(Request $request)
    {
        $request->validate([
            'type' => 'required|string|in:email,sms',
            'message' => 'required|string'
        ]);

        try {
            $this->notificationService->sendNotification($request->type, $request->message);
            return response()->json(['success'=>true, 'message'=>'Notification sent successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'message'=>$e->getMessage()], 400);
        }
    }
}
