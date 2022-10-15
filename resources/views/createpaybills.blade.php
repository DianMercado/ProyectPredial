@extends("layouts.app")
@section('title', 'PayBills Create')
@section('content')
<div class="container " >
<form class="form-group" method="POST" action="/paybills" enctype="multipart/form-data" >
    @csrf
    <div clas="form-group">
        <label for="">Clave Catastral:</label>
        <input type="text" name="clave_catastral" class="form-control" >
</div>
<div clas="form-group">
        <label for="">Teléfono:</label>
        <input type="text" name="telefono"   class="form-control">
</div>
<div clas="form-group">
        <label for="">Correo:</label>
        <input type="text" name="correo" class="form-control"   >
</div>
<div clas="form-group">
        <label for="">Comprobante De Pago:</label>
        <input type="file" name="comprobante_pago_cliente" class="form-control">
        <label for=""></label>
</div> 
        <div class="col text-center">
        <button type="submit" class="btn btn-outline-dark btn-lg">Enviar</button>
        <label for=""></label>
         <label for=""></label>
    	</div>
  
      <div  class="col text-top">
      <label for=""></label>
         <label for=""></label>
         <label for=""></label>
         <label for=""></label>
         <label for=""></label>
         <label for=""></label>
      <a href="/paybills" class="btn btn-outline-dark btn-block">Ver Registros</a>
    </div>

</form>


</div>

@endsection


