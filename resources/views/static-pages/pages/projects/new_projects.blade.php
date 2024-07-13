<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid">
            <div class="row">
                <div class="mx-auto col-lg-9 col-12">
                    <div class="mt-4 card blur card-body">
                        <h6 class="mb-0">New Project</h6>
                        <p class="mb-4 text-sm">Create new project</p>
                        <label for="projectName" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="projectName">
                        <div class="mt-4 row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Private Project
                                    </label>
                                    <p class="text-xs form-text text-muted ms-1">
                                        If you are available for hire outside of the current situation, you can
                                        encourage others to hire you.
                                    </p>
                                    <div class="form-check form-switch ms-auto">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                            onclick="notify(this)" data-type="warning"
                                            data-content="Once a project is made private, you cannot revert it to a public project."
                                            data-title="Warning" data-icon="ni ni-bell-55">
                                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label class="mt-4">Project Description</label>
                        <p class="form-text text-muted text-xs ms-1">
                            This is how others will learn about the project, so make it good!
                        </p>
                        <div id="editor">
                            <p>Hello World!</p>
                            <p>Some initial <strong>bold</strong> text</p>
                            <p><br></p>
                        </div>
                        <div class="mt-4 row">
                            <div class="col-6">
                                <label class="form-label">Start Date</label>
                                <input class="form-control datetimepicker" type="text"
                                    placeholder="Please select start date" data-input>
                            </div>
                            <div class="col-6">
                                <label class="form-label">End Date</label>
                                <input class="form-control datetimepicker" type="text"
                                    placeholder="Please select end date" data-input>
                            </div>
                        </div>
                        <label class="mt-4 form-label">Project Tags</label>
                        <select class="form-control" name="choices-multiple-remove-button"
                            id="choices-multiple-remove-button" multiple>
                            <option value="Choice 1" selected>Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                            <option value="Choice 4">Choice 4</option>
                        </select>
                        <label class="mt-4 form-label">Starting Files</label>
                        <form action="/file-upload" class="form-control dropzone" id="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                        <div class="mt-4 d-flex justify-content-end">
                            <button type="button" name="button" class="m-0 btn btn-white">Cancel</button>
                            <button type="button" name="button" class="m-0 btn btn-dark ms-2">Create Project</button>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
<script src="../../../assets/js/plugins/choices.min.js"></script>
<script src="../../../assets/js/plugins/quill.min.js"></script>
<script src="../../../assets/js/plugins/flatpickr.min.js"></script>
<script src="../../../assets/js/plugins/dropzone.min.js"></script>
<script>
    if (document.getElementById('editor')) {
        var quill = new Quill('#editor', {
            theme: 'snow' // Specify theme in configuration
        });
    }

    if (document.getElementById('choices-multiple-remove-button')) {
        var element = document.getElementById('choices-multiple-remove-button');
        const example = new Choices(element, {
            removeItemButton: true
        });

        example.setChoices(
            [{
                    value: 'One',
                    label: 'Label One',
                    disabled: true
                },
                {
                    value: 'Two',
                    label: 'Label Two',
                    selected: true
                },
                {
                    value: 'Three',
                    label: 'Label Three'
                },
            ],
            'value',
            'label',
            false,
        );
    }

    if (document.querySelector('.datetimepicker')) {
        flatpickr('.datetimepicker', {
            allowInput: true
        }); // flatpickr
    }

    Dropzone.autoDiscover = false;
    var drop = document.getElementById('dropzone')
    var myDropzone = new Dropzone(drop, {
        url: "/file/post",
        addRemoveLinks: true

    });
</script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
