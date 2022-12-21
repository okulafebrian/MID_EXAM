<x-app title="Giant Book Supplier">
    <x-navbar :categories='$categories'></x-navbar>

    <div class="container my-4">
        <h4>Book List</h4>

        <x-book-list :books='$books'></x-book-list>
    </div>

    <x-footer></x-footer>
</x-app>
