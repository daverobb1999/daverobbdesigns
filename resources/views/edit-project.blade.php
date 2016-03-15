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

<h1>Edit {{ $project->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

            {{ Form::model($project, array('action' => array('ProjectController@update', $project->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('url_to_image', 'Image Name') }}
    {{ Form::text('url_to_image', Input::old('url_to_image'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('short_description', 'Short Description') }}
    {{ Form::textarea('short_description', Input::old('short_description'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('url', 'Website url') }}
    {{ Form::url('url', Input::old('url'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Edit Project', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

        </div>

    </div>

    <footer class="row">
        @include('footer')
    </footer>

</div>
</body>
</html>
