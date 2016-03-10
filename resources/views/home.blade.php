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
        @foreach($project as $item)
            <div class="row">
                <div class="col-md-7">
                    <a href="">
                        <img class="img-responsive border" src=http://localhost/drd_2/public/images/{{$item['url_to_image']}} alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>{{$item['name']}}</h3>
                    <p>{{$item['short_description']}}</p>
                    <a class="btn btn-primary" href=http://localhost/drd_2/public/project/{{$item['id']}}>View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
            <!-- /.row -->

            <hr>

            @endforeach



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