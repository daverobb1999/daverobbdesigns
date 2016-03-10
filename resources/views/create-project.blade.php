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

        <form role="form">

{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'nerds')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('image_name', 'Image Name') }}
        {{ Form::email('image_name', Input::old('image_name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::email('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('short_description', 'Short Description') }}
        {{ Form::email('short_description', Input::old('short_description'), array('class' => 'form-control')) }}
    </div>

            <div class="form-group">
                {{ Form::label('url', 'Website url') }}
                {{ Form::email('url', Input::old('url'), array('class' => 'form-control')) }}
            </div>

    {{ Form::submit('Enter Project', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

        </form>

    </div>

    <footer class="row">
        @include('footer')
    </footer>

</div>
</body>
</html>
