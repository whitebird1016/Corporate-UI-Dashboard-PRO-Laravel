<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar dark="false" />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid ">
            <form action={{ route('users.update') }} method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mt-5 mb-5 mt-lg-9 row justify-content-center">
                    <div class="col-lg-9 col-12">
                        <div class="card card-body" id="profile">
                            <img src="../../../assets/img/header-orange-purple.jpg" alt="pattern-lines"
                                class="top-0 rounded-2 position-absolute start-0 w-100 h-100">

                            <div class="row z-index-2 justify-content-center align-items-center">
                                <div class="col-sm-auto col-4">
                                    <div class="avatar avatar-xl position-relative">
                                        <img src="{{ auth()->user()->profile_picture }}" alt="bruce"
                                            class="w-100 h-100 object-fit-cover border-radius-lg shadow-sm"
                                            id="preview">
                                        <input type="file" name="profile_picture" id="profile_picture"
                                            class="form-control" accept="image/*"
                                            style="opacity: 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                        <button
                                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2 shadow-sm"
                                            type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit Image"
                                            onclick="document.getElementById('profile_picture').click();">
                                            <i class="fa fa-pencil-alt text-dark"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-auto col-8 my-auto">
                                    <div class="h-100">
                                        <h5 class="mb-1 font-weight-bolder">
                                            {{ auth()->user()->name }}
                                        </h5>
                                        <p class="mb-0 font-weight-bold text-sm">
                                            CEO / Co-Founder
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                                    <div class="form-check form-switch ms-2">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23"
                                            checked onchange="visible()">
                                    </div>
                                    <label class="text-white form-check-label mb-0">
                                        <small id="profileVisibility">
                                            Switch to invisible
                                        </small>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert" id="alert">
                                {{ session('error') }}
                            </div>
                        @endif
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
                                <h5>Basic Info</h5>
                            </div>
                            <div class="pt-0 card-body">

                                <div class="row">
                                    <div class="col-6 p-2">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name"
                                            value="{{ old('name', auth()->user()->name) }}" class="form-control">
                                        @error('name')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-6 p-2">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email"
                                            value="{{ old('email', auth()->user()->email) }}" class="form-control">
                                        @error('email')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 p-2">
                                        <label for="location">Location</label>
                                        <input type="text" name="location" id="location"
                                            placeholder="Bucharest, Romania"
                                            value="{{ old('location', auth()->user()->location) }}"
                                            class="form-control">
                                        @error('location')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-6 p-2">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone" placeholder="0733456987"
                                            value="{{ old('phone', auth()->user()->phone) }}" class="form-control">
                                        @error('phone')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="mt-6 mb-0 btn btn-white btn-sm float-end">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="mb-5 row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="card" id="password">
                        <div class="card-header">
                            <h5>Change Password</h5>
                        </div>
                        <form action={{ route('users.updatePassword') }} method="POST">
                            @csrf
                            @method('PUT')
                            <div class="pt-0 card-body">
                                <label class="form-label" for="current_password">Current password</label>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="current_password"
                                        id="current_password" placeholder="Current password">
                                    @error('current_password')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <label class="form-label" for="new_password">New password</label>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="new_password"
                                        id="new_password" placeholder="New password">
                                    @error('new_password')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <label class="form-label" for="new_password_confirmation">Confirm new password</label>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="new_password_confirmation"
                                        id="new_password_confirmation" placeholder="Confirm password">
                                    @error('new_password_confirmation')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <h5 class="mt-5">Password requirements</h5>
                                <p class="mb-2 text-muted">
                                    Please follow this guide for a strong password:
                                </p>
                                <ul class="mb-0 text-muted ps-4 float-start p-4">
                                    <li>
                                        <span class="text-sm">One special characters</span>
                                    </li>
                                    <li>
                                        <span class="text-sm">Min 6 characters</span>
                                    </li>
                                    <li>
                                        <span class="text-sm">One number (2 are recommended)</span>
                                    </li>
                                    <li>
                                        <span class="text-sm">Change it often</span>
                                    </li>
                                </ul>
                                <button type="submit"class="mt-6 mb-0 btn btn-white btn-sm float-end">Update
                                    password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-app.footer />
        </div>
        <script>
            profile_picture.onchange = evt => {
                preview = document.getElementById('preview');
                const [file] = profile_picture.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
    </main>

</x-app-layout>
