<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <!-- START FORM -->
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <form>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" wire:model="nama">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" wire:model="email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" wire:model="alamat">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                @if ($updateData == false)
                                    <button type="button" class="btn btn-primary" name="submit"
                                        wire:click="store()">SIMPAN</button>
                                @else
                                    <button type="button" class="btn btn-primary" name="submit"
                                        wire:click="update()">UPDATE</button>
                                @endif
                                <button type="button" class="btn btn-secondary" name="submit"
                                    wire:click="clear()">CLEAR</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- AKHIR FORM -->
            </div>
            <div class="col-md-8">
                <!-- START DATA -->
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <h1>Data Pegawai</h1>
                    <div class="col-sm-4">
                        <input type="search" name="" id="" class="form-control" placeholder="Search..."
                            wire:model.live="katakunci">
                    </div>
                    @if ($employee_selected_id)
                        <a wire:click="delete_confirmation('')" class="btn btn-danger btn-sm my-3"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">Del {{ count($employee_selected_id) }}
                            Data</a>
                    @endif
                    <table class="table table-striped">
                        @if ($errors->any())
                            <div class="pt-3">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        @if (session()->has('message'))
                            <div class="pt-3">
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            </div>
                        @endif
                        <thead>
                            <tr>
                                <th></th>
                                <th class="col-md-1">No</th>
                                <th class="col-md-4">Nama</th>
                                <th class="col-md-3">Email</th>
                                <th class="col-md-2">Alamat</th>
                                <th class="col-md-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataemployees as $key => $item)
                                <tr>
                                    <td><input type="checkbox" wire:key="{{ $item->id }}"
                                            value="{{ $item->id }}" wire:model.live="employee_selected_id">
                                    </td>
                                    <td>{{ $dataemployees->firstItem() + $key }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>
                                        <a wire:click="edit({{ $item->id }})"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a wire:click="delete_confirmation({{ $item->id }})"
                                            class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Del</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $dataemployees->links() }}
                </div>
                <!-- AKHIR DATA -->
            </div>
        </div>
        <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Yakin akan menghspus data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            wire:click="delete()">Ya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
