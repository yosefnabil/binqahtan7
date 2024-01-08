<!DOCTYPE html>

<html lang="ar">
<head>
    <link rel="stylesheet" href="{{URL::asset('assets/css/survey-style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{URL::asset('assests/logo.svg') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- <script type="text/javascript" src="scripts.html"></script> -->

    <title>طلب فتح حساب توريد</title>
</head>
<body>
    <form id="form" action="sendMail.php" method="POST" enctype="multipart/form-data" >
        <div class="subject">
            <h2>طلب فتح حساب توريد</h2>
        </div>
        <br><br><br>
        <div>
            <h3>نأمل منكم فتح حساب توريد لنا لديكم حسب الإجراءات والنظم المتبعة ووفق البيانات الآتية:</h3>
        </div>

        <!-- customer-basic-information i0 -->
         @include('supplyAcc.customer-basic-information')
        <!-- END customer-basic-information i0 -->


        <!-- executive-bodies-information i1 -->
        @include('supplyAcc.executive-bodies-information');
        <!-- END executive-bodies-information i1 -->


        <!-- Customers-vendors-and-subsidiary-details i2 -->
        @include('supplyAcc.customers-vendors-and-subsidiary-details')
        <!-- END customers-vendors-and-subsidiary-details i2 -->


        <!-- Address-in-ksa i3 -->
        @include('supplyAcc.address-in-ksa');
        <!-- END address-in-ksa i3 -->


        <!-- Entity-address-abroad i4 -->
        @include('supplyAcc.entity-address-abroad')
        <!-- END entity-address-abroad i4 -->


        <!-- Business-details i5 -->
        @include('supplyAcc.business-details')
        <!-- END business-details i5 -->


        <!-- supporting-documents i6 -->
        @include('supplyAcc.supporting-documents')
        <!-- END supporting-documents i6 -->

        <br>
        <div class="center">
            <button type="submit" id="submit" name="submit"><h1>إرسـال</h1></button>
        </div>
    </form>
    <script src="//code.tidio.co/fnd2oezpif9ezmlyyihdegiai9ruuyka.js" async></script>
</body>
<?php
//  include('js.html');
 ?>
    <script src="{{URL::asset('assets/js/js.js') }}"></script>

</html>



