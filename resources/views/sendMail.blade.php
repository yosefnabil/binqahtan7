<?php
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/inc/db.php');

include('get-survey-data.php');


include('sendMailFunction.php');

// تعيين المنطقة الزمنية للرياض
date_default_timezone_set('Asia/Riyadh');

// بدء الرقم العشوائي بـ "JED-"
$randomNumber = "JED-";

// إضافة تاريخ اليوم (سنة-شهر-يوم)
$randomNumber .= date("Ymd");

// إضافة التوقيت (ساعات:دقائق)
$randomNumber .= date("Hi");
session_start();
$_SESSION['myVariable'] = $randomNumber;



$body= 
'
    <body dir="rtl">
    <h2>رقم العملية JED20231202</h2>

    <br><br>
    <h2>العميل، المنشأة، تفاصيل الحساب</h2>
    <div>
        
        <h2>البيانات الأساسية للعميل</h2>

        <span>اسم الشركة: </span>
        <span>'.$co_name.'</span>
        <br>

        <span>رقم السجل التجاري/ الترخيص: </span>
        <span>'.$license_num.'</span>   
        <br>

        <span>دولة الإصدار: </span>
        <span>'.$country_of_issue.'</span>
        <br>

        <span>مدينة الإصدار: </span>
        <span>'.$city_of_issue.'</span>
        <br>

        <span>تاريخ الإصدار: </span>
        <span>'.$release_date.'</span>
        <br>

        <span>تاريخ الانتهاء: </span>
        <span>'.$expirydate.'</span>
        <br>

        <span for="status-of-presence-in-ksa">طبيعة وجودها في المملكة: </span>
        <span>'.$status.'</span>
        <br>

        <span for="entity-type">نوع المنشأة: </span>
        <span>'.$entity.'</span>
        <br><br>

        <h3>معلومات الحساب</h3>
        
        <span>حجم التعامل على الحساب: </span>
        <span>'.$account_limit.'</span>
        <br>

        <span>شراء التوريد والرسوم: </span>
        <span >'.$supply.'</span>
        <br>

        <span>الغرض من فتح الحساب: </span>
        <span>'.$account_opening_purpose.'</span>
        <br>

        <span for="statement-frequency">كشف الحساب: </span>
        <span>'.$frequency.'</span>
        <br>

        <span for="preferred-language">اللغة المفضلة: </span>
        <span>'.$lang.' </span>
        <br>
    </div>

    <hr>

    <h2>معلومات مجلس الإدارة</h2>
    <div>
        <div>
            
            <div>
                <div >
                    <span>الاسم: &emsp;</span>
                    <span>'.$details_of_partners_name.'</span>
                </div>
                <div >
                    <span>اللقب: &emsp;</span>
                    <span>'.$details_of_partners_title.'</span>
                </div>
                <div >
                    <span>الجنسية: &emsp;</span>
                    <span>'.$details_of_partners_nationality.'</span>
                </div>
                <div >
                    <span>نوع الهوية / المنشأة: &emsp;</span>
                    <span>'.$details_of_partners_id_type.'</span>
                </div>
                <div >
                    <span>رقم الهوية / السجل: &emsp;</span>
                    <span>'.$details_of_partners_id_num.'</span>
                </div>
                <div >
                    <span>تاريخ الانتهاء: &emsp;</span>
                    <span>'.$details_of_partners_date_of_expiry.'</span>
                </div>
                <div >
                    <span>الوظيفة: &emsp;</span>
                    <span>'.$details_of_partners_position.'</span>
                </div>
                <div >
                    <span>نسبة الملكية % : &emsp;</span>
                    <span>'.$details_of_partners_ownership.'</span>
                </div>
                <div >
                    <span>مقيم خاضع للضرائب في دولة/ دول: &emsp;</span>
                    <span>'.$details_of_partners_tax_resident_in.'</span>
                </div>
                <div >
                    <span>دولة مكان الميلاد / الإصدار: &emsp;</span>
                    <span>'.$details_of_partners_country_of_birth.'</span>
                </div>
                <div >
                    <span>تاريخ الميلاد / الإصدار: &emsp;</span>
                    <span>'.$details_of_partners_date_of_birth.'</span>
                </div>
                <div >
                    <span>الهاتف: &emsp;</span>
                    <span>'.$details_of_partners_telephone.'</span>
                </div>
            </div> 
        </div>

        <h3>المخولون بالتعامل مع الحساب </h3>
        <div>
            <div>
                <div >
                    <span>الاسم: &emsp;</span>
                    <span>'.$authorized_to_operate_account_name.'</span>
                </div>
                
                <div >
                    <span>نوع الهوية: &emsp;</span>
                    <span>'.$authorized_to_operate_account_id_type.'</span>
                </div>
                <div >
                    <span>رقم الهوية:  &emsp;</span>
                    <span>'.$authorized_to_operate_account_id_num.'</span>
                </div>
                <div >
                    <span>الجنسية: &emsp;</span>
                    <span>'.$authorized_to_operate_account_nationality.'</span>
                </div>
                <div >
                    <span>تاريخ الانتهاء: &emsp;</span>
                    <span>'.$authorized_to_operate_account_date_of_expiry.'</span>
                </div>
                <div >
                    <span>تاريخ الإلغاء: &emsp;</span>
                    <span>'.$authorized_to_operate_account_cancellation_date.'</span>
                </div>
                <div >
                    <span>دولة مكان الميلاد: &emsp;</span>
                    <span>'.$authorized_to_operate_account_country_of_birth.'</span>
                </div>
                <div >
                    <span>تاريخ الميلاد: &emsp;</span>
                    <span>'.$authorized_to_operate_account_date_of_birth.'</span>
                </div>
                <div >
                    <span>الهاتف: &emsp;</span>
                    <span>'.$authorized_to_operate_account_telephone.'</span>
                </div>
            </div> 
        </div>
    
        <h3>أعضاء مجلس الإدارة - الإدارة العليا</h3>
        <div>
            <div>
                <div >
                    <span>الاسم: &emsp;</span>
                    <span>'.$board_of_directors_members_name.'</span>
                </div>
                <div >
                    <span>اللقب: &emsp;</span>
                    <span>'.$board_of_directors_members_title.'</span>
                </div>
                <div >
                    <span>الجنسية: &emsp;</span>
                    <span>'.$board_of_directors_members_nationality.'</span>
                </div>
                <div >
                    <span>نوع الهوية: &emsp;</span>
                    <span>'.$board_of_directors_members_id_type.'</span>
                </div>
                <div >
                    <span>رقم الهوية: &emsp;</span>
                    <span>'.$board_of_directors_members_id_num.'</span>
                </div>
                <div >
                    <span>تاريخ الانتهاء: &emsp;</span>
                    <span>'.$board_of_directors_members_date_of_expiry.'</span>
                </div>
                <div >
                    <span>الوظيفة: &emsp;</span>
                    <span>'.$board_of_directors_members_position.'</span>
                </div>
                <div >
                    <span>تاريخ الميلاد: &emsp;</span>
                    <span>'.$board_of_directors_members_date_of_birth.'</span>
                </div>
                <div >
                    <span>دولة مكان الميلاد: &emsp;</span>
                    <span>'.$board_of_directors_members_country_of_birth.'</span>
                </div>
                <div >
                    <span>الهاتف: &emsp;</span>
                    <span>'.$board_of_directors_members_telephone.'</span>
                </div>
            </div> 
        </div>
    
        <br><br>
        <span for="politically-exposed-person">هل أحد أعضاء مجلس الإدارة/ الشركاء/ الملاك/ المفوضين بالتوقيع يشغل أو سبق وأن شغل هو أو أي أحد من أقاربه من الدرجة الأولى أي منصب سياسي أو منصب رفيع في الدولة:</span>
        <span>'.$politically.'</span>
    
    </div>
    
    <br><hr>

        
        <div dir="rtl">
        <h2>عنوان العميل في المملكة العربية السعودية</h2>
            <h3>العنوان البريدي</h3>
            <div id="ksa-address">
                <span>صندوق البريد: </span>
                <span>'.$ksa_address_po_box.'</span>
                <br>    

                <span>المدينة: </span>
                <span>'.$ksa_address_city.'</span>
                <br>

                <span>الرمز البريدي: </span>
                <span>'.$ksa_address_postal_code.'</span>
                <br>

                <span>الدولة: </span>
                <span>'.$ksa_address_country.'</span>
                <br>

                <span>اسم الشارع: </span>
                <span>'.$ksa_address_street.'</span>
                <br>

                <span>الحي: </span>
                <span>'.$ksa_address_district.'</span>
                <br>

                <span>فاكس: </span>
                <span>'.$ksa_address_fax.'</span>
                <br>

                <span>هاتف: </span>
                <span>'.$ksa_address_phone.' </span>
                <br>

                <span>البريد الالكتروني: </span>
                <span>'.$ksa_address_email.' </span>
                <br>

                <span>الموقع الالكتروني: </span>
                <span>'.$ksa_address_website.' </span>
                <br>
                <br><br>
            </div>

            <h3>الشخص المفوض بالاتصال</h3>
            <div id="ksa-contact-person">
                <span >الاسم: </span>
                <span>'.$ksa_contact_person_name.' </span>
                <br>

                <span>الجنسية: </span>
                <span>'.$ksa_contact_person_nationality.' </span>
                <br>

                <span>رقم الجوال: </span>
                <span>'.$ksa_contact_person_mobile.' </span>
                <br>

                <span>فاكس: </span>
                <span>'.$ksa_contact_person_fax.' </span>
                <br>

                <span>هاتف: </span>
                <span>'.$ksa_contact_person_phone.' </span>
                <br>

                <span>البريد الالكتروني: </span>
                <span>'.$ksa_contact_person_email.' </span>
                <br><br>
            </div>
            
            <h3>البريد الوطني</h3>
            <div id="national-address">
                <span>اسم الشارع: </span>
                <span>'.$national_address_street_name.' </span>
                <br>

                <span>رقم المبنى: </span>
                <span>'.$national_address_building_number.' </span>
                <br>

                <span>رقم الوحدة: </span>
                <span>'.$national_address_unit_number.' </span>
                <br>

                <span >المنطقة: </span>
                <span>'.$national_address_region.' </span>
                <br>           

                <span>الرمز الإضافي: </span>
                <span>'.$national_address_additional_code.' </span>
                <br>

                <span>المدينة: </span>
                <span>'.$national_address_city.' </span>
                <br>

                <span>الرمز البريدي: </span>
                <span>'.$national_address_postal_code.' </span>
                <br>
                
                <span>الدولة: </span>
                <span>'.$national_address_country.' </span>
                <br>

                <span>الحي: </span>
                <span>'.$national_address_district.' </span>
                <br><br>
            </div>
        </div>

    <br><hr>

    <div dir="rtl">
        <h2 class="titles">إرفاق المستندات</h2>
        <div id="supporting-documents">
            <h3>السجل التجاري: </h3>
            <a href="'.$file_name.'" download >اضغط هنا لتحميل المرفقات</a>
        </div>
        </div>





  <div>
      
    <h2>البيانات الأساسية للعميل</h2>

    <span>اسم الشركة: </span>
    <span>'.$co_name.'</span>
    <br>

    <span>رقم السجل التجاري/ الترخيص: </span>
    <span>'.$license_num.'</span>   
    <br>
  </div>

  <br><hr>

  <h2>العملاء، الموردون، الشركات التابعة</h2>
  <div>
  <h3>العملاء الرئيسيون</h3>   
  <div>         
      <div>
          <span>الاسم: &emsp;</span>
          <span>'.$main_customers_name.'</span>
      </div>
      <div>
          <span>الدولة: &emsp;</span>
          <span>'.$main_customers_country.'</span>
      </div>
      <div>
          <span>سلع/بضائع: &emsp;</span>
          <span>'.$main_customers_goods.'</span>
      </div>          
  </div>

  <br><br>

  <h3>الموردون الرئيسيون</h3>
  <div>
      <div>
          <span>الاسم: &emsp;</span>
          <span>'.$main_vectors_name.'</span>
      </div>
      <div>
          <span>الدولة: &emsp;</span>
          <span>'.$main_vectors_country.'</span>
      </div>
      <div>
          <span>سلع/بضائع: &emsp;</span>
          <span>'.$main_vectors_goods.'</span>
      </div> 
  </div>

  <br><br>

  <h3>الشركات التابعة</h3>
  <div>
      <div>
          <span>الاسم: &emsp;</span>
          <span>'.$subsidiary_name.'</span>
      </div>
      <div>
          <span>الدولة: &emsp;</span>
          <span>'.$subsidiary_location_country.'</span>
      </div>
      <div>
          <span>سلع/بضائع: &emsp;</span>
          <span>'.$subsidiary_ownership.'</span>
      </div>    
  </div>

  <br><br>

  </div>
          
  <br><hr>

  <h2>العنوان خارج المملكة للمنشآت الأجنبية أو المختلطة</h2>
  <div>
      <h3>العنوان البريدي</h3>
      <div id="abroad-address">
          <span>صندوق البريد: </span>
          <span>'.$abroad_address_po_box.' </span>
          <br>
          
          <span>المدينة: </span>
          <span>'.$abroad_address_city.' </span>
          <br>
          
          <span>الرمز البريدي: </span>
          <span>'.$abroad_address_postal_code.' </span>
          <br>  

          <span>الدولة: </span>
          <span>'.$abroad_address_country.' </span>
          <br>

          <span>اسم الشارع: </span>
          <span>'.$abroad_address_street.' </span>
          <br>

          <span>الحي: </span>
          <span>'.$abroad_address_district.' </span>
          <br>

          <span>فاكس: </span>
          <span>'.$abroad_address_fax.' </span>
          <br>

          <span>هاتف: </span>
          <span>'.$abroad_address_phone.' </span>
          <br>

          <span>البريد الالكتروني: </span>
          <span>'.$abroad_address_email.'</span>
          <br>

          <span>الموقع الالكتروني: </span>
          <span>'.$abroad_address_website.' </span>
          <br>

      </div>
      
      <h3>الشخص المفوض بالاتصال</h3>
      <div id="abroad-contact-person">
          <span>الاسم: </span>
          <span>'.$abroad_contact_person_name.' </span>
          <br>

          <span>الجنسية: </span>
          <span>'.$abroad_contact_person_nationality.' </span>
          <br>
          
          <span>رقم الجوال: </span>
          <span>'.$abroad_contact_person_mobile.' </span>
          <br>

          <span>فاكس: </span>
          <span>'.$abroad_contact_person_fax.' </span>
          <br>

          <span>هاتف: </span>
          <span>'.$abroad_contact_person_phone.' </span>
          <br>
          
          <span>البريد الالكتروني: </span>
          <span>'.$abroad_contact_person_email.'</span>
          <br>

      </div>
  </div>

  <br><hr>
  <h2 class="titles">تفاصيل العمل</h2>
  <div class="container" id="business-details">
    
    <span>نوع النشاط: </span>
    <span>'.$business_type.'</span>
    <br>

    <h3>معلومات إضافية</h3>
    <span>تاريخ بداية العمل التجاري: </span>
    <span>'.$business_details_establish_date.' </span>
    <br>

    <span>عدد الموظفين: </span>
    <span>'.$num_of_workers.' </span>
    <br>

    <span>عدد الفروع: </span>
    <span>'.$num_of_branches.' </span>
    <br>

    <span>المنطقة الجغرافية للنشاط: </span>
    <span>'.$geographical_coverage_of_activities.' </span>
    <br>

    <span for="of-initial-capital">مصدر رأس المال: </span>
    <span>'.$initial_capital.'</span>
    <br>

    <span>إيرادات من نشاطات أخرى (إن وجد): </span>
    <span>'.$activities.'</span>
    <br>

    <span>اجمالي القيمة: </span>
    <span>'.$amount.' </span>
    <br>

    <span>عدد مرات التكرار: </span>
    <span>'.$frequency.' </span>
    <br>

    <span>اسم النشاط: </span>
    <span>'.$business_details_name.' </span>
    <br>            
  </div>

  <br><hr>
  




    <br><br>
   
    <hr>

    <h2>معلومات مجلس الإدارة</h2>
    <div>
        <div>
            <?php
            <div>
                <div >
                    <span>الاسم: &emsp;</span>
                    <span>'.$details_of_partners_name.'</span>
                </div>
                <div >
                    <span>اللقب: &emsp;</span>
                    <span>'.$details_of_partners_title.'</span>
                </div>
                <div >
                    <span>الجنسية: &emsp;</span>
                    <span>'.$details_of_partners_nationality.'</span>
                </div>
                <div >
                    <span>نوع الهوية / المنشأة: &emsp;</span>
                    <span>'.$details_of_partners_id_type.'</span>
                </div>
                <div >
                    <span>رقم الهوية / السجل: &emsp;</span>
                    <span>'.$details_of_partners_id_num.'</span>
                </div>
                <div >
                    <span>تاريخ الانتهاء: &emsp;</span>
                    <span>'.$details_of_partners_date_of_expiry.'</span>
                </div>
                <div >
                    <span>الوظيفة: &emsp;</span>
                    <span>'.$details_of_partners_position.'</span>
                </div>
                <div >
                    <span>نسبة الملكية % : &emsp;</span>
                    <span>'.$details_of_partners_ownership.'</span>
                </div>
                <div >
                    <span>مقيم خاضع للضرائب في دولة/ دول: &emsp;</span>
                    <span>'.$details_of_partners_tax_resident_in.'</span>
                </div>
                <div >
                    <span>دولة مكان الميلاد / الإصدار: &emsp;</span>
                    <span>'.$details_of_partners_country_of_birth.'</span>
                </div>
                <div >
                    <span>تاريخ الميلاد / الإصدار: &emsp;</span>
                    <span>'.$details_of_partners_date_of_birth.'</span>
                </div>
                <div >
                    <span>الهاتف: &emsp;</span>
                    <span>'.$details_of_partners_telephone.'</span>
                </div>
            </div> 
        </div>

        <h3>المخولون بالتعامل مع الحساب </h3>
        <div>
            <div>
                <div >
                    <span>الاسم: &emsp;</span>
                    <span>'.$authorized_to_operate_account_name.'</span>
                </div>
                
                <div >
                    <span>نوع الهوية: &emsp;</span>
                    <span>'.$authorized_to_operate_account_id_type.'</span>
                </div>
                <div >
                    <span>رقم الهوية:  &emsp;</span>
                    <span>'.$authorized_to_operate_account_id_num.'</span>
                </div>
                <div >
                    <span>الجنسية: &emsp;</span>
                    <span>'.$authorized_to_operate_account_nationality.'</span>
                </div>
                <div >
                    <span>تاريخ الانتهاء: &emsp;</span>
                    <span>'.$authorized_to_operate_account_date_of_expiry.'</span>
                </div>
                <div >
                    <span>تاريخ الإلغاء: &emsp;</span>
                    <span>'.$authorized_to_operate_account_cancellation_date.'</span>
                </div>
                <div >
                    <span>دولة مكان الميلاد: &emsp;</span>
                    <span>'.$authorized_to_operate_account_country_of_birth.'</span>
                </div>
                <div >
                    <span>تاريخ الميلاد: &emsp;</span>
                    <span>'.$authorized_to_operate_account_date_of_birth.'</span>
                </div>
                <div >
                    <span>الهاتف: &emsp;</span>
                    <span>'.$authorized_to_operate_account_telephone.'</span>
                </div>
            </div> 
        </div>
    
        <h3>أعضاء مجلس الإدارة - الإدارة العليا</h3>
        <div>
            <div>
                <div >
                    <span>الاسم: &emsp;</span>
                    <span>'.$board_of_directors_members_name.'</span>
                </div>
                <div >
                    <span>اللقب: &emsp;</span>
                    <span>'.$board_of_directors_members_title.'</span>
                </div>
                <div >
                    <span>الجنسية: &emsp;</span>
                    <span>'.$board_of_directors_members_nationality.'</span>
                </div>
                <div >
                    <span>نوع الهوية: &emsp;</span>
                    <span>'.$board_of_directors_members_id_type.'</span>
                </div>
                <div >
                    <span>رقم الهوية: &emsp;</span>
                    <span>'.$board_of_directors_members_id_num.'</span>
                </div>
                <div >
                    <span>تاريخ الانتهاء: &emsp;</span>
                    <span>'.$board_of_directors_members_date_of_expiry.'</span>
                </div>
                <div >
                    <span>الوظيفة: &emsp;</span>
                    <span>'.$board_of_directors_members_position.'</span>
                </div>
                <div >
                    <span>تاريخ الميلاد: &emsp;</span>
                    <span>'.$board_of_directors_members_date_of_birth.'</span>
                </div>
                <div >
                    <span>دولة مكان الميلاد: &emsp;</span>
                    <span>'.$board_of_directors_members_country_of_birth.'</span>
                </div>
                <div >
                    <span>الهاتف: &emsp;</span>
                    <span>'.$board_of_directors_members_telephone.'</span>
                </div>
            </div> 
        </div>
    
        <br><br>
        <span for="politically-exposed-person">هل أحد أعضاء مجلس الإدارة/ الشركاء/ الملاك/ المفوضين بالتوقيع يشغل أو سبق وأن شغل هو أو أي أحد من أقاربه من الدرجة الأولى أي منصب سياسي أو منصب رفيع في الدولة:</span>
        <span>'.$politically.'</span>
    
    </div>
    
    <br><hr>

    <h2>العملاء، الموردون، الشركات التابعة</h2>
    <div>
    <h3>العملاء الرئيسيون</h3>   
    <div>         
        <div>
            <span>الاسم: &emsp;</span>
            <span>'.$main_customers_name.'</span>
        </div>
        <div>
            <span>الدولة: &emsp;</span>
            <span>'.$main_customers_country.'</span>
        </div>
        <div>
            <span>سلع/بضائع: &emsp;</span>
            <span>'.$main_customers_goods.'</span>
        </div>          
    </div>

    <br><br>

    <h3>الموردون الرئيسيون</h3>
    <div>
        <div>
            <span>الاسم: &emsp;</span>
            <span>'.$main_vectors_name.'</span>
        </div>
        <div>
            <span>الدولة: &emsp;</span>
            <span>'.$main_vectors_country.'</span>
        </div>
        <div>
            <span>سلع/بضائع: &emsp;</span>
            <span>'.$main_vectors_goods.'</span>
        </div> 
    </div>

    <br><br>

    <h3>الشركات التابعة</h3>
    <div>
        <div>
            <span>الاسم: &emsp;</span>
            <span>'.$subsidiary_name.'</span>
        </div>
        <div>
            <span>الدولة: &emsp;</span>
            <span>'.$subsidiary_location_country.'</span>
        </div>
        <div>
            <span>سلع/بضائع: &emsp;</span>
            <span>'.$subsidiary_ownership.'</span>
        </div>    
    </div>

    <br><br>

    </div>
    
   

        
            
    <br><hr>

        <h2>عنوان العميل في المملكة العربية السعودية</h2>
        <div>
            <h3>العنوان البريدي</h3>
            <div id="ksa-address">
                <span>صندوق البريد: </span>
                <span>'.$ksa_address_po_box.'</span>
                <br>    

                <span>المدينة: </span>
                <span>'.$ksa_address_city.'</span>
                <br>

                <span>الرمز البريدي: </span>
                <span>'.$ksa_address_postal_code.'</span>
                <br>

                <span>الدولة: </span>
                <span>'.$ksa_address_country.'</span>
                <br>

                <span>اسم الشارع: </span>
                <span>'.$ksa_address_street.'</span>
                <br>

                <span>الحي: </span>
                <span>'.$ksa_address_district.'</span>
                <br>

                <span>فاكس: </span>
                <span>'.$ksa_address_fax.'</span>
                <br>

                <span>هاتف: </span>
                <span>'.$ksa_address_phone.' </span>
                <br>

                <span>البريد الالكتروني: </span>
                <span>'.$ksa_address_email.' </span>
                <br>

                <span>الموقع الالكتروني: </span>
                <span>'.$ksa_address_website.' </span>
                <br>
                <br><br>
            </div>

            <h3>الشخص المفوض بالاتصال</h3>
            <div id="ksa-contact-person">
                <span >الاسم: </span>
                <span>'.$ksa_contact_person_name.' </span>
                <br>

                <span>الجنسية: </span>
                <span>'.$ksa_contact_person_nationality.' </span>
                <br>

                <span>رقم الجوال: </span>
                <span>'.$ksa_contact_person_mobile.' </span>
                <br>

                <span>فاكس: </span>
                <span>'.$ksa_contact_person_fax.' </span>
                <br>

                <span>هاتف: </span>
                <span>'.$ksa_contact_person_phone.' </span>
                <br>

                <span>البريد الالكتروني: </span>
                <span>'.$ksa_contact_person_email.' </span>
                <br><br>
            </div>
            
            <h3>البريد الوطني</h3>
            <div id="national-address">
                <span>اسم الشارع: </span>
                <span>'.$national_address_street_name.' </span>
                <br>

                <span>رقم المبنى: </span>
                <span>'.$national_address_building_number.' </span>
                <br>

                <span>رقم الوحدة: </span>
                <span>'.$national_address_unit_number.' </span>
                <br>

                <span >المنطقة: </span>
                <span>'.$national_address_region.' </span>
                <br>           

                <span>الرمز الإضافي: </span>
                <span>'.$national_address_additional_code.' </span>
                <br>

                <span>المدينة: </span>
                <span>'.$national_address_city.' </span>
                <br>

                <span>الرمز البريدي: </span>
                <span>'.$national_address_postal_code.' </span>
                <br>
                
                <span>الدولة: </span>
                <span>'.$national_address_country.' </span>
                <br>

                <span>الحي: </span>
                <span>'.$national_address_district.' </span>
                <br><br>
            </div>
        </div>

    <br><hr>

        <h2>العنوان خارج المملكة للمنشآت الأجنبية أو المختلطة</h2>
        <div>
            <h3>العنوان البريدي</h3>
            <div id="abroad-address">
                <span>صندوق البريد: </span>
                <span>'.$abroad_address_po_box.' </span>
                <br>
                
                <span>المدينة: </span>
                <span>'.$abroad_address_city.' </span>
                <br>
                
                <span>الرمز البريدي: </span>
                <span>'.$abroad_address_postal_code.' </span>
                <br>  

                <span>الدولة: </span>
                <span>'.$abroad_address_country.' </span>
                <br>

                <span>اسم الشارع: </span>
                <span>'.$abroad_address_street.' </span>
                <br>

                <span>الحي: </span>
                <span>'.$abroad_address_district.' </span>
                <br>

                <span>فاكس: </span>
                <span>'.$abroad_address_fax.' </span>
                <br>

                <span>هاتف: </span>
                <span>'.$abroad_address_phone.' </span>
                <br>

                <span>البريد الالكتروني: </span>
                <span>'.$abroad_address_email.'</span>
                <br>

                <span>الموقع الالكتروني: </span>
                <span>'.$abroad_address_website.' </span>
                <br>

            </div>
            
            <h3>الشخص المفوض بالاتصال</h3>
            <div id="abroad-contact-person">
                <span>الاسم: </span>
                <span>'.$abroad_contact_person_name.' </span>
                <br>

                <span>الجنسية: </span>
                <span>'.$abroad_contact_person_nationality.' </span>
                <br>
                
                <span>رقم الجوال: </span>
                <span>'.$abroad_contact_person_mobile.' </span>
                <br>

                <span>فاكس: </span>
                <span>'.$abroad_contact_person_fax.' </span>
                <br>

                <span>هاتف: </span>
                <span>'.$abroad_contact_person_phone.' </span>
                <br>
                
                <span>البريد الالكتروني: </span>
                <span>'.$abroad_contact_person_email.'</span>
                <br>

            </div>
        </div>

    <br><hr>
        <h2 class="titles">تفاصيل العمل</h2>
        <div class="container" id="business-details">

            <span>نوع النشاط: </span>
            <span>'.$business_type.'</span>
            <br>

            <h3>معلومات إضافية</h3>
            <span>تاريخ بداية العمل التجاري: </span>
            <span>'.$business_details_establish_date.' </span>
            <br>

            <span>عدد الموظفين: </span>
            <span>'.$num_of_workers.' </span>
            <br>

            <span>عدد الفروع: </span>
            <span>'.$num_of_branches.' </span>
            <br>

            <span>المنطقة الجغرافية للنشاط: </span>
            <span>'.$geographical_coverage_of_activities.' </span>
            <br>

            <span for="of-initial-capital">مصدر رأس المال: </span>
            <span>'.$initial_capital.'</span>
            <br>

            <span>إيرادات من نشاطات أخرى (إن وجد): </span>
            <span>'.$activities.'</span>
            <br>

            <span>اجمالي القيمة: </span>
            <span>'.$amount.' </span>
            <br>

            <span>عدد مرات التكرار: </span>
            <span>'.$frequency.' </span>
            <br>

            <span>اسم النشاط: </span>
            <span>'.$business_details_name.' </span>
            <br>            
        </div>

        <br><hr>

        
        <div dir="rtl">
        <h2 class="titles">إرفاق المستندات</h2>
        <div id="supporting-documents">
            <h3>السجل التجاري: </h3>
            <a href="'.$file_name.'"  >اضغط هنا لتحميل المرفقات</a>
        </div>
        </div>
    </body>
