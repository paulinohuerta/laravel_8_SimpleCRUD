<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<p>Nuevo registro: <a href="{{ route('persons.create') }}">ALTA</a></p>
@if ($message = Session::get('success'))
<!--        <div class="alert alert-success">
            <p></p>
	</div> 
  <p>Creado nuevo registro con éxito</p>
-->
  <p> {{ $message }}</p>
@endif
<table style="width:100%">
  <tr>
    <th>Nombre</th>
    <th>País</th>
    <th>Acciones</th>
  </tr>
  @foreach ($todos as $uno)
   <tr>
     <td> {{ $uno['name'] }}</td>
     <td> {{ $uno['country'] }} </td>
     <td>
       <form action="{{ route('persons.destroy', $uno['id']) }}" method="POST">
	    <a href="{{ route('persons.show', $uno['id']) }}">mostrar</a>
            <a href="{{ route('persons.edit', $uno['id']) }}">editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" title="delete">eliminar</button>
       </form>
     </td>
   </tr>
  @endforeach
</table> 
</body>
<html>
