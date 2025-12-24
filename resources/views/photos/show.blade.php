<x-app-layout>
    <div class="photo-detail-container">
        <h1 class="photo-detail__title">{{ $photo->title }}</h1>
        <p class="photo-detail__description">{{ $photo->description }}</p>
        <img src="{{ route('photos.original', $photo) }}" alt="Original" style="max-height: 600px">  
    </div>
</x-app-layout>
