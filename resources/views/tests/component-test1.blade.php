<x-tests.app>
    <x-slot name="header">
        ヘッダー1
    </x-slot>
    コンポーネントテスト１
    <x-tests.card title="タイトル" content="こんてんと" :message="$message"></x-tests.card>
    <x-tests.card title="タイトル"></x-tests.card>
    <x-tests.card title="cssを変更したい" class="bg-red-300"></x-tests.card>

</x-tests.app>
