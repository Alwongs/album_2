<li class="photos-item">
    <a class="photos-item__link" href="{{ route('photos.show', $photo) }}"></a>

    <div class="preview-image-wrapper">
        <img
            loading="lazy"
            src="{{ route('photos.preview', $photo) }}"
            alt="Preview"
        >
    </div>
    <div class="photo-actions">
        <h2 class="photo-actions__title">{{ $photo->title }}</h2>

        <form action="{{ route('photos.destroy', $photo) }}" method="POST">
            @csrf
            @method('DELETE')
            <button
                type="submit" 
                class="photos-item__delete-btn-icon" 
                onclick="return confirm('Удалить фото «{{ $photo->title }}»?')"
                title="Удалить альбом"
            >
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2M10 11v6M14 11v6"/>
                </svg>
            </button>
        </form>                         
    </div> 
</li>