<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新着投稿
        </h2>
    </x-slot>

    <div class="max-w-5xl mx-auto">
        <div class="bg-white mt-8">
            <div class="grid grid-cols-3 gap-1">
                @foreach ($posts as $post)
                    <a href="/posts/{{$post->id}}">
                        <img class="aspect-square w-full object-cover" src="{{ asset($post->image_path) }}" />
                        <div class="flex justify-between items-center p-1 border">
                            <div class="flex items-center">
                                @if($post->user->icon)
                                    <img class="block size-6 rounded-full aspect-square object-cover"
                                        src="{{ asset($post->user->icon) }}">
                                @endif
                                <p class="text-sm text-black font-semibold ml-2">
                                    {{ $post->user->name }}
                                </p>
                            </div>
                            <p class="text-gray-500 text-xs">{{ $post->created_at->format('Y/m/d') }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>