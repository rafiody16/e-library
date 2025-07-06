<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <!-- flash message -->
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <!-- end flash message -->

            <button wire:click="$dispatch('openModal', { component: 'books.create' })" class="btn btn-md btn-success rounded shadow-sm border-0 mb-3">ADD NEW POST</button>
            <div class="card border-0 rounded shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col" style="width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($books as $b)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/posts/'.$b->photo_book) }}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $b->name_book }}</td>
                                <td>{!! $b->author !!}</td>
                                <td class="text-center">
                                    <a href="#" wire:navigate class="btn btn-sm btn-primary">EDIT</a>
                                    <button class="btn btn-sm btn-danger">DELETE</button>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $books->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>