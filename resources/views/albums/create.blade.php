<x-app-layout>
    <div class="form-container">
        <h1 class="form-title">New Album</h1>

        <form class="form" method="post" action="{{ route('albums.store') }}">
            @csrf

            <div class="form-input-container">
                <input
                    class="form-input"
                    type="text"
                    id="title"
                    name="title"
                    placeholder="title"
                >
            </div>

            <button
                class="form-submit"
                type="submit"
            >Save</button>
        </form>
    </div>
</x-app-layout>


