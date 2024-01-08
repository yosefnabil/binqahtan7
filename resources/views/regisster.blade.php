<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div id="container" class="container" >
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" dir="rtl" placeholder="اسم المستخدم">
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email"  dir="rtl" placeholder="الايميل">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" dir="rtl" placeholder="رمز الدخول">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" dir="rtl" placeholder="تاكيد رمز الدخول">
						</div>
						<button>
							انشاء حساب جديد
						</button>
						<p>
							<span>
								املك حساب مسجل مسبقا؟
							</span>
							<b onclick="toggle()" class="pointer">
								سجل دخولك هنا
							</b>
						</p>
					</div>
				</div>
			
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" dir="rtl" placeholder="اسم المستخدم">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" dir="rtl" placeholder="رمز الدخول">
						</div>
						<button>
							تسجيل الدخول
						</button>
						<p>
							<b>
								نسيت الرمز؟
							</b>
						</p>
						<p>
							<span>
								لا تملك حساب؟
							</span>
							<b onclick="toggle()" class="pointer">
								انشاء حساب جديد هنا
							</b>
						</p>
					</div>
				</div>
				<div class="form-wrapper">
		
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->

		<!-- END CONTENT SECTION -->
	</div>
    <script src="script.js"></script>

  </body>
</html>
