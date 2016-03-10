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
			 {{ Form:: open(array('url' => 'contact_request')) }} <!--contact_request is a router from Route class-->

			            <ul class="errors">
			                @foreach($errors->all('<li>:message</li>') as $message)
			                {{ $message }}
			                @endforeach
			            </ul>
			<div class="form-group">
			            {{ Form:: label ('first_name', 'First Name*' )}}
			            {{ Form:: text ('first_name', '', array('class' => 'form-control') )}}
			</div>

			<div class="form-group">
			            {{ Form:: label ('last_name', 'Last Name*' )}}
			            {{ Form:: text ('last_name', '', array('class' => 'form-control') )}}
			 </div>

			 <div class="form-group">
			            {{ Form:: label ('phone_number', 'Phone Number' )}}
			            {{ Form:: text ('phone_number', '', array('placeholder' => '5559485768','class' => 'form-control')) }}
			 </div>

			 <div class="form-group">
			            {{ Form:: label ('email', 'E-mail Address*') }}
			            {{ Form:: email ('email', '', array('placeholder' => 'me@example.com', 'class' => 'form-control')) }}
			 </div>

			 <div class="form-group">
			            {{ Form:: label ('message', 'Message*' )}}
			            {{ Form:: textarea ('message', '', array('class' => 'form-control'))}}
			 </div>

			 <div class="form-group">
			            {{ Form::reset('Clear', array('class' => 'btn btn-default')) }}
			            {{ Form::submit('Send', array('class' => 'btn btn-default')) }}
			</div>
			            {{ Form:: close() }}
			
					</form>

    </div>

    <footer class="row">
        @include('footer')
    </footer>

</div>
</body>
</html>


