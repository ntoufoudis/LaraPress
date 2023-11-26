<form action="#" method="POST">
    @csrf

    <div class="flex space-x-2">

        <div>
            <label for="search">
                <input
                    class="border border-gray-400 w-48 h-8 px-2 rounded"
                    type="search"
                    name="search"
                    id="search"
                    required
                >
            </label>

            @error('search')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <button
            class="bg-blue-500 text-white text-xs font-semibold hover:bg-blue-600 px-2 py-2"
            type="submit"
        >
            Search Categories
        </button>
    </div>
</form>
