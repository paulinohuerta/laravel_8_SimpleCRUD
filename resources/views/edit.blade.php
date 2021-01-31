<html>
<body>
<h2>Editando persona {{$person->name}}</h2>
 <form action="{{route('persons.update', $person->id)}}" method="POST">
        @csrf
        @method('PUT')
          <strong>Name:</strong>
          <input type="text" name="name" value="{{$person->name}}"/>
          <strong>País</strong>
          <input type="text" name="country" value="{{$person->country}}"/>
          <button type="submit">Submit</button>
 </form>
</body>
</html>
