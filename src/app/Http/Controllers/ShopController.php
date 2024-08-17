<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->shop = new Shop();
    }

    public function shop()
    {
        $shops = Shop::all();
        return view('shop', ['shops' => $shops]);
    }

    public function create(Request $request){
        $detail = $request->all();
    }

    public function detail(Request $request)
    {
        $shop = Shop::find($request->id);
        return view('detail', ['detail' => $shop]);
    }

    public function search(Request $request)
    {
        $shops = Shop::with('shop')->AreaSearch($request->area)->GenreSearch($request->genre)->NameSearch($request->name)->get();

        return view('shop', compact('shop'));
    }
}
