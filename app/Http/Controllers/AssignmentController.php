<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use Illuminate\Support\Facades\DB;

use App\Assignment;


class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
   
    public function index()
    {
		$products = Assignment::all();
		return view('assignment.index',['products' => $products]);
    }
	
	
    /*public function index()
    {
		//$products = DB::select('select * from tb_product');
		$products = DB::select('select * from tb_product');
		return view('assignment.index',['products' => $products]);
    }*/
	
	
	
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new data
        return view('assignment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // create new data
    $product = new assignment; // Here new "assignment" is the middleware controller name
    $product->title = $request->title;
    $product->category = $request->category;
    $product->partner = $request->partner;
    $product->description = $request->description;
    $product->publish_status = $request->publish_status;
    $product->price = $request->price;
    $product->featured = $request->featured;
    $product->discount = $request->discount;
	
		
		$file_name = $request->file('file_name');
		//$size = $file_name->getSize(); // Here has no size limit to upload.
		if(isset($file_name))
		{
		  $ext = $file_name->getClientOriginalExtension();
		  $new_path = 'file_'.time().'.'.$ext;
		  $file_name->move('uploads',$new_path);
		  $product->file_name = $new_path;
		}
		

		
			$thumbnail = $request->file('thumbnail');
			//$size = $thumbnail->getSize(); // Here has no size limit to upload.
			if(isset($thumbnail))
			{
			  $ext = $thumbnail->getClientOriginalExtension();
			  if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif')
			  {
				  $new_path = 'thumbnail_'.time().'.'.$ext;
				  $thumbnail->move('uploads',$new_path);
				  $product->thumbnail = $new_path;
			  }
			}
	
	

    //$product->featured = $request->;
    //$product->discount = $request->;
	
    $product->save();
	
	//$request->session()->flash('status', 'Task was successful!');
    //return redirect()->route('assignment.create');
	//return redirect()->route('assignment.index')->with('message','Data has been Saved!');
    return redirect()->route('assignment.index')->with('alert-success','Data has been Saved!');


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
        $edit_product = Assignment::findOrFail($id);
        // return to the edit views
        return view('assignment.edit',compact('edit_product'));
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
        $product = Assignment::findOrFail($id);
		$product->title = $request->title;
		$product->category = $request->category;
		$product->partner = $request->partner;
		$product->description = $request->description;
		$product->publish_status = $request->publish_status;
		$product->price = $request->price;
		$product->featured = $request->featured;
		$product->discount = $request->discount;
		
		
		// Change existing Data if new file has uploaded other wise not.
		$old_file_name = $request->old_file_name;
		$file_name = $request->file('file_name');
		if(isset($file_name))
		{
		$ext = $file_name->getClientOriginalExtension();
		$new_path = 'file_'.time().'.'.$ext;
		unlink(public_path('uploads/'.$old_file_name));
		$file_name->move('uploads',$new_path);
		$product->file_name = $new_path;
		}

			
			// Change existing Data if new file has uploaded other wise not.
			$old_thumbnail = $request->old_thumbnail;
			$thumbnail = $request->file('thumbnail');
			if(isset($thumbnail))
			{
			  $ext = $thumbnail->getClientOriginalExtension();
			  if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif')
			  {
				  $new_path = 'thumbnail_'.time().'.'.$ext;
				  unlink(public_path('uploads/'.$old_thumbnail));
				  $thumbnail->move('uploads',$new_path);
				  $product->thumbnail = $new_path;
			  }
			}
		
		
		
        $product->save();

        return redirect()->route('assignment.index')->with('alert-success','Data has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data
        $product = Assignment::findOrFail($id);
		  //$file_name = $product->file_name;
		  //$thumbnail = $product->thumbnail;
		  //unlink(public_path('uploads/'.$file_name));
		  //unlink(public_path('uploads/'.$thumbnail));		  
        $product->delete();
        return redirect()->route('assignment.index')->with('alert-success','Data has been Deleted!');
    }
}
