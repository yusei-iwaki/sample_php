<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿作成
        </h2>
    </x-slot>
    <div class="max-w-5xl mx-auto">
        <form class="bg-white p-4 mt-8" enctype="multipart/form-data" action="/posts" method="POST">
            @csrf
            @if ($errors->any())
                <div class="my-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <x-input-label value="画像" class="mb-2" />
            <x-file-input />
            <x-input-label value="キャプション" class="mt-4 mb-2" />
            <x-textarea rows="8" placeholder="キャプションを入力してください..." />
            <x-primary-button type="submit" class="mt-4">公開</x-primary-button>
        </form>
    </div>
</x-app-layout>