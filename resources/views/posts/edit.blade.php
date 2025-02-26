<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿編集
        </h2>
    </x-slot>
    <div class="max-w-5xl mx-auto">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-1 bg-white mt-8">
            <img class="aspect-square w-full object-cover" src="{{ asset($post->image_path) }}" />
            <div class="p-2">
                <h3 class="font-semibold mb-2">オーナー</h3>
                <div class="bg-white flex border p-2 rounded">
                    @if($post->user->icon)
                        <img class="block size-12 rounded-full aspect-square object-cover"
                            src="{{ asset($post->user->icon) }}">
                    @endif
                    <div class="pl-4">
                        <div>
                            <p class="text-lg text-black font-semibold">
                                {{ $post->user->name }}
                            </p>
                            <p class="text-sm font-medium whitespace-pre-wrap">{{ $post->user->description }}</p>
                        </div>
                    </div>
                </div>
                <form method="POST" action="/posts/{{$post->id}}">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        <div class="my-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-500">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h3 class="font-semibold mt-2">キャプション</h3>
                    <x-textarea name="caption" rows="8" class="mt-2">{{ $post->caption }}</x-textarea>
                    <div class="flex items-center mt-4">
                        <x-primary-button type="submit">更新</x-primary-button>
                        <a href="/posts/{{$post->id}}" class="text-xs border p-2 rounded ml-4">
                            投稿画面へ
                        </a>
                    </div>
                </form>
                <form method="POST" action="/posts/{{$post->id}}">
                    @csrf
                    @method('DELETE')
                    <x-secondary-button type="submit" class="mt-4">
                        削除
                    </x-secondary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>