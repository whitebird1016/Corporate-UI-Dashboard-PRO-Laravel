<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid ">
            <div class="mt-5 mb-5 mt-lg-9 row justify-content-center">

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert" id="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="mb-5 row justify-content-center">
                <div class="col-lg-9 col-12 ">
                    <div class="card " id="basic-info">
                        <div class="card-header">
                            <h5>Edit role</h5>
                            <p class="mb-0 text-sm">
                                Update role details.
                            </p>
                        </div>
                        <div class="pt-0 card-body">
                            <form role="form" method="POST" action='role-management.edit'>
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $role->id }}">
                                <div class="form-group">
                                    <label for="name">Role name</label>
                                    <textarea class="form-control no-resize" id="name" name="name" rows="1" required>{{ $role->name }}</textarea>
                                    @error('name')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Role description</label>
                                    <textarea class="form-control no-resize" id="description" name="description" rows="5" required>{{ $role->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <a href="{{ route('role-management') }}"
                                    class="mt-6 mb-0 btn btn-white btn-sm float-start">
                                    Back to list
                                </a>
                                <button type="submit" class="mt-6 mb-0 btn btn-white btn-sm float-end">Save
                                    changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <x-app.footer />
    </main>
</x-app-layout>
