<x-app-layout>
    <div class="form-container">
        <h1 class="form-title">Edit</h1>

        <form class="form" method="POST" action="{{ route('albums.update', $album->id) }}">
            @csrf
            @method('PUT')

            <div class="form-input-container">
                <input
                    class="form-input"
                    type="text"
                    id="title"
                    name="title"
                    value="{{ $album->title }}"
                    placeholder="title"
                >
            </div>

            <button
                class="form-submit"
                type="submit"
            >Update</button>
        </form>
    </div>
</x-app-layout>


