<x-app title="{{ $book->title }}">
    <x-navbar :categories='$categories'></x-navbar>

    <div class="container my-4">
        <div class="row gy-4">
            <div class="col-md-3">
                <img src="/storage/images/books/{{ $book->image }}" width="100%" class="rounded-3">
            </div>
            <div class="col">
                <div>
                    <h3>{{ $book->title }}</h3>
                    <small class="text-muted">By <span class="text-primary">{{ $book->author }}</span> <i
                            class="bi bi-dot"></i>
                        {{ $book->year }}</small>
                    <p class="mt-3">{{ $book->synopsis }}</p>
                </div>

                <hr style="border-style: dashed">

                <h5 class="mb-3">About this book</h5>
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <div class="row text-muted">
                            <div class="col-lg-3">
                                <h6 class="m-0 d-inline">Year : </h6>{{ $book->year }}
                            </div>
                            <div class="col-lg">
                                <h6 class="m-0 d-inline">Publisher : </h6>{{ $book->publisher->name }}
                            </div>
                            <div class="col-lg text-lg-end">
                                <h6 class="m-0 d-inline">Author : </h6>{{ $book->author }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
