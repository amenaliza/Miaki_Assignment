@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h2>Edit Entry</h2><br />

    </div>
  </div>
  
  <div class="row">
    <form class="" action="{{route('assignment.update',$edit_product->id)}}" enctype="multipart/form-data" method="post">
      <input name="_method" type="hidden" value="PATCH">
      {{csrf_field()}}


          
    <div class="col-md-6">
    
        <div class="col-md-3" style="text-align:right">
        <label>Title</label>
        </div>
        <div class="col-md-9" style="margin-bottom:15px">
          <input type="text" name="title" required="required" value="{{$edit_product->title}}" class="form-control" placeholder="Product Title">
        </div>
        
        

        <div class="col-md-3" style="text-align:right">
        <label for="sel1">Category</label>
        </div>
        <div class="col-md-9" style="margin-bottom:15px">
          <select name="category" class="form-control" id="sel1">
            <option selected value="{{$edit_product->category}}">{{$edit_product->category}}</option>
            <option value="Video">Video</option>
            <option value="Image">Image</option>
            <option value="File">File</option>
          </select>
        </div>
        
        

        <div class="col-md-3" style="text-align:right">
        <label>Partner</label>
        </div>
        <div class="col-md-9" style="margin-bottom:15px">
          <select name="partner" class="form-control">
            <option selected value="{{$edit_product->partner}}">{{$edit_product->partner}}</option>
            <option value="Spondon">Spondon</option>
            <option value="ILM">ILM</option>
          </select>
        </div>
        
        

        <div class="col-md-3" style="text-align:right">
        <label>Description</label>
        </div>
        <div class="col-md-9" style="margin-bottom:15px">
          <textarea name="description" class="form-control" rows="5" cols="50" placeholder="Product Description">{{$edit_product->description}}</textarea>
        </div>
        
        
        
    
    </div>
    
    
    
    <div class="col-md-6">
    
    <div class="col-md-12">
        <div class="col-md-3 form-group" style="text-align:right">
        <label>Published :</label>
        </div>
        <div class="col-md-3 radio" style="margin-bottom:15px; margin-top:0px !important">
  <label><input type="radio" name="publish_status" id="publish_yes" value="1" @if (($edit_product->publish_status) === 1) checked @endif > Yes</label>
  &nbsp;<label><input type="radio" name="publish_status" id="publish_no" value="0" @if (($edit_product->publish_status) === 0) checked @endif > No</label>
        </div>


        <div class="col-md-3 form-group" style="text-align:right">
        <label>Featured :</label>
        </div>
        <div class="col-md-3 radio" style="margin-bottom:15px; margin-top:0px">
  <label><input type="radio" name="featured" id="featured_yes" value="1" @if (($edit_product->featured) === 1) checked @endif > Yes</label> &nbsp;
  <label><input type="radio" name="featured" id="featured_no" value="0" @if (($edit_product->featured) === 0) checked @endif > No</label>
        </div>
    </div>
    
    
    <div class="col-md-12">
    
        <div class="col-md-3 form-group" style="text-align:right">
        <label>Price :</label>
        </div>
        <div class="col-md-3 form-group" style="margin-bottom:15px">
          <input type="number" step="any" name="price" value="{{$edit_product->price}}" class="form-control" placeholder="Price">
        </div>
        
        <div class="col-md-3 form-group" style="text-align:right">
        <label>Discount(%) :</label>
        </div>
        <div class="col-md-3 form-group" style="margin-bottom:15px">
          <input type="text" name="discount" class="form-control" value="{{$edit_product->discount}}" placeholder="Discount">
        </div>

    </div>
    <div class="col-md-12">
        <div class="col-md-3 form-group" style="text-align:right">
        <label>File :</label>
        </div>
        <div class="col-md-9 form-group" style="margin-bottom:15px">
          <input type="file" name="file_name">
          <input type="hidden" name="old_file_name" value="{{$edit_product->file_name}}" />
          
  
    @if (($edit_product->file_name) != '')
        <a href="{{url('/uploads/'.$edit_product->file_name)}}" target="_blank">Click to View the File</a>
    @else
        <a href="#">No File available!</a>
    @endif



          
        </div>
    </div>    
    <div class="col-md-12">
        <div class="col-md-3 form-group" style="text-align:right">
        <label>Thumbnail :</label>
        </div>
        <div class="col-md-9 form-group" style="margin-bottom:15px">
          <input type="file" name="thumbnail">
          <input type="hidden" name="old_thumbnail" value="{{$edit_product->thumbnail}}" />
        </div>
    </div>    
    

        <div class="col-md-12" align="left" style="padding-top:10px">
        	<div class="col-md-3"></div>
        	<div class="col-md-5" style="margin-top:20px">
              <input type="submit" class="btn btn-primary" value="Save">
              <input type="reset" class="btn btn-danger" value="Cancel">
            </div>
        	<div class="col-md-4">
            @if (($edit_product->thumbnail) != '')
                <img src="{{url('/uploads/'.$edit_product->thumbnail)}}" style="width:100px; height:auto; border-radius:5px" alt="Image" />
            @else
            	<img src="{{url('/img_ques.jpg')}}" style="width:100px; height:auto; border-radius:5px" alt="Image" />
            @endif
            
            
            
            </div>
        </div>
    
    </div>
      


    </form>
  </div>
  @stop