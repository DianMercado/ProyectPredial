@extends("layouts.app")
@section('title', 'contribuyente')
@section('content')
@csrf
<div class="container text-" >
    <a href="/contribuyentes" class="btn btn-outline-secundary ">Regresar</a>
    </div>
<div class="container  align-items: center; y justify-content: center ">
<h5 class="text-center">{{$contribuyente->nombre}}</h5>
<h5 class="text-center">{{$contribuyente->apellido_paterno}}</h5>
<h5 class="text-center">{{$contribuyente->apellido_materno}}</h5>
<h5 class="text-center">{{$contribuyente->clave_catastral}}</h5>
<h5 class="text-center">{{$contribuyente->correo}}</h5>

  </div>
@endsection