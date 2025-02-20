<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿
        </h2>
    </x-slot>
    <div class="max-w-5xl mx-auto">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-1 bg-white mt-8">
            <img class="aspect-square w-full object-cover" src="{{ asset($post->image_path) }}" />
            <div class="p-2">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold">オーナー</h3>
                    <div class="text-gray-500 text-xs">公開日: {{ $post->created_at->format('Y/m/d H:i')}}</div>
                </div>
                <a href="/users{{$post->user->id}}">
                    <div class="bg-white flex border p-2 rounded mt-2">
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
                </a>
                <h3 class="font-semibold mt-2">キャプション</h3>
                <p class="whitespace-pre-wrap py-2">{{ $post->caption }}</p>
                <h3 class="font-semibold mt-2">コメント{{ $post->comments->count() }}件</h3>
                <div class="max-h-96 overflow-y-scroll">
                    @foreach($post->comments as $comment)
                        <div class="py-2 border-b">
                            <div class="flex items-center mb-1">
                                <img src="{{$comment->user->icon}}" class="size-6 rounded-full">
                                <div class="text-sm font-medium text-gray-800 ml-1">{{$comment->user->name}}</div>
                                <div class="text-gray-500 text-xs ml-1">{{$comment->created_at->format('Y/m/d H:i')}}</div>
                            </div>
                            <p class="text-sm">{{$comment->text}}</p>
                        </div>
                    @endforeach
                </div>
                <form method="POST" action="/posts/{{$post->id}}/comments">
                    @csrf
                    <div class="flex mt-2">
                        <x-text-input name="text" class="mr-2 text-sm grow" placeholder="コメントを追加..." />
                        <x-primary-button type="submit">送信</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>