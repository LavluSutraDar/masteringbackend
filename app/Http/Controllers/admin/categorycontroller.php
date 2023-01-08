<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class categorycontroller extends Controller
{
    //

    public function index(){
        //__Quary Bilder
        //$category = DB::table('categories')->get();

        //__Eleoquent ORM
        $category = category::get();
        return view('admin.category.index', compact('category'));

    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
        ]);

        category::insert([
            'category_name' => $request->name,
            'category_slug' =>  Str::of($request->name)->slug('-'),

        ]);

         // Model r maddome insert korchi

        // $category = new category;
        // $category->category_name=$request->name;
        // $category->category_name= Str::of($request->name)->slug('-');
        // $category->save();
         return redirect()->back();

    }

    public function edit($id){

       //$data = DB::table('categories')->where('id', $id)->first();
       $data = category::find($id);
       return view('admin.category.edit', compact('data'));
    }

     public function update(Request $request, $id ){
         $cat_update = category::find($id);


         $cat_update->update([
               'category_name' => $request->name,
               'category_slug' =>  Str::of($request->name)->slug('-'),
         ]);


         return redirect()->route('all.category');
    }

    public function distroy(Request $request, $id){
         // Query maddome delete korchi
        DB::table('categories')->where('id', $id)->delete();

        //Model r maddome delete korbo
        $delete = category::find($id);
        $delete->delete();

        return redirect()->back();


    }
}
