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
    <!-- Container-fluid starts-->
    <div class="container-fluid basic_table">
      <div class="row">

        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Company</h4>
                <p class="f-m-light mt-1">
                   Createa a New Company</p>
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
    <!-- Container-fluid Ends-->
  </div>

@include('layouts.Footer')
