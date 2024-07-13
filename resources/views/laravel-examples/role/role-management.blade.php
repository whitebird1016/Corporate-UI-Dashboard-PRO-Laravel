<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid">
            <div class="mt-4 row">
                <div class="col-12">
                    <div class="card">
                        <div class="pb-0 card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="">Role Management</h5>
                                    <p class="mb-0 text-sm">
                                        Here you can manage roles.
                                    </p>
                                </div>
                                @can('create', App\Models\Item::class)
                                    <div class="col-6 text-end">
                                        <a href="{{ route('role-management.create') }}" class="btn btn-dark btn-primary">
                                            <i class="fas fa-user-plus me-2"></i> Add Role
                                        </a>
                                    </div>
                                @endcan
                            </div>
                            <div class="row justify-content-center">
                                <div class="mt-3">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert" id="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger" role="alert" id="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-flush" id="datatable-search">
                                <thead class="bg-gray-100 thead-light">
                                    <tr>
                                        <th class="text-xs text-secondary text-center font-weight-bolder opacity-7">Id
                                        </th>
                                        <th class="text-xs text-secondary text-center font-weight-bolder opacity-7">Name
                                        </th>
                                        <th class="text-xs text-secondary text-center font-weight-bolder opacity-7">
                                            Description</th>
                                        <th class="text-xs text-secondary text-center font-weight-bolder opacity-7">
                                            Creation Date</th>
                                        <th
                                            class="text-xs text-secondary text-center text-center font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $role->id }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $role->name }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $role->description }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $role->created_at }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <div class="d-flex justify-content-center">
                                                    @can('manage-users', App\User::class)
                                                        @can('update', $role)
                                                            <div class="p">
                                                                <a href="{{ route('role-management.edit', $role->id) }}"
                                                                    class="btn btn-icon bg-transparent mt-3 shadow-none px-3 btn-outline-custom">
                                                                    <i class="fa-solid fa-user-pen"></i>
                                                                </a>
                                                            </div>
                                                        @endcan
                                                        @can('delete', $role)
                                                            <div class="p">
                                                                <form role="form" method="post"
                                                                    action="{{ route('role-management.destroy', $role->id) }}">
                                                                    @csrf
                                                                    @method('post')
                                                                    <button type="submit"
                                                                        class="btn btn-icon bg-transparent shadow-none hover-border-0 px-3 mt-3 btn-outline-custom">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        @endcan
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-app.footer />
    </main>

</x-app-layout>

<script src="/assets/js/plugins/datatables.js"></script>
<script>
    console.log('hello');
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true,
        columns: [{
            select: [4],
            sortable: false
        }]
    });
</script>
