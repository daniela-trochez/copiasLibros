<h1>detalles de copias</h1>

<p><strong>id:</strong>{{$ejemplar->id}}</p>
<p><strong>Localización:</strong>{{$ejemplar->localizacion}}</p>
<p><strong>Libro nombre:</strong>{{$ejemplar->libro->titulo}}</p>
<p><strong>Libro id:</strong>{{$ejemplar->libro_id}}</p>

<br><br>
<a href="{{route('ejemplars.edit',$ejemplar)}}">Editar</a>
<br>
<form action="{{route('ejemplars.destroy',$ejemplar)}}" method="POST">

    @csrf
    @method('delete')
    <button>Eliminar</button>
</form>