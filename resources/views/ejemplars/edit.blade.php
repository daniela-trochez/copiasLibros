<h1>Editar</h1>
<form action="{{route('ejemplars.update', $ejemplar)}}" method="POST">
    @csrf
    @method('put')

    <div>
        <label >Libro:</label>
        <select name="libro_id">
        
            @foreach ($libros as $libro)
            <option value="{{$libro->id}}">{{$libro->titulo}}</option>
                
            @endforeach
        </select>
    </div>
    <div>
        <label >Localizacion:
                <input type="text" name="localizacion" value="{{$ejemplar->localizacion}}">
        </label>
    </div>

    <br>
    <button>Actualizar</button>



</form>