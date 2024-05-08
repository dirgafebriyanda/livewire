<div>
    <section class="mb-4">
        <div class="card">
            <div class="card-header text-center d-flex justify-content-between">
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
                @if (session()->has('message'))
                    <div class="alert alert-success" id=notif>
                        {{ session('message') }}
                    </div>
                @endif
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
                                <th scope="col">Status</th>
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
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault" {{ $item->status == 1 ? 'checked' : '' }} />
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Show in
                                                home</label>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-dark btn-sm btn-rounded"><i class="fas fa-eye"></i></a>
                                        <a wire:click="delete_confirmation({{ $item->id }})"
                                            class="btn btn-danger btn-sm btn-rounded" data-mdb-ripple-init
                                            data-mdb-modal-init data-mdb-target="#deleteModal"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $product->links() }}
        </div>
        <!-- Modal Product-->
        <div wire:ignore.self class="modal fade" data-mdb-backdrop="static" data-mdb-keyboard="false"
            id="productAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="modal-body p-4">
                            <div class="h3 text-center mb-3">Product</div>
                            <!-- Name input -->
                            <div class="mb-4">
                                <input class="form-control" type="file" id="formFileMultiple" multiple />
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="name" class="form-control" wire:model="name" />
                                <label class="form-label" for="name">Name<span class="text-danger">*</span></label>
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="type" class="form-control" wire:model="type" />
                                <label class="form-label" for="type">Type<span class="text-danger">*</span></label>
                            </div>
                            @error('type')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="price" class="form-control" wire:model="price" />
                                <label class="form-label" for="price">Price<span class="text-danger">*</span></label>
                            </div>
                            @error('price')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <!-- Message input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <textarea class="form-control" id="form4Example3" rows="4" wire:model="description">{{ $description }}</textarea>
                                <label class="form-label" for="form4Example3">Description</label>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="row text-end">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-secondary btn-sm btn-rounded"
                                        data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
                                    <button type="button" wire:click="store()"
                                        class="btn btn-primary btn-sm btn-rounded" data-mdb-ripple-init>Save</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- Modal Product-->

        <!-- Modal Delete-->
        <div wire:ignore.self data-mdb-backdrop="static" data-mdb-keyboard="false" class="modal fade"
            id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this data?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                            data-mdb-dismiss="modal">No</button>
                        <button type="button" class="btn btn-primary" wire:click="delete()" data-mdb-ripple-init
                            data-mdb-dismiss="modal">Yes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Delete-->
    </section>
</div>
