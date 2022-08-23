<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear nuevo post"
>

    <h1>Crear nuevo Post</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text" value="{{old('title')}}">
            @error('title')
            <br>
            <small style="color: red">{{$message}}</small>
            @enderror

        </label><br>

        <label>
            Body <br>
            <textarea name="body" id="" cols="30" rows="10" >{{old('body')}}</textarea>
            @error('body')
            <br>
            <small style="color: red">{{$message}}</small>
            @enderror
        </label> <br>

        <button type="submit">Enviar</button>


    </form>

    <br>

    <a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.app>
