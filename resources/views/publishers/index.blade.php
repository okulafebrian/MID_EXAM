<x-app title="Publishers">
    <x-navbar :categories='$categories'></x-navbar>

    <div class="container my-4">
        <div class="d-flex justify-content-between mb-3">
            <h4 class="mb-0">Publisher</h4>
            <a href="{{ route('publishers.create') }}" class="btn btn-dark">Add Publisher</a>
        </div>

        <div class="row row-cols-md-2 row-cols-1 gx-3 gy-4">
            @foreach ($publishers as $publisher)
                <div class="col">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="row g-0 h-100">
                            <div class="col-4 m-auto">
                                <img src="/storage/images/publishers/{{ $publisher->image }}" class="img-fluid p-3">
                            </div>
                            <div class="col">
                                <div class="card-body d-flex flex-column h-100">
                                    <div class="mb-4">
                                        <h5>{{ $publisher->name }}</h5>
                                        <small class="text-muted">{{ $publisher->address }}</small>
                                    </div>
                                    <a href="{{ route('publishers.show', $publisher) }}"
                                        class="btn btn-primary rounded-3 ms-auto mt-auto">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app>
