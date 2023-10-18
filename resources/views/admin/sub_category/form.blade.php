@extends('admin.layouts.adminLayout')

@section('contant')

<div id="custom_styles" class="col-lg-4 layout-spacing col-md-4">
  <div class="statbox widget box box-shadow">
    <div class="widget-header">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <h4>Create New Sub-Category</h4>
        </div>
      </div>
    </div>
    <div class="widget-content widget-content-area">
      <form class="needs-validation" novalidate action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <div class="col-md-12 form-group p-0 mb-4">
          <label for="category">Category Name</label>
          <select name="category_id" class="form-control sm" id="category" required>
            <option selected disabled>Select Category</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach 
          </select>
        </div>

        <div class="form-row">
          <div class="col-md-12 mb-4">
            <label for="name">Sub-Category Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Category Name" required>
            <div class="invalid-feedback">
              Required
            </div>
          </div>
          
          <div class="col-md-12 mb-4">
            <label for="customFile">Category Image</label>
            <div class="custom-file mb-4">
              <input type="file" name="image" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
          </div>

          <div class="col-md-6 mb-4">
            <label for="validationCustom04">Possion</label>
            <input type="number" name="possion" class="form-control" id="validationCustom04" placeholder="1" required>
            <div class="invalid-feedback">
              Required
            </div>
          </div>

          <div class="col-md-6 form-group mb-4">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status">
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

<div id="tableHover" class="col-lg-8 col-md-8 layout-spacing">
  <div class="statbox widget box box-shadow">
    <div class="widget-header">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <h4>All Category</h4>
        </div>
      </div>
    </div>
    <div class="widget-content widget-content-area">
      <div class="table-responsive">
        <table class="table table-bordered table-hover mb-4">
          <thead>
            <tr>
              <th style="width: 0px" class="text-center">Image</th>
              <th class="text-center">Name</th> 
              <th style="width: 0px" class="text-center">Status</th>
              <th style="width: 0px" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">
                <a class="profile-img" href="javascript: void(0);">
                  <img width="40" height="30" src="{{ asset('assets/img/90x90.jpg') }}" alt="product">
              </a>
              </td>
              <td class="text-center">Shaun Park</td>
               
              <td class="text-center"><span class="text-success">Inactive</span></td>
              <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon">
                  <polyline points="3 6 5 6 21 6"></polyline>
                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                  <line x1="10" y1="11" x2="10" y2="17"></line>
                  <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg></td>
            </tr>
             
            <tr>
              <td class="text-center">
                <a class="profile-img" href="javascript: void(0);">
                  <img width="40" height="30" src="{{ asset('assets/img/90x90.jpg') }}" alt="product">
              </a>
              </td>
              <td class="text-center">Shaun Park</td>
              
              <td class="text-center"><span class="text-success">Inactive</span></td>
              <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon">
                  <polyline points="3 6 5 6 21 6"></polyline>
                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                  <line x1="10" y1="11" x2="10" y2="17"></line>
                  <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg></td>
            </tr>
             
            <tr>
              <td class="text-center">
                <a class="profile-img" href="javascript: void(0);">
                  <img width="40" height="30" src="{{ asset('assets/img/90x90.jpg') }}" alt="product">
              </a>
              </td>
              <td class="text-center">Shaun Park</td>
               
              <td class="text-center"><span class="text-success">Inactive</span></td>
              <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon">
                  <polyline points="3 6 5 6 21 6"></polyline>
                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                  <line x1="10" y1="11" x2="10" y2="17"></line>
                  <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg></td>
            </tr>
             
            <tr>
              <td class="text-center">
                <a class="profile-img" href="javascript: void(0);">
                  <img width="40" height="30" src="{{ asset('assets/img/90x90.jpg') }}" alt="product">
              </a>
              </td>
              <td class="text-center">Shaun Park</td>
               
              <td class="text-center"><span class="text-success">Inactive</span></td>
              <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon">
                  <polyline points="3 6 5 6 21 6"></polyline>
                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                  <line x1="10" y1="11" x2="10" y2="17"></line>
                  <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg></td>
            </tr>
             
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
@endsection

@push('js')
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
