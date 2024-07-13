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
                                    <h5 class="">Item Management</h5>
                                    <p class="mb-0 text-sm">
                                        Here you can manage items.
                                    </p>
                                </div>
                                @can('create', App\Models\Item::class)
                                    <div class="col-6 text-end">
                                        <a href="{{ route('item-management.create') }}" class="btn btn-dark btn-primary">
                                            <i class="fas fa-user-plus me-2"></i> Add items
                                        </a>
                                    </div>
                                @endcan
                            </div>
                            <div class="row justify-content-center">
                                <div class="mt-3">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
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
                                            Photo</th>
                                        <th class="text-xs text-secondary text-center font-weight-bolder opacity-7">
                                            Category</th>
                                        <th class="text-xs text-secondary text-center font-weight-bolder opacity-7">Tags
                                        </th>
                                        <th class="text-xs text-secondary text-center font-weight-bolder opacity-7">
                                            Creation</th>
                                        <th
                                            class="text-xs text-secondary text-center text-center font-weight-bolder opacity-7">
                                            @can('manage-items', App\User::class)
                                                Action
                                            @endcan
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $item->id }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $item->name }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <div class="d-flex justify-content-center">
                                                    <div class="d-flex align-items-center justify-content-center ">
                                                        @if ($item->photo)
                                                            <img src="{{ $item->photo }}"
                                                                alt="profile picture" class="avatar me-3 photo-sizing">
                                                        @else
                                                            <img src="{{ asset('assets/img/default-avatar.png') }}"
                                                                alt="default avatar" class="avatar photo-sizing me-3">
                                                        @endif
                                                    </div>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                @if ($item->category)
                                                    <span
                                                        class="text-secondary font-weight-normal">{{ $item->category->name }}</span>
                                                @else
                                                    <span class="text-secondary font-weight-normal">No Category</span>
                                                @endif
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                @foreach ($item->tags as $tag)
                                                    <span
                                                        class="text-secondary badge badge-pill font-weight-normal text-white"
                                                        style="background-color: {{ $tag->color }}">{{ $tag->name }}</span>
                                                @endforeach
                                            </td>

                                            <td class="text-sm text-center font-weight-normal">
                                                <span
                                                    class="text-secondary font-weight-normal">{{ $item->date }}</span>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <div class="d-flex justify-content-center">
                                                    @can('manage-items', App\User::class)
                                                        @can('update', $item)
                                                            <div class="p">
                                                                <a href="{{ route('item-management.edit', $item->id) }}"
                                                                    class="btn btn-icon bg-transparent mt-3 shadow-none px-3 btn-outline-custom">
                                                                    <i class="fa-solid fa-user-pen"></i>
                                                                </a>
                                                            </div>
                                                        @endcan
                                                        @can('delete', $item)
                                                            <div class="p">
                                                                <form role="form" method="post"
                                                                    action="{{ route('item-management.destroy', $item->id) }}">
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
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true,
        columns: [{
            select: [2, 6],
            sortable: false
        }]
    });
</script>
