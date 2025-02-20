<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            オーナー
        </h2>
    </x-slot>

    <div class="max-w-5xl mx-auto">
        <div class="bg-white p-4 flex mt-8">
            @if($user->icon)
                <img class="block h-24 rounded-full aspect-square object-cover" src="{{ asset($user->icon) }}">
            @endif
            <div class="pl-4">
                <div>
                    <p class="text-lg text-black font-semibold">
                        {{ $user->name }}
                    </p>
                    <p class="font-medium whitespace-pre-wrap">{{ $user->description }}</p>
                    <div class="flex mt-4">
                        <p class="text-sm text-black font-semibold">
                            投稿{{ $posts->count() }}件
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-8">
            <div class="bg-white">
                <div class="grid grid-cols-3 gap-1">
                    @foreach ($posts as $post)
                        <a href="/posts/{{$post->id}}">
                            <img class="aspect-square w-full object-cover" src="{{ asset($post->image_path) }}" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>