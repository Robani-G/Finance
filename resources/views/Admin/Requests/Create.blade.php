@include('layouts.Head')
@include('layouts.Header')
@include('layouts.Side_Bar')

<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h4>Company Create</h4>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">
                  <svg class="stroke-icon">
                    <use href="  #stroke-home"></use>
                  </svg></a></li>
              <li class="breadcrumb-item">Company</li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    {{-- <!-- Container-fluid starts-->
    <div class="container-fluid basic_table">
      <div class="row">

        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Company</h4>
                <p class="f-m-light mt-1">
                   Createa a New Finance Requests</p>
              </div>
              <div class="card-body">

                <div class="card-wrapper border rounded-3">
                  <form class="row g-3" action="{{ route('Admin.Company.Store') }}"  method="POST">
                    @csrf
                    <div class="col-md-12">
                      <label class="form-label" for="inputEmail4">Name</label>
                      <input class="form-control" id="inputEmail4" type="text" placeholder="Enter Company Name" name="Name">
                    </div>


                      <div class="col-md-12">
                        <div>
                          <label class="form-label" for="exampleFormControlTextarea14">Description</label>
                          <textarea class="form-control btn-square" id="exampleFormControlTextarea14" rows="3" name="Description"></textarea>
                        </div>
                      </div>

                    <div class="col-12">
                      <button class="btn btn-primary" type="submit">Create </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
    <!-- Container-fluid Ends--> --}}
       <!-- Container-fluid starts-->
       <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>Finance Requests</h4>
              </div>
              <div class="card-body add-post">
                @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
                <form class="row needs-validation" action="{{ route('Admin.Requests.Store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="shared_with_user_id">Companies</label>
                        <select name="Company_Id" class="form-control" required>
                            <option value="" disabled selected>Select a Company</option>
                            @foreach ($Companies as $Company)
                                <option value="{{ $Company->id }}">{{ $Company->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <div>
                          <label class="form-label" for="exampleFormControlTextarea14">Description</label>
                          <textarea class="form-control btn-square" id="exampleFormControlTextarea14" rows="3" name="Description"></textarea>
                        </div>
                      </div>
                    <div class="form-group mb-3">
                        <label for="file">Choose File:</label>
                        <input type="file" name="file_path" class="form-control" required>
                    </div>

                    <div class="btn-showcase text-end">
                    <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container-fluid Ends-->
  </div>

@include('layouts.Footer')
