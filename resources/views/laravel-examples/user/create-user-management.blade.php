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
                            <h5>Add user</h5>
                            <p class="mb-0 text-sm">
                                Create a new user.
                            </p>
                        </div>
                        <div class="pt-0 card-body">
                            <form role="form" method="POST" action="{{ route('user-management.create') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group justify-content-center">
                                    <div class="avatar photo-sizing position-relative">
                                        <img src="{{ asset('assets/img/default-avatar.png') }}" alt="bruce"
                                            class="w-100 h-100 object-fit-cover border-radius-lg shadow-sm"
                                            id="preview">
                                        <input type="file" name="profile_picture" id="profile_picture"
                                            class="form-control input-style-photo" accept="image/*">
                                        <button
                                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2 shadow-sm"
                                            type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit Image"
                                            onclick="document.getElementById('profile_picture').click();">
                                            <i class="fa fa-pencil-alt text-dark"></i>
                                        </button>
                                    </div>
                                </div>
                                @error('profile_picture')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" placeholder="Name"
                                            class="form-control" value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" id="email"
                                            placeholder="Email" class="form-control" required>
                                        @error('email')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-6 mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" placeholder="Password"
                                            aria-label="Password" name="password" required>
                                        @error('password')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Password Confirmation"
                                            aria-label="Password Confirmation" name="password_confirmation" required>
                                        @error('password_confirmation')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row choices_item_custom">
                                    <label for="role_id">Role</label>
                                    <select class="form-control choices_item_custom" name="role_id" id="role_id"
                                        placeholder="Role">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" mb-3 ">
                                    <a href="{{ route('users-management') }}"
                                        class="mt-6 mb-0 btn btn-white btn-sm float-start">
                                        Back to list
                                    </a>
                                    <button type="submit" class="mt-6 mb-0 btn btn-white btn-sm float-end">Save
                                        changes</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <x-app.footer />
        <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
        <script>
            if (document.getElementById('role_id')) {
                var element = document.getElementById('role_id');
                const example = new Choices(element, {});
            }
        </script>
    </main>
</x-app-layout>
<script>
    profile_picture.onchange = evt => {
        preview = document.getElementById('preview');
        const [file] = profile_picture.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
</script>
