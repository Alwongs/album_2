<x-app-layout>
    <div class="photos-container">
        <h1 class="photos-title">All photos</h1>
        @foreach($photos as $photo)
            <div class="photo-item">
                <h2 class="photo-title">{{ $photo->title }}</h2>
                <p>
                    <img src="{{ route('photos.preview', $photo) }}" alt="{{ $photo->title }}" />
                </p>
                <a href="{{ route('photos.show', $photo) }}">Подробнее</a>
            </div>
        @endforeach
    </div>

</x-app-layout>
