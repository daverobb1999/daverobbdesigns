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
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div id="main" class="row">
        @include('admin-nav')
        <!-- /.row -->
        @foreach($project as $item)
            <div class="row">
                <div class="col-md-5">
                    <h5>name : {{$item['name']}}</h5>
                    <p>image name : {{$item['url_to_image']}}</p>
                    <p>description : {{$item['description']}}</p>
                    <p>short description : {{$item['short_description']}}</p>
                    <p>url : {{$item['url']}}</p>
                    <p class ="btn btn-primary"> {{ Html::linkAction('ProjectController@edit','Edit Project', array($item['id'])) }}<span class="glyphicon glyphicon-chevron-right"></span></p>

                    {{ Form::open(array('url' => 'dashboard/' . $item['id'], 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Project', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}

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