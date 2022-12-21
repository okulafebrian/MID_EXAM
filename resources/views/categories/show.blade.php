<x-app title="{{ $category->name }} Category">
    <x-navbar :categories='$categories'></x-navbar>

    <div class="container my-4">
        <h4 class="alert alert-primary text-center">{{ $category->name }} Book List</h4>

        @if ($category->books->count() > 0)
            <x-book-list :books='$category->books'></x-book-list>
        @else
            <div class="text-center bg-light rounded-4 pb-5">
                <img src="/storage/images/assets/empty.webp" width="30%">
                <h4 class="fw-bold text-secondary">Book Not Available</h4>
            </div>
        @endif
    </div>
</x-app>
