<div>
    <section class="mb-4">
        <div class="card">
            <div class="card-header text-center py-3 d-flex justify-content-between">
                <div class="mb-0"><strong>
                        <a wire:navigate href="/dashboard" class="text-decoration-none"><i
                                class="fas fa-tachometer-alt"></i> Dashboard</a>
                        /
                        List
                        Users</strong>
                </div>
                <button class="btn btn-primary btn-sm btn-rounded"><i class="fas fa-plus-square"></i></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $item)
                                <tr>
                                    <td>{{ $users->firstItem() + $key }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role }}</td>
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
        </div>
    </section>
</div>
