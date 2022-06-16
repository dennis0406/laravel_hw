<?php

namespace App\Http\Controllers;

use App\Http\Requests\roomValidateRequest;
use Illuminate\Http\Request;

class RoomManagerController extends Controller
{
    function index()
    {
        return view("rooms.addRoom");
    }

    public function create(roomValidateRequest $request)
    {
        // $image = $request->file('image');
        // $path = $image->move('images', $image->getClientOriginalName());
        // echo $path;

        $newRoom = [
            'name' => $name = $request-> input("email"),
            'desc' => $desc = $request->input("desc"),
            'price' => $price = $request->input("price"),
            'image' => $image = $request->file('image')->getClientOriginalName(),
        ];

        echo $newRoom;
        return view("rooms.addRoom")->with('newRoom', $newRoom);
    }
    //
}
