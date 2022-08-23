<x-layouts.app
    title="Titulo"
    meta-description="Home meta description"
>

    {{--    <x-slot name="title">--}}
    {{--        Home title--}}
    {{--    </x-slot>--}}

    <h1>Blog</h1>
    <a href="{{route('posts.create')}}">Crear nuevo post</a>

    {{--    @dump($posts)--}}

    @foreach($posts as $post)
        <h2>
            <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
        </h2>
    @endforeach
</x-layouts.app>
