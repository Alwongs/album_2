<x-app-layout>
    <div class="photos-container">
        @include('albums.show-header')

        <ul class="photos-list">
            @foreach($album->photos as $photo)

                @include('albums.show-photos-item')
                
            @endforeach 
        </ul>
    </div>  
</x-app-layout>
