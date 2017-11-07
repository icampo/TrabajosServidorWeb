@extends('layouts.app')
@section('content')
    <div class=”container”>
        <div class=”row”>
            <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class=”panel-heading”>Registración completada</div>
                <div class=”panel-body”>
                    Tu email se ha registrado correctamente. Haz click aquí <a href=”{{url('/login')}}”>login</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection