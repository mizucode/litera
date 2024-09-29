<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="">
            By
            <a href="/posts?author={{ $post->author->username }}"
                class="hover:underline text-base text-gray-500 ">{{ $post->author->name }}</a>
            in
            <a href="/posts?category={{ $post->category->slug }}"
                class="hover:underline text-base text-gray-500 ">{{ $post->category->slug }}</a>
            |
            {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts/" class="font-medium text-blue-500 hover:underline"> &laquo; Back To Post</a>

    </article>
</x-layout>
