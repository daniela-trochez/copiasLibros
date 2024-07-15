<h1>crear Copia</h1>

<form action="{{route('ejemplars.store')}}" method="POST">

    @csrf

    <div>
        <label >Libro:</label>
        <select name="libro_id">
            <option >Elige una opcion</option>
            @foreach ($libros as $libro)
            <option value="{{$libro->id}}">{{$libro->titulo}}</option>
                
            @endforeach
        </select>
    </div>
    <div>
        <label >Localizacion:
                <input type="text" name="localizacion">
        </label>
    </div>

    <br>
    <button>Enviar</button>


</form>