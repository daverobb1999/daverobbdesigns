<!doctype html>
<html>
<head>
    @include('head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('nav')
    </header>

    <div id="main" class="row">
	        <!-- /.row -->
			<?php
			$projects = DB::table('project')->orderBy('id')->get();

			foreach ($projects as $project)
			{
		     echo '  <div class="row">
		            <div class="col-md-7">
		                <a href="'. url('/project/'.$project->name) .'">
		                    <img class="img-responsive border" src="http://localhost/daverobbdesigns/public/images/'. $project->url_to_image .'" alt="">
		                </a>
		            </div>
		            <div class="col-md-5">
		                <h3>'. $project->name .'</h3>
		                <p>'. $project->short_description .'</p>
		                <a class="btn btn-primary" href="'. url('/project/'.$project->name) .'">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
		            </div>
		        </div>
		        <!-- /.row -->

		        <hr>';
			}
			?>

      

	        <!-- Pagination -->
	        <div class="row text-center">
	            <div class="col-lg-12">
	                <ul class="pagination">
	                    <li>
	                        <a href="#">&laquo;</a>
	                    </li>
	                    <li class="active">
	                        <a href="#">1</a>
	                    </li>
	                    <li>
	                        <a href="#">2</a>
	                    </li>
	                    <li>
	                        <a href="#">3</a>
	                    </li>
	                    <li>
	                        <a href="#">4</a>
	                    </li>
	                    <li>
	                        <a href="#">5</a>
	                    </li>
	                    <li>
	                        <a href="#">&raquo;</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	        <!-- /.row -->

	        <hr>
		
    </div>

    <footer class="row">
        @include('footer')
    </footer>
	


</div>
</body>
</html>
