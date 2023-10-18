@extends('admin.layouts.adminLayout')

@push('css')
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('plugins/editors/markdown/simplemde.min.css') }}">

    <link href="{{ asset('plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.min.css') }}">
    <!-- END PAGE LEVEL STYLE -->

    <style>
        .CodeMirror {
            margin-top: 10px;
        }

        .custom-file-container__image-preview {
            margin-top: 0px!important;
            height: 230px!important;
        }
    </style>
@endpush

@section('contant')
    <div id="custom_styles" class="col-lg-8 layout-spacing col-md-8">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Create New Product</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form class="needs-validation" novalidate action="javascript:void(0);">
                    <div class="form-row">
                        <div class="col-md-12 mb-4">
                            <label for="validationCustom03">Product Name</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Product Name"
                                required>
                            <div class="invalid-feedback">
                                Required
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="customFile">Product Image</label>
                            <div id="fuMultipleFile" class="col-lg-12 layout-spacing p-0">
                                <div class="statbox widget box box-shadow">

                                    <div class="widget-content widget-content-area">
                                        <div class="custom-file-container" data-upload-id="mySecondImage">
                                            <label>Upload (Allow Multiple) <a href="javascript:void(0)"
                                                    class="custom-file-container__image-clear"
                                                    title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file"
                                                    class="custom-file-container__custom-file__custom-file-input" multiple>
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span
                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="productDiscription">Product Discrption</label>
                            <div class="widget-content widget-content-area p-0">
                                <textarea id="demo1">  </textarea>
                            </div>
                        </div>


                        <div class="col-md-6 form-group">
                            <label for="Category">Category</label>
                            <select class="placeholder js-states form-control">
                                <option>Choose category...</option>
                                <option value="one">First</option>
                                <option value="two">Second</option>
                                <option value="three">Third</option>
                                <option value="four">Fourth</option>
                                <option value="five">Fifth</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="Category">Sub-Category</label>
                            <select class="placeholder js-states form-control">
                                <option>Choose sub-category...</option>
                                <option value="one">First</option>
                                <option value="two">Second</option>
                                <option value="three">Third</option>
                                <option value="four">Fourth</option>
                                <option value="five">Fifth</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="validationCustom04">Possion</label>
                            <input type="number" class="form-control" id="validationCustom04" placeholder="1" required>
                            <div class="invalid-feedback">
                                Required
                            </div>
                        </div>

                        <div class="col-md-6 form-group mb-4">
                            <label for="status">Status</label>
                            <select class="form-control" id="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                    </div>

                    <button class="col-12 btn btn-primary mt-3" type="submit">Submit</button>
                </form>


            </div>
        </div>
    </div>

    <div id="tableHover" class="col-lg-4 col-md-4 layout-spacing">

        <div class="widget widget-card-four mb-4">
            <div class="widget-content">
                <div class="w-header">
                    <div class="w-info">
                        <h6 class="value">Total Products</h6>
                    </div>
                </div>

                <div class="w-content">

                    <div class="w-info">
                        <p class="value"> 45,141 <span>this week</span> <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-trending-up">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg></p>
                    </div>

                </div>

                <div class="w-progress-stats">
                    <div class="progress">
                        <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%"
                            aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="">
                        <div class="w-icon">
                            <p>57%</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="widget widget-card-four mb-4">
            <div class="widget-content">
                <div class="w-header">
                    <div class="w-info">
                        <h6 class="value">Total Stock</h6>
                    </div>
                </div>

                <div class="w-content">

                    <div class="w-info">
                        <p class="value"> 45,141 <span>this week</span> <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-trending-up">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg></p>
                    </div>

                </div>

                <div class="w-progress-stats">
                    <div class="progress">
                        <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%"
                            aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="">
                        <div class="w-icon">
                            <p>57%</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="widget widget-card-four mb-4">
            <div class="widget-content">
                <div class="w-header">
                    <div class="w-info">
                        <h6 class="value">Total Orders Products</h6>
                    </div>
                </div>

                <div class="w-content">

                    <div class="w-info">
                        <p class="value"> 45,141 <span>this week</span> <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-trending-up">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg></p>
                    </div>

                </div>

                <div class="w-progress-stats">
                    <div class="progress">
                        <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%"
                            aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="">
                        <div class="w-icon">
                            <p>57%</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="widget widget-card-four mb-4">
            <div class="widget-content">
                <div class="w-header">
                    <div class="w-info">
                        <h6 class="value">Total Products</h6>
                    </div>
                </div>

                <div class="w-content">

                    <div class="w-info">
                        <p class="value"> 45,141 <span>this week</span> <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-trending-up">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg></p>
                    </div>

                </div>

                <div class="w-progress-stats">
                    <div class="progress">
                        <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%"
                            aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="">
                        <div class="w-icon">
                            <p>57%</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="widget widget-card-four mb-4">
            <div class="widget-content">
                <div class="w-header">
                    <div class="w-info">
                        <h6 class="value">Total Products</h6>
                    </div>
                </div>

                <div class="w-content">

                    <div class="w-info">
                        <p class="value"> 45,141 <span>this week</span> <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-trending-up">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg></p>
                    </div>

                </div>

                <div class="w-progress-stats">
                    <div class="progress">
                        <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%"
                            aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="">
                        <div class="w-icon">
                            <p>57%</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script>
        <!-- BEGIN PAGE LEVEL SCRIPTS
        -->
    <script src="{{ asset('assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('plugins/editors/markdown/simplemde.min.js') }}"></script>
    <script src="{{ asset('plugins/editors/markdown/custom-markdown.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    // Basic
    new SimpleMDE({
    element: document.getElementById("demo1"),
    spellChecker: false,
    });
    </script>


    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

    <script>
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    <!-- END PAGE LEVEL PLUGINS -->


    <script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/custom-select2.js') }}"></script>

    <script>
        $(".placeholder").select2({
    placeholder: "Make a Selection",
    allowClear: true
});
    </script>

    <script>
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);


        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    </script>
@endpush
