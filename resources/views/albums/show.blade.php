<x-app-layout>
    <div class="photos-container">
        @include('layouts.page-header')

        <div class="main-row-container">
            <ul class="album-list-column">
                @foreach($albums as $item)

                    <li class="album-list-column__item">
                        <a class="album-list-column__link" href="{{ route('albums.destroy', $item) }}">
                            <p>{{ $item->title }}</p>
                        </a>
                    </li>
                    
                @endforeach 
            </ul>
            <ul class="photos-list">
                @foreach($album->photos as $photo)

                    @include('albums.show-photos-item')
                    
                @endforeach 
            </ul>
        </div>
    </div>  
</x-app-layout>
