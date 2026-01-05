<x-app-layout>
    <div class="albums-container">
        @include('layouts.page-header')

        <ul class="user-list">
            @foreach($users as $user)
                @include('users.index-users-item')
            @endforeach
        </ul>
    </div>
</x-app-layout>



