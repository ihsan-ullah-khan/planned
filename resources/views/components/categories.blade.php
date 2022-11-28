<div class="container my-10">
    <h1 class="text-gray-800 text-3xl font-bold mb-2">Explore Categories</h1>
    <div class="flex items-center justify-between p-2">
        <p>Explore our most popular blooms</p>
        <a href="#" class="font-bold text-sm text-blue-600">View All</a>
    </div>

    <div class="grid grid-cols-6 grid-rows-2">
        @if( count($categories)>0 )
        <div class="mx-2 px-2 my-2 w-full rounded-lg col-span-2 h-80 row-span-2">
            <a href="{{ route('filter.category', $categories[0]->id) }}">
                <img src="{{ asset('storage/images/'. $categories[0]->image) }}" alt="" class="h-80 w-full rounded-lg">
                <p class="text-lg font-semibold font-sans text-gray-700 text-center mt-1">{{ $categories[0]->title }}</p>
            </a>
            @else
            {{ $categories->skip(1) }}
            @endif
        </div>
        @forelse($categories->skip(1) as $category)
        <div class="mx-2 px-2 my-2 w-full rounded-lg">
            <a href="{{ route('filter.category', $category->id) }}">
                <img src="{{ asset('storage/images/' . $category->image) }}" alt="" class="h-36 w-full rounded-lg">
                <p class="text-sm font-semibold font-sans text-gray-700 text-center mt-1">{{ $category->title }}</p>
            </a>
        </div>
        @empty
            <div class="text-center bg-red-200 rounded-md p-2 col-span-6 row-span-1">
                <p class="text-xl font-semibold text-red-400">No Categories Available</p>
            </div>
        @endforelse
    </div>
</div>
