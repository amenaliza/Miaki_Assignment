@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
    
    @if(Session::has('alert-success'))
      <h5>{{ Session::get('alert-success') }}</h5>
    @endif
    
      <h3>Displaying list of products.</h3>
    </div>
  </div>

  <div class="row">
    <table class="table table-striped" border="1" bordercolor="#DDDDDD">
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Category</th>
        <th>Partner</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Status</th>
        <th>Featured</th>
        <th>Actions</th>
      </tr>
      <?php $no=1; ?>
      @foreach($products as $product)
      <tr>
        <td>{{$no++}}</td>
        <td>{{$product->title}}</td>
        <td>{{$product->category}}</td>
        <td>{{$product->partner}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->discount}}%</td>
        <td>@if (($product->publish_status) === 1)
    		<span class="glyphicon glyphicon-ok" style="color:#337AB7"></span>
            @else
    		<span class="glyphicon glyphicon-remove" style="color:#A94442"></span>
            @endif
        </td>
        <td>@if (($product->featured) === 1)
    		<span class="glyphicon glyphicon-ok" style="color:#337AB7"></span>
            @else
    		<span class="glyphicon glyphicon-remove" style="color:#A94442"></span>
            @endif
        </td>
        <td>
        <!--<span class="glyphicon glyphicon-edit" style="color:#337AB7"></span>
        &nbsp;
        <span class="glyphicon glyphicon-remove-sign" style="color:#D9534F"></span>-->
        
        
  <form id="Form1" class="" action="{{route('assignment.destroy',$product->id)}}" method="post">
    <div style="float:left; margin-right:10px">
        <a href="{{route('assignment.edit',$product->id)}}" class="glyphicon glyphicon-edit" style="color:#337AB7; font-size:20px"></a>&nbsp;
    </div>
    <div>
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <!--<a href="#" class="glyphicon glyphicon-remove-sign" style="color:#D9534F; font-size:20px" onclick="submit_delete_parm()"></a>-->&nbsp;
        
        
        <!--<a href="#" class="glyphicon glyphicon-remove-sign" style="color:#D9534F; font-size:20px" onclick="return confirm('Are you sure to delete this data');"></a>&nbsp;

        <input type="submit" class="glyphicon glyphicon-remove-sign" style="color:#D9534F; padding-bottom:5px; font-weight:bold" onclick="return confirm('Are you sure to delete this data');" name="name" value="Delete">-->
        
        <input type="submit" class="glyphicon glyphicon-remove-sign" style="color:#D9534F; padding-bottom:5px; font-weight:bold" onclick="return confirm('Are you sure to delete this data');" name="name" value="Delete">
        
        
    </div>
  </form>
        
        
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  
  @stop
