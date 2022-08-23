<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear nuevo post"
>

    <h1>Crear nuevo Post</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text">
        </label><br>

        <label>
            Body <br>
            <textarea name="textarea" id="" cols="30" rows="10"></textarea>
        </label> <br>

        <button type="submit">Enviar</button>


    </form>

    <br>

    <a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.app>
