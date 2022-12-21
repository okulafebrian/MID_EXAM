<div class="row row-cols-lg-5 row-cols-md-3 row-cols-1 gx-3 gy-4">
    @foreach ($books as $book)
        <div class="col">
            <div class="card border-0 shadow-sm rounded-3 h-100">
                <div class="row g-0 h-100">
                    <div class="col-md-12 col-5">
                        <div class="p-2">
                            <img src="/storage/images/books/{{ $book->image }}" width="100%" class="rounded-3">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body d-flex flex-column h-100">
                            <div class="mb-4">
                                <h5>{{ $book->title }}</h5>
                                <small class="text-muted">By {{ $book->author }}</small>
                            </div>
                            <a href="{{ route('books.show', $book) }}"
                                class="btn btn-primary rounded-3 w-100 mt-auto">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
