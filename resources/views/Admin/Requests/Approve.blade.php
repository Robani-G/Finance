@include('layouts.Head')
@include('layouts.Header')
@include('layouts.Side_Bar')

<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h4>Finance Requests Table</h4>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">
                  <svg class="stroke-icon">
                    <use href="  #stroke-home"></use>
                  </svg></a></li>
              <li class="breadcrumb-item">Finance</li>
              <li class="breadcrumb-item active">Index</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid basic_table">
      <div class="row">

        <div class="col-sm-12">
          <div class="card">
            {{-- <div class="card-header">
                <h4>Hoverable Rows With Horizontal Border</h4><span>Hoverable row use a class  <code>table-hover</code> and for Horizontal border use a class <code>.table-border-horizontal</code> , Solid border Use a class<code>.border-solid .table</code>class.</span>
              </div> --}}
            <div class="table-responsive signal-table custom-scrollbar">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    {{-- <th scope="col">Description</th> --}}
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach ($Requests as $key=>$Request)
                    <th scope="row">{{$key+1}}</th>
                    <th>{{$Request->Company->Name}}</th>
                    {{-- <td>{{$Request->Description}}</td> --}}
                    <td>
                        <li class="btn btn-outline-success txt-dark"> <a href={{ route('Admin.Requests.ApproveCreate', $Request->id) }}>Approve</li>

                        {{-- <button class="btn btn-pill btn-outline-success btn-air-success btn-sm" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-sm">Show</button> --}}

                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>

@include('layouts.Footer')
