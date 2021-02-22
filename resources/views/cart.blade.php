<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="app">
                        @if ($cart == null)
                            <p class="text-center">{{ 'Your cart is currently empty!' }}</p>
                            <div class="text-center">
                                <a href="/order" role="button" class="btn btn-primary btn-lg">
                                    Start an order
                                </a>
                            </div>
                        @else
                            <cart v-bind:auth_user="{{ $auth_user }}" v-bind:cart="{{ json_encode($cart) }}" v-bind:errors="{{ $errors }}"></cart>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
