<section>
    <h1 class="text-2xl ">Search : 
        <span class="underline text-blue-400">Do whatever</span> !
    </h1>

    <form>
        <div class="mt-2 flex gap-2">
            <input 
                type="text"
                placeholder="Search . . ."
                class="block w-full border rounded-md border-gray-500 p-2" 
                wire:model.live.debounce="searchText"
            />

            <button 
                class="text-white font-medium rounded-md p-4 bg-blue-500 disabled:opacity-50"
                wire:click.prevent="clear()"
                {{ empty($searchText) ? 'disabled' : '' }}
                >
                Clear
            </button>
        </div>
    </form>
    
    <div class="mt-4">
        @foreach ($results as $result)
            <div class="pt-2">
                {{ $result->title}}
            </div>
        @endforeach
    </div>
</section>
