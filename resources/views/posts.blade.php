<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Ini adalah halaman Blog</h3>

    @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 1 Januari 20124
        </div>
        <p class="py-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Readmore &raquo;</a>
    </article>
    @endforeach

</x-layouts>