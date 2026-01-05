<x-app-layout>
    <div class="photos-container">
        @include('layouts.page-header')

        <div class="main-row-container">
            <ul class="album-list-column">
                @foreach($albums as $item)

                    <li class="album-list-column__item">
                        <a
                            class="album-list-column__link"
                            href="{{ route('albums.destroy', $item) }}"
                            @if($item->id == $album->id)
                                style="background-color: rgb(31, 111, 216); color: #eee;"
                            @endif                            
                        >
                            <p>{{ $item->title }}</p>
                        </a>
                    </li>
                    
                @endforeach 
            </ul>

            <ul class="photos-list">
                @if(count($album->photos))
                    @foreach($album->photos as $photo)
                        @include('albums.show-photos-item')
                    @endforeach 
                @else
                    <li class="empty-photos-list">Empty photo list</li>            
                @endif                    
            </ul> 
        </div>
    </div>  
</x-app-layout>
