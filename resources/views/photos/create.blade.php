<x-app-layout>
    <div class="form-container">
        <h1 class="form-title">Добавить фото альбом: {{ $album->title }}</h1>
        
        <form class="form" method="post" action="{{ route('photos.store') }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="album_id" value="{{ $album->id }}">

            <div class="form-input-container">
                <input type="text" class="form-input" id="title" name="title" placeholder="title" required>
            </div>

            <div class="form-input-container">
                <input type="text" class="form-input" id="access" name="access" value="F" placeholder="access" required readonly>
            </div>       

            <div class="form-input-container">
                <textarea class="form-input" id="description" rows="3" name="description" placeholder="description"></textarea>
            </div>

            <div class="form-file-container">
                <input type="file" class="form-file" id="image" name="image">
            </div>

            <button type="submit" class="form-submit">Save</button>
        </form>
    </div>
</x-app-layout>


