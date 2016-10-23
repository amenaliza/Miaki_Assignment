  <?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
    
    <?php if(Session::has('alert-success')): ?>
      <h5><?php echo e(Session::get('alert-success')); ?></h5>
    <?php endif; ?>
    
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
      <?php foreach($products as $product): ?>
      <tr>
        <td><?php echo e($no++); ?></td>
        <td><?php echo e($product->title); ?></td>
        <td><?php echo e($product->category); ?></td>
        <td><?php echo e($product->partner); ?></td>
        <td><?php echo e($product->price); ?></td>
        <td><?php echo e($product->discount); ?>%</td>
        <td><?php if(($product->publish_status) === 1): ?>
    		<span class="glyphicon glyphicon-ok" style="color:#337AB7"></span>
            <?php else: ?>
    		<span class="glyphicon glyphicon-remove" style="color:#A94442"></span>
            <?php endif; ?>
        </td>
        <td><?php if(($product->featured) === 1): ?>
    		<span class="glyphicon glyphicon-ok" style="color:#337AB7"></span>
            <?php else: ?>
    		<span class="glyphicon glyphicon-remove" style="color:#A94442"></span>
            <?php endif; ?>
        </td>
        <td>
        <!--<span class="glyphicon glyphicon-edit" style="color:#337AB7"></span>
        &nbsp;
        <span class="glyphicon glyphicon-remove-sign" style="color:#D9534F"></span>-->
        
        
  <form id="Form1" class="" action="<?php echo e(route('assignment.destroy',$product->id)); ?>" method="post">
    <div style="float:left; margin-right:10px">
        <a href="<?php echo e(route('assignment.edit',$product->id)); ?>" class="glyphicon glyphicon-edit" style="color:#337AB7; font-size:20px"></a>&nbsp;
    </div>
    <div>
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        
        <!--<a href="#" class="glyphicon glyphicon-remove-sign" style="color:#D9534F; font-size:20px" onclick="submit_delete_parm()"></a>-->&nbsp;
        
        
        <!--<a href="#" class="glyphicon glyphicon-remove-sign" style="color:#D9534F; font-size:20px" onclick="return confirm('Are you sure to delete this data');"></a>&nbsp;

        <input type="submit" class="glyphicon glyphicon-remove-sign" style="color:#D9534F; padding-bottom:5px; font-weight:bold" onclick="return confirm('Are you sure to delete this data');" name="name" value="Delete">-->
        
        <input type="submit" class="glyphicon glyphicon-remove-sign" style="color:#D9534F; padding-bottom:5px; font-weight:bold" onclick="return confirm('Are you sure to delete this data');" name="name" value="Delete">
        
        
    </div>
  </form>
        
        
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
  
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>