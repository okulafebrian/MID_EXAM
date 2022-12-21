<x-app title="{{ $publisher->name }}">
    <x-navbar :categories='$categories'></x-navbar>

    <div class="container my-4">
        <div class="d-flex justify-content-between mb-4">
            <h4 class="mb-0">{{ $publisher->name }}</h4>
            <div>
                <a href="{{ route('publishers.edit', $publisher) }}" class="btn btn-light">
                    <i class="bi bi-pencil-fill"></i> Edit
                </a>
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#delete">
                    <i class="bi bi-trash-fill"></i> Delete
                </button>
            </div>
        </div>

        <div id="delete" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 28rem">
                <div class="modal-content border-0 shadow py-3">
                    <div class="modal-header border-0">
                        <h5 class="m-auto ">Delete Publisher</h5>
                    </div>
                    <div class="modal-body py-0 text-center">
                        <p>Are you sure want to delete {{ $publisher->name }}?</p>
                    </div>
                    <div class="modal-footer m-auto border-0">
                        <button type="button" class="btn btn-outline-primary py-2 px-5" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <form method="POST" action="{{ route('publishers.destroy', $publisher) }}">
                            @csrf
                            <input type="hidden" name="_method" value='DELETE'>
                            <button type="submit" class="btn btn-primary py-2 px-5">Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 bg-light mb-4">
            <div class="card-body p-4">
                <div class="row mb-3">
                    <div class="col-md-2">
                        <h6 class="text-muted"><i class="bi bi-pin-map-fill me-2"></i>Address</h6>
                    </div>
                    <div class="col">{{ $publisher->address }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <h6 class="text-muted"><i class="bi bi-telephone-fill me-2"></i>Phone</h6>
                    </div>
                    <div class="col">{{ $publisher->phone }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <h6 class="text-muted"><i class="bi bi-envelope-at-fill me-2"></i>Email</h6>
                    </div>
                    <div class="col">{{ $publisher->email }}</div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h6 class="text-muted"><i class="bi bi-book-fill me-2"></i>Total Books</h6>
                    </div>
                    <div class="col">{{ $publisher->books->count() }}</div>
                </div>
            </div>
        </div>

        <x-book-list :books='$publisher->books'></x-book-list>
    </div>
</x-app>
