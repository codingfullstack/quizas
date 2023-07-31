<div>
    <form wire:submit.prevent="submit">
        <textarea class="w-full h-16 rounded-md" name="" id="" wire:model="body" cols="30" rows="10"
            placeholder="Comment..."></textarea>
        <div class="flex justify-end">
            <button type="submit"
                class="border-2 py-1 px-5 rounded-xl mb-5 bg-blue-400 text-gray-700 uppercase font-semibold">Create</button>
        </div>
    </form>
</div>
