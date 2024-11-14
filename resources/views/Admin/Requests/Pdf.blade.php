<div class="card">

    {{-- @php
    $attributes = json_decode($Request->Attributes, true);
    // dd($attributes);
@endphp --}}
    <div class="card-body">
        <div class="row">
            <div class="card-header">
                <h4 class="card-title mb-0 mt-10 font-bold" style="font-weight: bold  "> ፋይናንስ  </h4>
            </div>
            <div class="col-xl-6">
                <div class="card-body">
                    <label for="shared_with_user_id">{{$Request->Company->Name}}</label>

                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."


                    </p>
                  </div>
              </div>
            </div>
            <div class="col-xl-6">
                <div class="card-body">
                    <label for="shared_with_user_id">የሀላፊ ስም</label>

                    {{-- <p>{{$Request->User->name}}</p> --}}
                    <p>Test Test</p>

                    {{-- <img class="img-fluid" width="50" height="50" src="{{ asset('assets/images/user.png') }}" alt="User Image"> --}}

                  </div>
              </div>
            </div>

        </div>
    </div>
</div>
