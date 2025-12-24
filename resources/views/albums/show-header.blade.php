<div class="albums-header">
    <div class="breadcrumbs">
        <a class="breadcrumbs__link" href="{{ route('albums.index') }}">
            {{ __('Albums') }}:
        </a>
        @isset($album)
            <h3 class="breadcrumbs__title">
                "{{ $album->title  }}"
            </h3>
        @endif
    </div>    
    <a class="albums-create-link" href="{{ route('photos.create', ['album_id' => $album->id]) }}">New</a>
</div>