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


    <a
        class="albums-create-link"
        href="{{ url('/albums/create') }}"
    >
        New
    </a>
</div>