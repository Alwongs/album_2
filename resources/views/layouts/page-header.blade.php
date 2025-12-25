<div class="page-header">
    <div class="breadcrumbs">
        <a class="breadcrumbs__link" href="{{ route('albums.index') }}">
            ALBUMS:
        </a>
        @isset($album)
            @isset($photo)
                <a class="breadcrumbs__link" href="{{ route('albums.show', $album) }}">
                    "{{ $album->title  }}"
                </a>
            @else
                <h3 class="breadcrumbs__title">
                    "{{ $album->title  }}"
                </h3>
            @endisset
        @endisset
    </div>    


    <div class="page-header-actions">

        <a
            class="page-header-actions-btn"
            @isset($album)            
                href="{{ route('photos.create', ['album_id' => $album->id]) }}"                
            @else
                href="{{ route('albums.create') }}"              
            @endisset            
        >
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="page-header-actions-icon-add">
                <path d="M12 5v14m-7-7h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </a>        

    </div>
</div>