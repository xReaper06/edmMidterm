<?php
namespace App\Http\Controllers\ServiceController;

use Illuminate\Http\Request;
use App\Models\Item;
class service{
    public static function getItem(){
        return Item::all();
    }
    public static function addItem(Request $request){
        $tmp = new Item;
        $tmp->name = $request->name;
        $tmp->price = $request->price;
        $tmp->save();
        return Item::all();
    }
    public static function updateItem(Request $request){
        $tmp = Item::find($request->id);
        $tmp->name = $request->name;
        $tmp->price = $request->price;
        $tmp->save();
        return Item::all();
    }
    public static function deleteItem(Request $request){
        $tmp = Item::find($request->id);
        $tmp->delete();
        return Item::all();
    }
}


?>