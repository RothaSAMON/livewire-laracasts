<section>
    <form 
        {{-- action="" --}}
        wire:submit="changeGreeting()" 
    >
        <div class="mt-2 flex gap-2">
            <select 
                type="text"
                placeholder="John Doe"
                class="border rounded-md border-gray-500 p-2" 
                {{-- wire:model.live.debounce.1000ms="name" --}}
                wire:model.fill="greeting"
            >
                <option value="Hello">Hello</option>
                <option value="Hi">Hi</option>
                <option value="Hey">Hey</option>
                <option value="Howdy">Howdy</option>
            </select>

            <input 
                {{-- id="newName" --}}
                type="text"
                placeholder="Name . . ."
                class="block w-full border rounded-md border-gray-500 p-2" 
                {{-- wire:model.live.debounce.1000ms="name" --}}
                wire:model="name"
            />
        </div>

        {{-- Error message --}}
        <div class="m-2 mb-4 text-red-600">
            @error('name')
                {{ $message }}
            @enderror
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

    @if ($greetingMessage != '')
    <div class="mt-2">
        {{ $greetingMessage }}
    </div>  
    @endif
</section>
