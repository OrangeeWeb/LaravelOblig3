<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User as User;
use App\Item as Item;
use App\Message as Message;

class MessageController extends Controller
{
    
    // Require Authentication to view these routes
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        return View('message.index');
    }
    public function sent(){
        return View('message.sent');
    }
    
    public function sendTo($usermail, $itemSlug){
        
        $user = User::where('email', $usermail)->get()->lists('name', 'id');
        $item = Item::where('slug', $itemSlug)->get()->lists('header', 'id');
        $itemData = Item::where('slug', $itemSlug)->get()->first();
        $items = Item::all()->lists('header', 'id');
        $users = User::all()->lists('name', 'id');

        return View('message.send', compact('user', 'users', 'item', 'items', 'itemData'));
    }
    
    public function send(){
        return View('message.send');
    }
    public function message($msg){
        return $msg;
    }
}
