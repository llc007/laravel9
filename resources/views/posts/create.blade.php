<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear nuevo post"
>

    <h1>Crear nuevo Post</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        @include('posts.form-fields')

        <button type="submit">Enviar</button>


    </form>

    <br>

    <a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.app>
