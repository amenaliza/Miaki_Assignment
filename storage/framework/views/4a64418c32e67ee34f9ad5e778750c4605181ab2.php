<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miaki Assignment</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/font-awesome.min.css')); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    <!--<script type="text/javascript">
	  function submit_delete_parm(){
		alert('Are you sure to delete this Product?');
		document.getElementById("Form1").submit();
	  }
    </script>-->
    
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MiakiAssignment</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo e(route('assignment.index')); ?>">Home</a></li>

            <li style="padding-bottom:15px; background-color:#337AB7">
              <a href="<?php echo e(route('assignment.create')); ?>" style="color:#FFF">
                <div class="glyphicon glyphicon-plus-sign" style="float:left; font-size:20px; width:25px">&nbsp;</div>
                <div style="float:left">New</div>
              </a></li>
            
            <li><a href="#"></a></li>

          </ul>
          
          
          
          <div style="float:right !important">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
          </form>
          </div>
          
          
          
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"></a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
      <div class="row">
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    
	<script src="<?php echo e(asset('/js/jquery-1.7.2.min.js')); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
  </body>
</html>