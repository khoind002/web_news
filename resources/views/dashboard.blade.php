<x-app-layout>
    <x-slot name="header">
        <a href="/">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Xem tin tức ') }}
            </h2>
        </a>
        <br>
        <a href="/give">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Thông tin') }}
            </h2>
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Xin chào bạn đến với trang web") }}
                </div>
            </div>
        </div>
    </div>
    <div class="content_main">
    
</x-app-layout>
