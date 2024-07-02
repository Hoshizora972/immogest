<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImmoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $bien = DB::table('biens')->paginate(12);
        return view ('index',compact('bien','categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show ($id)
    {
        // $rowBien = Bien::findOrFail($id);
        $categories= Category::all();
        $bien = DB::table('biens');
        $rowBien = Bien::where('id',$id)->first();

        $similary=Bien::where('category_id',$rowBien->category_id)->inRandomOrder()->limit(4)->get();
        return view('bien',compact('rowBien','categories','similary','bien'));


    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function category(Category $category)
    {
    $categories = Category::all();
    $biens=Bien::where('category_id', $category->id)->paginate(4);

    return view('bien',compact('biens','categories'));
    }
}
   
    





