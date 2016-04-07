@extends('admin/admin')

@section('title')
Login
@stop

@section('content')
	<h1>hola Login</h1>
<div class="col-md-4 mt">
		
	</div>	
<div class="col-md-3 mt">


    {{ Form::open(array('url'=>'validarlogin','class'=>'form-signin'));}}
      
        <h2 class="form-signin-heading">Por favor ingrese</h2>
        {{ Form::email('email',null,array('placeholder'=>'Ingrese el email','class'=>'form-control','maxlength'=>30,'required'=>'true','autofocus'=>'true'));}}
       <!-- <input type="email" class="form-control" placeholder="Email address" required autofocus> --> <br>
       {{ Form::password('password',array('placeholder'=>'Ingrese su contraseña','class'=>'form-control','required'=>'true'));}}
       <!-- <input type="password" class="form-control" placeholder="Password" required> -->
        
        <!--<label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
        </label> -->
        {{ Form::checkbox('recordar','remember-me',null,array('class'=>'check'))}}
        {{ Form::label('recuerdeme') }}
        
        <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->
        {{Form::submit('Ingresar',array('class'=>'btn btn-lg btn-primary btn-block'))}}
      {{ Form::close();}}

	
</div>	
@stop