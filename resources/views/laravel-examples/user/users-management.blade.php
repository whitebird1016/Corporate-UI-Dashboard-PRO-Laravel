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
                                    <h5 class="">User Management</h5>
                                    <p class="mb-0 text-sm">
                                        Here you can manage users.
                                    </p>
                                </div>
                                @can('create', App\Models\User::class)
                                    <div class="col-6 text-end">
                                        <a href="{{ route('user-management.create') }}" class="btn btn-dark btn-primary">
                                            <i class="fas fa-user-plus me-2"></i> Add Member
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
                                        <th
                                            class="text-xs text-center text-secondary font-weight-bolder opacity-7 dataTable-sorter-custom">
                                            Id</th>
                                        <th class="text-xs text-center text-secondary font-weight-bolder opacity-7">
                                            Photo</th>
                                        <th class="text-xs text-center text-secondary font-weight-bolder opacity-7">Name
                                        </th>
                                        <th class="text-xs text-center text-secondary font-weight-bolder opacity-7">
                                            Email</th>
                                        <th class="text-xs text-center text-secondary font-weight-bolder opacity-7">Role
                                        </th>
                                        <th class="text-xs text-center text-secondary font-weight-bolder opacity-7">
                                            Creation Date</th>
                                        <th
                                            class="text-xs text-center text-secondary text-center font-weight-bolder opacity-7">
                                            @can('manage-users', App\User::class)
                                                Action
                                            @endcan
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $loop->index + 1 }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <div class="d-flex justify-content-center">
                                                    <div class="d-flex align-items-center justify-content-center " >
                                                        @if ($user->profile_picture)
                                                            <img src="{{ $user->profile_picture }}"
                                                                alt="profile picture" class="avatar me-3 photo-sizing">
                                                        @else
                                                            <img src="{{ asset('assets/img/default-avatar.png') }}"
                                                                alt="default avatar" class="avatar photo-sizing me-3">
                                                        @endif
                                                    </div>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $user->name }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $user->email }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $user->role->name }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $user->created_at }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <div class="d-flex justify-content-center">
                                                    @can('manage-users', auth()->user())
                                                        @can('update', $user)
                                                            <div class="p">
                                                                <a href="{{ route('user-management.edit', $user->id) }}"
                                                                    class="btn btn-icon bg-transparent mt-3 shadow-none px-3 btn-outline-custom">
                                                                    <i class="fa-solid fa-user-pen"></i>
                                                                </a>
                                                            </div>
                                                        @endcan
                                                        @if ($user->id != auth()->id())
                                                            @can('delete', $user)
                                                                <div class="p">
                                                                    <form role="form" method="post"
                                                                        action="{{ route('user-management.destroy', $user->id) }}">
                                                                        @csrf
                                                                        @method('post')
                                                                        <button type="submit"
                                                                            class="btn btn-icon bg-transparent shadow-none hover-border-0 px-3 mt-3 btn-outline-custom">
                                                                            <i class="fa-solid fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            @endcan
                                                        @endif
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
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true,
        columns: [{
            select: [2, 6],
            sortable: false
        }]
    });
</script>
