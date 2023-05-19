<div class="w-96 mx-2 rounded overflow-hidden shadow-lg mb-3">
    <div class="px-6 py-4">
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
            <input class="focus:shadow-none focus:outline-none focus:ring-0 " type="radio" value="yes" wire:model="vote" wire:change="submitVote">
            <label for="">Yes</label>
            <input class="focus:shadow-none focus:outline-none focus:ring-0    " type="radio" value="no" wire:model="vote" wire:change="submitVote">
            <label for="">No</label>
        </form>
    </div>
</div>
