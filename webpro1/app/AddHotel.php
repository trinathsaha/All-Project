<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddHotel extends Model
{
    public static function saveAddHotelInfo($request)
    {
        $add_hotel = new AddHotel();
        $image = $request->file('hotel_image');
        $imageName = $image->getClientOriginalName();
        $directory = 'hotel-images/';
        $image->move($directory, $imageName);

        $add_hotel->hotel_name = $request->hotel_name;
        $add_hotel->city_name = $request->city_name;
        $add_hotel->room_no = $request->room_no;
        $add_hotel->adult = $request->adult;
        $add_hotel->children = $request->children;
        $add_hotel->hotel_image = $directory.$imageName;
        $add_hotel->save();
    }
}
