<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Session;


class Admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_data=DB::table('admins')->get();
        return view('Admins.index',compact('admin_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $iamge_data=$request->file("AdminImage");
        $image_name=time() .$iamge_data->getClientOriginalName();
        $location=public_path("upload/");
        $iamge_data->move($location,$image_name);
        DB::table('admins')->insert([
            "name"=>$request->AdminName,
            "password"=>$request->AdminPassword,
     "email"=>$request->AdminEmail,
     "image"=>$image_name
             ]);
             return redirect()->back()->with("done","add admin succesufly");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

  $show_admin= DB::table('admins')->find($id);
  return view("Admins.show", compact("show_admin"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $edit_Admin=DB::table('admins')->find($id);

        return view('Admins.edit',compact("edit_Admin"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

     $old_photo=  DB::table('admins')->where('id', '=', $id)->first();
        $iamge_data=$request->file("AdminImage");
        if($iamge_data==null){
$image_name=$old_photo->image;
        }
else{
    $image_name=time() .$iamge_data->getClientOriginalName();
    $location=public_path("upload/");
    $iamge_data->move($location,$image_name);
}

        DB::table('admins')->where("id","=",$id)->update([
            "name"=>$request->AdminName,
            "password"=>$request->AdminPassword,
     "email"=>$request->AdminEmail,
     "image"=>$image_name
             ]);
             return redirect()->route("admin.index")->with("done","update admin succesufly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        DB::table('admins')->where('id', '=', $id)->delete();
        return redirect()->route("admin.index")->with("done","delete admin succesufly");
    }
}
