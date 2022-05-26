<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    public function index(){

        $properties = DB::table('properties')->get();

        return view('property/index', ['properties' => $properties]);
    }

    public function create(){
        return view('property/create');
    }

    public function store(Request $request){

        $propertySlug = Str::slug($request->name);

        $property = [
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $propertySlug,
            'rental_price' => $request->rental_price,
            'sale_price' => $request->sale_price
        ];

        DB::table('properties')->insert($property);

        return redirect()->route('property.index');

    }
}
