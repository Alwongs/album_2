<x-app-layout>
    <div class="albums-container">
        @include('layouts.page-header')

        <ul class="albums-list">
            @foreach($albums as $album)

                @include('albums.index-albums-item')  
                         
            @endforeach
        </ul>
    </div>
</x-app-layout>
