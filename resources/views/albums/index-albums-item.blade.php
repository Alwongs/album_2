<li class="albums-item">
    <a class="albums-item__link" href="{{ route('albums.show', $album) }}">
        <h2 class="album-title">{{ $album->title }}</h2>
    </a>

    <div class="album-actions">
        <form action="{{ route('albums.destroy', $album) }}" method="POST">
            @csrf
            @method('DELETE')
            <button
                type="submit" 
                class="delete-btn-icon" 
                onclick="return confirm('Удалить альбом «{{ $album->title }}»?')"
                title="Удалить альбом"
            >
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2M10 11v6M14 11v6"/>
                </svg>
            </button>
        </form>

        <a class="edit-btn-icon" href="{{ route('albums.edit', $album) }}">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                <path d="m18.5 2.5 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
            </svg>
        </a>        
    </div>                    
</li>