  <?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <h2>New Entry</h2>
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-md-12">
      <form class="" action="<?php echo e(route('assignment.store')); ?>" enctype="multipart/form-data" method="post">
        <?php echo e(csrf_field()); ?>

        
    
    <div class="col-md-6">
    
        <div class="col-md-3" style="text-align:right">
        <label>Title</label>
        </div>
        <div class="col-md-9" style="margin-bottom:15px">
          <input type="text" name="title" required="required" class="form-control" placeholder="Product Title">
        </div>
        
        

        <div class="col-md-3" style="text-align:right">
        <label for="sel1">Category</label>
        </div>
        <div class="col-md-9" style="margin-bottom:15px">
          <select name="category" class="form-control" id="sel1">
            <option selected value="">Select a Category</option>
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
            <option selected value="">Select a partner</option>
            <option value="Spondon">Spondon</option>
            <option value="ILM">ILM</option>
          </select>
        </div>
        
        

        <div class="col-md-3" style="text-align:right">
        <label>Description</label>
        </div>
        <div class="col-md-9" style="margin-bottom:15px">
          <textarea name="description" class="form-control" rows="5" cols="50" placeholder="Product Description"></textarea>
        </div>
        
        
        
    
    </div>
    
    
    
    <div class="col-md-6">
    
    <div class="col-md-12">
        <div class="col-md-3 form-group" style="text-align:right">
        <label>Published :</label>
        </div>
        <div class="col-md-3 radio" style="margin-bottom:15px; margin-top:0px !important">
  <label><input type="radio" name="publish_status" id="publish_yes" value="1" > Yes</label>
  &nbsp;<label><input type="radio" name="publish_status" id="publish_no" value="0" > No</label>
        </div>


        <div class="col-md-3 form-group" style="text-align:right">
        <label>Featured :</label>
        </div>
        <div class="col-md-3 radio" style="margin-bottom:15px; margin-top:0px">
  <label><input type="radio" name="featured" id="featured_yes" value="1" > Yes</label> &nbsp;
  <label><input type="radio" name="featured" id="featured_no" value="0" > No</label>
        </div>
    </div>
    
    
    <div class="col-md-12">
    
        <div class="col-md-3 form-group" style="text-align:right">
        <label>Price :</label>
        </div>
        <div class="col-md-3 form-group" style="margin-bottom:15px">
          <input type="number" step="any" name="price" class="form-control" placeholder="Price">
        </div>
        
        <div class="col-md-3 form-group" style="text-align:right">
        <label>Discount(%) :</label>
        </div>
        <div class="col-md-3 form-group" style="margin-bottom:15px">
          <input type="text" name="discount" class="form-control" placeholder="Discount">
        </div>

    </div>
    <div class="col-md-12">
        <div class="col-md-3 form-group" style="text-align:right">
        <label>File :</label>
        </div>
        <div class="col-md-9 form-group" style="margin-bottom:15px">
          <input type="file" name="file_name">
        </div>
    </div>    
    <div class="col-md-12">
        <div class="col-md-3 form-group" style="text-align:right">
        <label>Thumbnail :</label>
        </div>
        <div class="col-md-9 form-group" style="margin-bottom:15px">
          <input type="file" name="thumbnail">
        </div>
    </div>    
    

        <div class="col-md-12" align="left" style="padding-top:10px">
        	<div class="col-md-3"></div>
        	<div class="col-md-5" style="margin-top:20px">
              <input type="submit" class="btn btn-primary" value="Save">
              <input type="reset" class="btn btn-danger" value="Cancel">
            </div>
        	<div class="col-md-4">
            <img src="<?php echo e(url('/img_ques.jpg')); ?>" style="width:100px; height:auto; border-radius:5px" alt="Image" />
            </div>
        </div>


    
    </div>
      
      
      
      </form>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>