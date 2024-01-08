<!DOCTYPE html>
<html lang="ar">
<head>
  <title>done</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
       <link rel="shortcut icon" href="assets/img/logo-removebg-preview.png" type="image/png">

   
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="style_done.css">
    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="card">
    <?php
// Return current date from the remote server
$date = date('d-m-y h:i:s');

?>

 <?php
    session_start();
    if (isset($_SESSION['myVariable'])) {
        echo "<p>القيمة المرسلة: " . $_SESSION['myVariable'] . "</p>";
        // يمكنك استخدام القيمة هنا كما تحتاج
        // ...
        // حذف المتغير من جلسة الـ Session بمجرد استخدامه (اختياري)
    
    } else {
        echo "<p>لم يتم إرسال أي قيمة.</p>";
    }
    $randomNumber=$_SESSION['myVariable'];
    ?>






            <div class="title" justify-content-center >تم تقديم الطلب</div>
            <div class="info">
                <div class="row">
                    <div class="col-7">
                        <span id="heading">تاريخ تقديم الطلب</span><br>
                        <span id="details"><?php echo $date; ?></span>
                    </div>
                    <div class="col-3">
                        <span id="heading">رقم الطلب</span><br>
                        <span id="details"><?php echo  $randomNumber; ?> </span>
                    </div>
                </div>      
            </div>      
            <div class="pricing">
                <div class="row">
                    <div class="col-9">
                        <span id="name">ثقتكم سر نجاحنا</span>  
                    </div>
                    <div class="col-3">
                        <span id="price">للاستفسار والمزيد من المعلومات</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <span id="name">الرجاء الاتصال بالرقم التالي:</span>
                    </div>
                    <div class="col-3">
                        <span id="price">01226570007</span>
                    </div>
                </div>
            </div>
    <div class="pricing">
                <div class="row">
                    <div class="col-9">
                      
                        <a href="index.html">
  <input class="btn btn-default" type="submit" value="الرجوع للقائمة الرئيسية"> 
</a>
                        
                    </div>
                </div>
            </div>
            <div class="footer justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-2"><img class="img-fluid" src="assets/img/logo-removebg-preview.png"></div>
                    <div class="col-10">شركة الطيف الخليجي المحدود القابضة &nbsp;</div>
                </div>
            </div>
        </div>
</body>
</html