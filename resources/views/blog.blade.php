<x-layouts.app
    title="Titulo"
    meta-description="Home meta description"
>

    {{--    <x-slot name="title">--}}
    {{--        Home title--}}
    {{--    </x-slot>--}}

    <h1>Blog</h1>

{{--    @dump($posts)--}}

    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
    @endforeach
</x-layouts.app>
