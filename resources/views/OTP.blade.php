


    <div id="loginPopup" class="popup">

      <div class="container">
        {{-- <button onclick="closePopup()">Close</button> --}}
        {{-- {{ session()->get('otp'); }} --}}
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">ادخال رمز التحقق </div>
              <div class="card-body">
                <form method="POST" action="{{ route('otp.getlogin') }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}" />
                    <div class="row mb-3">

                        <div class="col-md-6">
                            <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp"  required autocomplete="otp" autofocus placeholder="Enter OTP">

                            @error('otp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>