';

sendMail('co@gulfspectrum.com.sa','فتح حساب توريد', $body,$file_name);
sendMail('cr@gulfspectrum.com.sa','فتح حساب توريد', $body,$file_name);
sendMail('coo@gulfspectrum.com.sa','فتح حساب توريد', $body,$file_name);


$webname = "Your WebName";
$appname = "Learning App";
$appemail = "info@gmail.com";
$token = "12312312";

$maill = '<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">


</head>
<body style="background-color: #006; font-family: Cairo, sans-serif; margin : auto ;min-width: 350px; max-width : 720px; min-height : 350px; max-height : 720px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word;">

<div style="background-color: #006; font-family:  sans-serif; margin : auto ;min-width: 350px; max-width : 720px; min-height : 350px; max-height : 720px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word;">
<br><br>
<p style="font-size: 14px; padding-top :40px; ">عزيزى العميل,</p>
<p style="font-size: 14px;"><span style="font-size: 16px;"><strong>شكرا لك على اختيارك شركة الطيف الخليجى المحدودة!</strong></span></p>
<p style="font-size: 14px;"><span style="font-size: 14px; color: #ced4d9;">رقم الطلب الخاص بك هو.</span></p>

<h1 style="color: #ff8900; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family:  sans-serif; font-size: 22px;"><strong>'.$randomNumber.'</strong></h1>

  <div style="font-family:  sans-serif; color: #ffffff; line-height: 150%; text-align: center; word-wrap: break-word;">
      <p style="font-size: 14px; line-height: 150%;">يرجى ايداع رسوم فتح الحساب 10500 ريال سعودي الى حسابنا الاتي .</p>
      <p style="font-size: 14px; line-height: 150%; padding-top :10px;"></p>
    
        <h4>شركة الطيف الخليجي المحدودة قابضة </h4>
        <p>15800-الشرفية</p>
 <table style="background-color: #006; font-family:  sans-serif;min-width: 350px; max-width : 720px; min-height : 350px; max-height : 720px; color: #ffffff; line-height: 140%; text-align: center; " >
