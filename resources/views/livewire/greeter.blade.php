<section>
    <div>
        Hello, {{ $name }}!
    </div>

    <form 
        {{-- action="" --}}
        wire:submit="changeName(document.querySelector('#newName').value)" 
    >
        <div class="mt-2">
            <input 
            id="newName"
            type="text"
            placeholder="John Doe"
            class="block w-full border rounded-md border-gray-500 p-2" />
        </div>

        <div class="mt-2">
            <button
                type="submit"
                class="text-white cursor-pointer font-medium border rounded-md px-4 py-2 bg-blue-600"
                {{-- wire:click="changeName(document.querySelector('#newName').value)" --}}
                >
                Greet
            </button>
        </div>
    </form>
</section>
