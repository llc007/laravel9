<x-layouts.app
    title="Titulo"
    meta-description="Home meta description"
>

    {{session('status')}}

    {{--    <x-slot name="title">--}}
    {{--        Home title--}}
    {{--    </x-slot>--}}

    <h1>Blog</h1>
    <a href="{{route('posts.create')}}">Crear nuevo post</a>

    {{--    @dump($posts)--}}

    @foreach($posts as $post)
        <div style="display: flex; align-items: baseline ">

            <h2>
                <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
            </h2> &nbsp;
            <a href="{{ route('posts.edit',[$post]) }}">Edit</a>
        </div>
    @endforeach
</x-layouts.app>
