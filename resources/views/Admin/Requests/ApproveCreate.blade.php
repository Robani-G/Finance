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
                <form class="row needs-validation" action="{{ route('Admin.Requests.ApproveStatus',$Request->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="shared_with_user_id">Companies</label>
                        <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="pesamof475@saeoil.com" value="{{$Request->Company->Name}}" disabled>

                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <label for="shared_with_user_id">Description</label>

                            <p>{{$Request->Description}}</p>
                          </div>
                      </div>
                    <div class="form-group mb-3">
                        @if($Request->file_path)
                        @php
                            // Extract the file extension to determine the file type
                            $fileExtension = pathinfo($Request->file_path, PATHINFO_EXTENSION);
                        @endphp

                        {{-- Display different file types --}}
                        @if(in_array($fileExtension, ['jpg', 'jpeg', 'png']))
                            {{-- Show image --}}
                            <img src="{{ asset($Request->file_path) }}" alt="Request Image" style="max-width: 100%;">
                        @elseif($fileExtension == 'pdf')
                            {{-- Embed PDF in the view --}}
                            <embed src="{{ asset($Request->file_path) }}" type="application/pdf" width="100%" height="600px" />
                        @elseif(in_array($fileExtension, ['doc', 'docx']))
                            {{-- Provide a download link for Word documents --}}

                                <a href="{{ asset($Request->file_path) }}" target="_blank" >
                                <div class="d-block"><i class="f-44 bi bi-filetype-docx txt-warning"></i><i class="fa fa-ellipsis-v me-0 f-14 ellips"></i>
                                  <div class="mt-3">
                                    <h6> ፋይል</h6>
                                    {{-- <p>doc<span class="pull-right"></span></p> --}}
                                </div>
                            </a>
                                </div>
                        @else
                            {{-- If the file type is unknown, provide a generic download link --}}
                            <a href="{{ asset($Request->file_path) }}" target="_blank" class="btn btn-primary">
                                Download File
                            </a>
                        @endif
                    @else
                        <p>No file attached to this Request.</p>
                    @endif
                    </div>

                    <div class="btn-showcase text-end">
                    <button class="btn btn-primary" type="submit">Approve</button>
                    </div>
                    {{-- <div class="btn-showcase text-end">
                        <button class="btn btn-danger" type="submit">Reject</button>
                        </div> --}}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container-fluid Ends-->
  </div>

@include('layouts.Footer')
