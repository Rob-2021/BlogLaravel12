<x-layouts.public>

    <h1 class="font-semibold text-xl mb-2">{{ $post->title }}</h1>

    <p class="mb-4">{{ $post->content }}</p>

    <a class="text-blue-500 hover:text-blue-700" href="{{ route('posts.index') }}">Back to posts</a>

</x-layouts.public>