<div class="relative w-96 mx-2 rounded overflow-hidden shadow-lg mb-3">
    <div class="px-6 py-4">
        @if ($item->suspended && $item->user->id == Auth()->id())
            <span class="absolute top-2 right-2">
                <span class="animate-ping absolute inline-flex h-5 w-5 rounded-full bg-red-400 opacity-75"></span>
                <span class="inline-flex rounded-full h-5 w-5 bg-red-500"></span>
            </span>
        @elseif ($item->suspended)
            <span class="absolute top-2 right-2">
                <button type="button"
                    class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">
                    Suspended
                </button>
            </span>
        @endif
        <div class="font-bold text-xl mb-2">{{ $poll->question }}</div>
        <div class="w-full bg-neutral-200 dark:bg-neutral-600 mb-5">
            <div class="bg-green-300 p-0.5 text-center text-xs font-medium leading-none text-primary-100"
                style="width: {{ $for }}%">
                {{ $for }}%
            </div>
        </div>
        <div class="w-full bg-neutral-200 dark:bg-neutral-600">
            <div class="bg-red-500 p-0.5 text-center text-xs font-medium leading-none text-primary-100"
                style="width: {{ $against }}%">
                {{ $against }}%
            </div>
        </div>
        <form class="my-5">
            <input class="focus:shadow-none focus:outline-none focus:ring-0 " type="radio" value="yes"
                wire:model="vote" wire:change="submitVote">
            <label for="">Yes</label>
            <input class="focus:shadow-none focus:outline-none focus:ring-0    " type="radio" value="no"
                wire:model="vote" wire:change="submitVote">
            <label for="">No</label>
        </form>
    </div>
</div>
