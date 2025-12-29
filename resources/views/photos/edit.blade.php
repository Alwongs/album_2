<x-app-layout>
    <div class="form-container">
        <h1 class="form-title">Edit Photo</h1>

        <form class="form" method="POST" action="{{ route('photos.update', $photo->id) }}">
            @csrf
            @method('PUT')

            <div class="form-input-container">
                <input
                    class="form-input"
                    type="text"
                    id="title"
                    name="title"
                    value="{{ $photo->title }}"
                    placeholder="title"
                >
            </div>

            <div class="form-preview-container">
                <img
                    src="{{ route('photos.preview', $photo) }}"
                    alt="Preview"
                >
            </div>

            <button
                class="form-submit"
                type="submit"
            >Update</button>
        </form>
    </div>
</x-app-layout>


