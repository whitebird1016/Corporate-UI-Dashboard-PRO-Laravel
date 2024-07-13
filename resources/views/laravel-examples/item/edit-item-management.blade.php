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
                            <h5>Edit item</h5>
                            <p class="mb-0 text-sm">
                                Edit an item.
                            </p>
                        </div>
                        <div class="pt-0 card-body">
                            <form method="POST" action='item-management.edit' enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <div class="row">
                                    <div class="col">
                                        <div class="avatar avatar-xl position-relative">
                                            <img src="{{ $item->photo }}" alt="bruce"
                                                class="w-100 h-100 object-fit-cover border-radius-lg shadow-sm"
                                                id="preview">
                                            <input type="file" name="photo" id="photo"
                                                class="form-control input-style-photo" accept="image/*">
                                            <button
                                                class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2 shadow-sm"
                                                type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Edit Image" onclick="document.getElementById('photo').click();">
                                                <i class="fa fa-pencil-alt text-dark"></i>
                                            </button>

                                        </div>
                                    </div>
                                    @error('photo')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">{{ __('Item Name') }}</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ $item->name }}" autocomplete="name" required autofocus>
                                    @error('name')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category">{{ __('Category') }}</label>
                                    <select id="category_id"
                                        class="form-control @error('category') is-invalid @enderror" name="category_id">
                                        <option value="">Select a category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $item->category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label class="mt">Item Description</label>
                                    <div class="form-group">
                                        <textarea class="editor-content" id="editor" name="description" required> {!! $item->description !!}</textarea>
                                        @error('description')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group pt-3">
                                    <label for="tag">{{ __('Tag') }}</label>
                                    <select id="tag_id" class="form-control @error('tag') is-invalid @enderror"
                                        name="tag_id[]" multiple>
                                        <option value="">Select tag(s)</option>
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}"
                                                {{ $item->tags->contains($tag->id) ? 'selected' : '' }}>
                                                {{ $tag->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('tag_id')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Item Status') }}</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="published"
                                            value="Published" {{ $item->status === 'Published' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="published">{{ __('Published') }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="draft"
                                            value="Draft" {{ $item->status === 'Draft' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="draft">{{ __('Draft') }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="archive"
                                            value="Archive" {{ $item->status === 'Archive' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="archive">{{ __('Archive') }}</label>
                                    </div>
                                    @error('status')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="show_on_homepage"
                                        name="show_on_homepage" {{ $item->show_on_homepage ? 'checked' : '' }}>
                                    <label class="form-check-label" for="show_on_homepage">Show on
                                        homepage</label>
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Item Options') }}</label>
                                    <div class="form-check">

                                        @foreach ($options as $option)
                                            @php
                                                $selectedOptions = explode(',', $item->options);
                                            @endphp

                                            <input class="form-check-input" type="checkbox" name="options[]"
                                                id="option_{{ $loop->index }}" value="{{ $option }}"
                                                {{ in_array($option, json_decode($item->options)) ? 'checked' : '' }}>
                                            <label class="form-check-label"
                                                for="option_{{ $loop->index }}">{{ $option }}</label>
                                            <br>
                                        @endforeach
                                    </div>
                                    @error('options')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="datepicker">{{ __('Date') }}</label>
                                    <input class="form-control datepicker" id="date"
                                        placeholder="Please select date" type="text" name="date"
                                        value="{{ $item->date }}" onfocus="focused(this)"
                                        onfocusout="defocused(this)">
                                    @error('date')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <a href="{{ route('item-management') }}"
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
    </main>
</x-app-layout>


<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
<script src="/assets/js/plugins/flatpickr.min.js"></script>

<script>
    $(document).ready(function() {
        $(".article-form").on("submit", function(e) {
            var quillEditor = new Quill('.editor-content', {
                theme: 'snow'
            });
            let value = $('.editor-content > div.ql-editor').html();
            if (quillEditor.getLength() > 1) {
                $(this).append("<textarea name='description' style='display:none'>" + value +
                    "</textarea>");
            }
        });
    });
    $(document).ready(function() {
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {})
            .catch(error => {});

    });
</script>

<script>
    if (document.querySelector('.datepicker')) {
        flatpickr('.datepicker', {
            mode: 'single'
        });
    }
</script>

<script>
    if (document.getElementById('category_id')) {
        var element = document.getElementById('category_id');
        const example = new Choices(element, {});
    }
</script>

<script>
    if (document.getElementById('tag_id')) {
        var element = document.getElementById('tag_id');
        const example = new Choices(element, {});
    }
</script>

<script>
    photo.onchange = evt => {
        preview = document.getElementById('preview');
        const [file] = photo.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
</script>
