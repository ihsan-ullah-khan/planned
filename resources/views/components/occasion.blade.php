<div class="container sm:px-4 lg:px-8 my-10">
    <div id="features" class="cards-1">
        <h1 class="text-2xl font-bold mb-5 text-purple-900 text-center justify-start" style="text-align: start;">Company Occasions</h1>
            <!-- Card -->

        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @forelse($occasions as $occasion)
            <div class="mx-2 p-4 my-4 h-64 w-full">
                <a href="{{ route('filter.occasion', $occasion->id) }}">
                    <img src="{{ asset('storage/images/'. $occasion->image) }}" alt="" class="h-60 w-full rounded-xl">
                    <p class="my-2">{{ $occasion->title }}</p>
                </a>
            </div>
            @empty
                <div class="col-span-3 row-span-1 p-2 bg-red-200 rounded-md">
                    <p class="text-lg font-semibold">No Occasion available</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
