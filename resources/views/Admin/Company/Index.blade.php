@include('layouts.Head')
@include('layouts.Header')
@include('layouts.Side_Bar')

<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h4>Company Table</h4>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">
                  <svg class="stroke-icon">
                    <use href="  #stroke-home"></use>
                  </svg></a></li>
              <li class="breadcrumb-item">Bootstrap Tables</li>
              <li class="breadcrumb-item active">Bootstrap Basic Tables</li>
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
            <div class="card-header">
                <h4>Hoverable Rows With Horizontal Border</h4><span>Hoverable row use a class  <code>table-hover</code> and for Horizontal border use a class <code>.table-border-horizontal</code> , Solid border Use a class<code>.border-solid .table</code>class.</span>
              </div>
            <div class="table-responsive signal-table custom-scrollbar">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Comapany Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <th>EISD</th>
                    <td>This is EISD</td>
                    <td>
                        <button class="btn btn-pill btn-outline-success btn-air-success btn-sm" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-sm">Success Button</button>
                        <button class="btn btn-pill btn-outline-warning btn-air-warning btn-sm" type="button" title="btn btn-pill btn-outline-warning btn-air-warning btn-sm">Warning Button</button>
                        <button class="btn btn-pill btn-outline-danger btn-air-danger btn-sm" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-sm">Danger Button</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <th>New Company</th>
                    <td>This is EISD</td>
                    <td>
                        <button class="btn btn-pill btn-outline-success btn-air-success btn-sm" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-sm">Success Button</button>
                        <button class="btn btn-pill btn-outline-warning btn-air-warning btn-sm" type="button" title="btn btn-pill btn-outline-warning btn-air-warning btn-sm">Warning Button</button>
                        <button class="btn btn-pill btn-outline-danger btn-air-danger btn-sm" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-sm">Danger Button</button>
                    </td>
                  </tr>
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
