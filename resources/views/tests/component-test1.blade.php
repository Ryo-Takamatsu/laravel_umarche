<x-tests.app>
    <x-slot name="header">Header1</x-slot>
    <x-tests.card title="タイトル" content="コンテンツ" :message="$message"/>
    <x-tests.card title="タイトル" />
    <x-tests.card title="CSSタイトルを変更したい" class="bg-red-300"/>
</x-tests.app>