<div>
    <section class="mb-4">
        <div class="card">
            <div class="card-header text-center py-3 d-flex justify-content-between">
                <div class="mb-0"><strong>
                        <a wire:navigate href="/dashboard" class="text-decoration-none"><i
                                class="fas fa-tachometer-alt"></i> Dashboard</a>
                        /
                        List
                        Product</strong>
                </div>
                <button class="btn btn-primary btn-sm btn-rounded" data-mdb-ripple-init data-mdb-modal-init
                    data-mdb-target="#productAddModal"><i class="fas fa-plus-square"></i></button>
            </div>
            <div class="card-body">
                <div class="row d-flex justify-content-end">
                    <div class="col-sm-4 ">
                        <input type="search" name="" id="" class="form-control" placeholder="Search..."
                            wire:model.live="search">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $key => $item)
                                <tr>
                                    <td>{{ $product->firstItem() + $key }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>Rp. {{ $item->price }}</td>
                                    <td>
                                        <a class="btn btn-dark btn-sm btn-rounded"><i class="fas fa-eye"></i></a>
                                        <a class="btn btn-danger btn-sm btn-rounded"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $product->links() }}
        </div>
        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="productAddModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    </div>
                    @if (session()->has('message'))
                        <div class="pt-3">
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

                    <form>
                        <div class="modal-body">
                            <!-- Name input -->
                            <div class="mb-4">
                                <input class="form-control" type="file" id="formFileMultiple" multiple />
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="name" class="form-control" wire:model="name" />
                                <label class="form-label" for="name">Name<span class="text-danger">*</span></label>
                            </div>

                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="type" class="form-control" wire:model="type" />
                                <label class="form-label" for="type">Type<span class="text-danger">*</span></label>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="price" class="form-control" wire:model="price" />
                                <label class="form-label" for="price">Price<span class="text-danger">*</span></label>
                            </div>

                            <!-- Message input -->
                            <div data-mdb-input-init class="form-outline">
                                <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                <label class="form-label" for="form4Example3">Description</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm btn-rounded" data-mdb-ripple-init
                                data-mdb-dismiss="modal">Close</button>
                            <button type="button" wire:click="store()" class="btn btn-primary btn-sm btn-rounded"
                                data-mdb-ripple-init>Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</div>
