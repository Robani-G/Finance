@include('layouts.Head')
<!-- login page start-->
<div class="container-fluid">
    <div class="row">
      <div class="col-xl-5"><img class="bg-img-cover bg-center" src="../assets/images/login/3.jpg" alt="looginpage"></div>
      <div class="col-xl-7 p-0">
        <div class="login-card login-dark">
          <div>
            <div><a class="logo text-start" href="index.html"> <img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-light" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
            <div class="login-main">
              <form class="theme-form" method="POST" action="{{ route('login') }}">
                @csrf
                <h4>{{ __('Login in to account') }}</h4>
                <p>Enter your email & password to login</p>
                <div class="form-group">
                  <label class="col-form-label">{{ __('Email Address') }}</label>
                  <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Test@gmail.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label class="col-form-label">{{ __('Password') }}</label>
                  <div class="form-input position-relative">
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required="" placeholder="*********">
                    <div class="show-hide">
                        <span class="show">                         </span></div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Remember password</label>
                  </div>
                  <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                </div>

                <p class="mt-4 mb-0 text-center"><a class="ms-2" href="sign-up.html">Forgot Your Password?</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<!-- latest jquery-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
<!-- scrollbar js-->
<script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/config.js') }}"></script>
<!-- Plugins JS start-->
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/esl.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/config.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/pie-chart/facePrint.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/pie-chart/testHelper.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/pie-chart/custom-transition-texture.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/data/symbols.js') }}"></script>
<!-- calendar js-->
<script src="{{ asset('assets/js/letter-box/custom-mail-pagination.js') }}"></script>
<script src="{{ asset('assets/js/letter-box/custom-usermail.js') }}"></script>
<script src="{{ asset('assets/js/editors/quill.js') }}"></script>
<script src="{{ asset('assets/js/editors/custom-quill.js') }}"></script>
<script src="{{ asset('assets/js/print.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/dashboard_3.js') }}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
</body>

<!-- Mirrored from admin.pixelstrap.net/riho/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Sep 2024 20:36:58 GMT -->
</html>
