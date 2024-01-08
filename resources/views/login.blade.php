<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{URL::asset('assets/css/otp.css')}}" />
    <title>تسجيل الدخول & انشاء حساب</title>

    <link rel="stylesheet" href="{{URL::asset('assets/css/styleLogin.css')}}" />

  </head>
  <body>

    @if(count($errors) > 0 )
    <div class="alert danger">
        <ul class="p-0 m-0" style="list-style: none;">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        <span class="close" onclick="this.parentElement.style.display='none'">×</span>
    </div>

@endif
{{-- @include('OTP'); --}}
                    @if( !empty($visite))
                        @include('OTP')
                    @endif


    <main>

      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="index.html" autocomplete="off" class="sign-in-form">
              <div class="logo">

                <h4>شركة الطيف الخليجي المحدودة قابضة</h4>
              </div>

              <div class="heading">
                <h2 dir="rtl">حياك</h2>
                <h6>لا تملك حساب ?</h6>
                <a href="#" class="toggle">انشاء حساب جديد</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="email"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name='email'

                  />
                  <label dir="rtl">البريد الالكتروني</label>
                </div>


                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label dir="rtl">كلمة السر </label>
                </div>

                <input type="submit" value="تسجيل الدخول" class="sign-btn" />

                <p class="text">
                نسيت رمز الدخول ?
                  <a href="#">احصل على مساعدة</a> سجل الان
                </p>
              </div>
            </form>

            <form action="{{route('create-user')}}" autocomplete="off" class="sign-up-form" method="post">
                @csrf
              <div class="logo">
                <h4>شركة الطيف الخليجي المحدودة قابضة</h4>
              </div>

              <div class="heading">
                <h2 dir="rtl">مستعد</h2>
                <h6>املك حساب مسبقا?</h6>
                <a href="#" class="toggle">تسجيل الدخول</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                    <input
                      type="text"
                      minlength="4"
                      class="input-field"
                      autocomplete="off"
                      required
                      name='first_name'

                    />
                    <label dir="rtl">الاسم الاول</label>
                  </div>
                  <div class="input-wrap">
                      <input
                        type="text"
                        minlength="4"
                        class="input-field"
                        autocomplete="off"
                        required
                        name='last_name'

                      />
                      <label dir="rtl">الاسم الاخير</label>
                    </div>
                    <div class="input-wrap">
                      <input
                        type="number"
                        minlength="4"
                        class="input-field"
                        autocomplete="off"
                        required
                        name='phone'

                      />
                      <label dir="rtl">رقم الهاتف</label>
                    </div>
                    <div class="input-wrap">
                        <input
                          type="email"
                          minlength="4"
                          class="input-field"
                          autocomplete="off"
                          required
                          name='email'

                        />
                        <label dir="rtl">البريد الالكتروني</label>
                    </div>
                  <div class="input-wrap">
                    <input
                      type="password"
                      minlength="4"
                      class="input-field"
                      autocomplete="off"
                      required
                      name="password"
                    />
                    <label dir="rtl">كلمة السر </label>
                  </div>

                <input type="submit" value="انشاء الحساب" class="sign-btn" />
            </div>
        </form>
                <p class="text">
                  بستجيل الحساب معنا فانت توافق على
                  <a href="#">سياسات الخدمة</a> و
                  <a href="#">سياسة الخصوصية</a>
                </p>
<form action="index.html" autocomplete="off" class="sign-in-form">
              <div class="logo">

                <h4>شركة الطيف الخليجي المحدودة قابضة</h4>
              </div>

              <div class="heading">
                <h2 dir="rtl">حياك</h2>
                <h6>لا تملك حساب ?</h6>
                <a href="#" class="toggle">انشاء حساب جديد</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="email"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name='email'

                  />
                  <label dir="rtl">البريد الالكتروني</label>
                </div>


                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label dir="rtl">كلمة السر </label>
                </div>

                <input type="submit" value="تسجيل الدخول" class="sign-btn" />

                <p class="text">
                نسيت رمز الدخول ?
                  <a href="#">احصل على مساعدة</a> سجل الان
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/logo.png" class="image img-1 show" alt="" />
              <img src="./img/image2.png" class="image img-2" alt="" />
              <img src="./img/logo.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>سجل حساب معنا</h2>
                  <h2>تمتع بخدمات الطيف</h2>
                  <h2>خدمة ودعم متواصل</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="{{URL::asset('assets/js/appLogin.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{URL::asset('assets/js/otp.js')}}"></script>
</body>
</html>
