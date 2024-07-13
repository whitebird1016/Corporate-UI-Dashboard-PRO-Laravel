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
                            <h5>Add tag</h5>
                            <p class="mb-0 text-sm">
                                Create a new tag.
                            </p>
                        </div>
                        <div class="pt-0 card-body">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <form role="form" method="POST"
                                            action="{{ route('tag-management.create') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Tag name</label>
                                                <textarea class="form-control no-resize" id="name" placeholder="Enter name" required name="name" rows="1">{{ old('name') }}</textarea>
                                                @error('name')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="color">Tag color</label>
                                                <input type="color" class="form-control pill-input" id="color"
                                                    placeholder="Enter color" required name="color" rows="1" value="{{ old('color') }}" />
                                                @error('color')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <a href="{{ route('tag-management') }}"
                                                class="mt-6 mb-0 btn btn-white btn-sm float-start">
                                                Back to list
                                            </a>
                                            <button type="submit" class="mt-6 mb-0 btn btn-white btn-sm float-end">Save
                                                changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-app.footer />
    </main>
</x-app-layout>
