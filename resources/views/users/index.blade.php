<x-app-layout>
    <div class="albums-container">
        @include('layouts.page-header')

        <ul class="user-list">
            @foreach($users as $user)
                <li style="color: #ccc;">{{ $user->name }}, role: {{ $user->role }}</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>