<tbody>

<tr>
<td style="font-size: 14px; ">158608010718500</td>
<td style="font-size: 14px; ">رقم الحساب</td>
</tr>
<tr>
<td style="font-size: 14px; ">SA21 8000 0158 6080 1071 8500</td>
<td style="font-size: 14px; ">ايبان</td>
</tr>
</tbody>
</table>
<br><br>
<h2 style="font-size: 14px; line-height: 150%;">بعد ايداع المبلغ الى الحساب الخاص بنا يرجى ارسال الايصال الى البريد الالكتروني الخاص بنا</h2>
<h3 style="font-size: 14px; line-height: 150%;">finance@gulfspectrum.com.sa</h3>
<br><br>
        <span style="font-size: 14px; line-height: 150%;">سيتم مراجعة المعلومات المرسلة الينا ومن ثم سيتم التواصل معكم</span>
       </div>
  </div>
</div>
</body>
</html>';








sendMailtow($ksa_contact_person_email,'تم ارسال الطلب ', $maill);
sendMailtow('yosefqahtan1996@gmail.com','تم ارسال الطلب ', $maill);




if(!$sent){
    echo "<script>alert('يوجد هناك خطأ، الرجاء الرجوع والمحاولة مرة اخرى')</script>";
    
}else{
    echo '<script>window.location.href = "su.php";</script>';
}


?>
