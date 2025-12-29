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

        @isset($album)
            <a
                class="page-header-actions-btn btn-blue"
                @isset($photo)            
                    href="{{ route('photos.edit', $photo) }}"                
                @else
                    href="{{ route('albums.edit', $album) }}"               
                @endisset            
            >
                <svg class="page-header-actions-icon-edit" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                    <path d="m18.5 2.5 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                </svg>
            </a> 
        @endisset

        <a
            class="page-header-actions-btn btn-geen"
            @isset($album)            
                href="{{ route('photos.create', ['album_id' => $album->id]) }}"                
            @else
                href="{{ route('albums.create') }}"              
            @endisset            
        >
            <svg class="page-header-actions-icon-create" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="page-header-actions-icon-add">
                <path d="M12 5v14m-7-7h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </a>        

    </div>
</div>