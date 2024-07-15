<h1>Registr de copias</h1>
<a href="{{route('ejemplars.create')}}">Crear Ejemplar</a>


<ul>
    @foreach ($ejemplars as $ejemplar)
    <li>
        <a href="{{route('ejemplars.show',$ejemplar)}}">{{$ejemplar->libro->titulo}}</a>
    </li>
        
    @endforeach
</ul>