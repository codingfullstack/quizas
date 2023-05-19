<div x-data="{ open: false }" x-cloak class="relative inline-block w-32">
    <span @click="open = !open" class=" px-6 py-0.5  font-semibold text-gray-700 bg-gray-100 rounded-md border-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">
      {{$label}}
    </span>
    <div x-show="open" @click.away="open = false" class="absolute z-10 w-52 py-2 mt-2 bg-white rounded-md shadow-lg">
      {{ $content }}
    </div>
  </div>
