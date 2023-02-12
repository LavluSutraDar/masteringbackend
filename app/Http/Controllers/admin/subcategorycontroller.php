<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\subcategory;
use Illuminate\Support\Facades\DB;


class subcategorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //MODEL 
        $data = subcategory::all();


        // QUARY BILDER DIA JOIN
        //$data = DB::table('subcategory')->get();

        //$data = DB::table('subcategory')->leftJoin('categories', 'subcategory.category_id', 'categories.id')->select('categories.category_name', 'subcategory.*')->get();

        return view('admin.subcategory.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('categories')->get();
        //$data = category::all();

        return view('admin.subcategory.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subcategoryname' => 'required',
            'category_id' => 'required',
        ]);

        $data = array(
            'category_id' => $request->category_id,

            'subcategory_name' => $request->subcategoryname,
        );

        DB::table('subcategory')->insert($data);
        return redirect()->back()->with('sucess', 'SucessFully Inserted');

        //MODEL R MADDOME INSERT
        // subcategory::insert([
        //     'category_id' => $request->category_id,

        //     'subcategory_name' => $request->subcategoryname,

        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //subcategory::destroy($id);
        DB::table('subcategory')->where('id', $id)->delete();
        return redirect()->back();
        //return redirect()->back()->with('sucess', 'SucessFully Inserted');
    }
}
