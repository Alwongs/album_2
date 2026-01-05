<x-app-layout>
    <div class="photo-detail-container">
        @include('layouts.page-header')
        
        <h1 class="photo-detail__title">{{ $photo->title }}Test</h1>
        <p class="photo-detail__description">{{ $photo->description }}</p>

        <div class="detail-image-block mb-1">
            <img src="{{ route('photos.original', $photo) }}" alt="Original" style="max-height: 600px">

            @include('photos.detail-pagination')
        </div>
    </div>
</x-app-layout>
