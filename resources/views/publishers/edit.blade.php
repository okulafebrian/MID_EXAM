<x-app title="Edit Publisher">
    <x-navbar :categories='$categories'></x-navbar>

    <div class="container my-4">
        <h4 class="mb-4">Edit Publisher</h4>

        <form method="POST" action="{{ route('publishers.update', $publisher) }}" enctype="multipart/form-data">
            @csrf

            <div class="card mb-3">
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $publisher->name }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ $publisher->address }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone"
                                value="{{ $publisher->phone }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $publisher->email }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-end">
                @method('PUT')
                <button type="submit" class="btn btn-primary px-5">Save Update</button>
            </div>
        </form>
    </div>
</x-app>
