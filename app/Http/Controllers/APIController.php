<?php

namespace App\Http\Controllers;
use App\Models\Message;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function msg($id){ 
        $msg = Message::where('sender_un', $id) 
        ->orWhere('receiver_un', $id)
        ->orderBy('id', 'ASC')->get();
        return $msg;
    }

}
           