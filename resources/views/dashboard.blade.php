<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                        <a href="{{route('profile.edit')}}"
                            class="ml-2 px-2 text-sm text-black font-semibold border rounded">プロフィールを編集</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-8">
            <div class="bg-white">
                <div class="grid grid-cols-3 gap-1">
                    @foreach ($posts as $post)
                        <a href="/posts/{{$post->id}}/edit">
                            <img class="aspect-square w-full object-cover" src="{{ asset($post->image_path) }}" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>