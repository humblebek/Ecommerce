<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return auth()->user()->favorites()->paginate(10);
    }

    public function store(Request $request)
    {
        auth()->user()->favorites()->attach($request->product_id);

        return response([
           "succes"=>true
        ]);
    }

    /*
     TODO refactor the responces.Make standart format
     * */
    public function destroy($favorite_id)
    {
        if (auth()->user()->hasFavorite($favorite_id)){
            auth()->user()->favorites()->detach($favorite_id);
        }else{
            return response([
                "message"=>"This favorite doesn't exist on this user"
            ]);
        }

    }
}
