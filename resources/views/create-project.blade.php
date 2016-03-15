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

        <div role="form">

{{Html::ul($errors->all())}}

{!!  Form::open(array('action' => array('ProjectController@store'))) !!}

    <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('url_to_image', 'Image Name') !!}
            {!! Form::text('url_to_image', Input::old('image_name'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', Input::old('description'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('short_description', 'Short Description') !!}
            {!! Form::textarea('short_description', Input::old('short_description'), array('class' => 'form-control')) !!}
        </div>

                <div class="form-group">
                    {!! Form::label('url', 'Website url') !!}
                    {!! Form::text('url', Input::old('url'), array('class' => 'form-control')) !!}
                </div>

        {!! Form::submit('Enter Project', array('class' => 'btn btn-primary')) !!}

    {!!  Form::close() !!}

        {{--   <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            {!! Form::open(array('route' => 'project_store', 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::label('Name') !!}
                {!! Form::text('name', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Name')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('URL to Image') !!}
                {!! Form::text('url_to_image', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'URL to Image')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Description') !!}
                {!! Form::textarea('description', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Description')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Short Description') !!}
                {!! Form::textarea('short_description', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Short Description')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Website URL') !!}
                {!! Form::text('url', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Website URL')) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Enter Project',
                  array('class'=>'btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}--}}
        </div>
        {{-- dd(get_defined_vars()['__data']) --}}
    </div>

    <footer class="row">
        @include('footer')
    </footer>

</div>
</body>
</html>
