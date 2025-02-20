<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿作成
        </h2>
    </x-slot>
    <div class="max-w-5xl mx-auto">
        <form class="bg-white p-4 mt-8" enctype="multipart/form-data" action="/posts" method="POST">
            @csrf
            <x-input-label value="画像" class="mb-2" />
            <input type="file"
                class="w-full text-gray-500 font-medium bg-gray-100 file:border-0 file:py-2.5 file:px-4 file:mr-4 file:bg-gray-800 file:text-white rounded" />
            <x-input-label value="キャプション" class="mt-4 mb-2" />
            <textarea rows="8" placeholder="キャプションを入力してください..."
                class="p-2.5 w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
            <x-primary-button type="submit" class="mt-4">公開</x-primary-button>
        </form>
    </div>
</x-app-layout>