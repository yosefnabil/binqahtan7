<?php
include('inc/db.php');


// customer-basic-information i0
$co_name = filter_data('co-name');
$license_num= filter_data('license-num'); 
$country_of_issue = filter_data('country-of-issue'); 
$city_of_issue = filter_data('city-of-issue'); 
$release_date = filter_data('release-date');
$expirydate = filter_data('expiry-date');
$status_of_presence_in_ksa = filter_data('status-of-presence-in-ksa'); 
$entity_type = filter_data('entity-type'); 
$account_limit = filter_data('account-limit');
// $supply_account_fee = filter_data('supply-account-fee');
$account_opening_purpose = filter_data('account-opening-purpose'); 
$statement_frequency = filter_data('statement-frequency');
$preferred_language = filter_data('preferred-language'); 
//END customer-basic-information i0

//START executive-bodies-information i1

//START details-of-partners Dialog
    $details_of_partners_name = filter_data('details-of-partners-name'); 
    $details_of_partners_title = filter_data('details-of-partners-title');
    $details_of_partners_nationality = filter_data('details-of-partners-nationality');
    $details_of_partners_id_type = filter_data('details-of-partners-id-type'); 
    $details_of_partners_id_num = filter_data('details-of-partners-id-num'); 
    $details_of_partners_date_of_expiry = filter_data('details-of-partners-date-of-expiry');
    $details_of_partners_position = filter_data('details-of-partners-position'); 
    $details_of_partners_ownership = filter_data('details-of-partners-ownership');
    $details_of_partners_tax_resident_in = filter_data('details-of-partners-tax-resident-in');
    $details_of_partners_country_of_birth = filter_data('details-of-partners-country-of-birth'); 
    $details_of_partners_date_of_birth = filter_data('details-of-partners-date-of-birth'); 
    $details_of_partners_telephone = filter_data('details-of-partners-telephone');
//END details-of-partners Dialog

//START authorized-to-operate-account Dialog
    $authorized_to_operate_account_name =filter_data('authorized-to-operate-account-name');
    $authorized_to_operate_account_id_type =filter_data('authorized-to-operate-account-id-type');
    $authorized_to_operate_account_id_num =filter_data('authorized-to-operate-account-id-num');
    $authorized_to_operate_account_nationality = filter_data('authorized-to-operate-account-nationality');
    $authorized_to_operate_account_date_of_expiry = filter_data('authorized-to-operate-account-date-of-expiry'); 
    $authorized_to_operate_account_cancellation_date = filter_data('authorized-to-operate-account-cancellation-date');
    $authorized_to_operate_account_country_of_birth = filter_data('authorized-to-operate-account-country-of-birth');
    $authorized_to_operate_account_date_of_birth = filter_data('authorized-to-operate-account-date-of-birth'); 
    $authorized_to_operate_account_telephone = filter_data('authorized-to-operate-account-telephone'); 
//END authorized-to-operate-account Dialog

//START board-of-directors-members Dialog
    $board_of_directors_members_name = filter_data('board-of-directors-members-name');
    $board_of_directors_members_title = filter_data('board-of-directors-members-title');
    $board_of_directors_members_nationality = filter_data('board-of-directors-members-nationality');
    $board_of_directors_members_id_type = filter_data('board-of-directors-members-id-type');
    $board_of_directors_members_id_num = filter_data('board-of-directors-members-id-num');
    $board_of_directors_members_date_of_expiry = filter_data('board-of-directors-members-date-of-expiry');
    $board_of_directors_members_position = filter_data('board-of-directors-members-position');
    $board_of_directors_members_date_of_birth = filter_data('board-of-directors-members-date-of-birth');
    $board_of_directors_members_country_of_birth = filter_data('board-of-directors-members-country-of-birth'); 
    $board_of_directors_members_telephone = filter_data('board-of-directors-members-telephone');
//END board-of-directors-members Dialog


$politically_exposed_person = filter_data('politically-exposed-person'); 
//END executive-bodies-information i1

//START Customers-vendors-and-subsidiary-details i2
//START main-customers dialog
    $main_customers_name = filter_data('main-customers-name');
    $main_customers_country = filter_data('main-customers-country');
    $main_customers_goods = filter_data('main-customers-goods'); 
//END main-customers dialog

//START main-vectors dialog
    $main_vectors_name = filter_data('main-vectors-name'); 
    $main_vectors_country = filter_data('main-vectors-country'); 
    $main_vectors_goods = filter_data('main-vectors-goods');
//END main-vectors dialog

//START subsidiary dialog
    $subsidiary_name = filter_data('subsidiary-name');
    $subsidiary_location_country = filter_data('subsidiary-location-country');
    $subsidiary_ownership = filter_data('subsidiary-ownership');
//END subsidiary dialog
//END Customers-vendors-and-subsidiary-details i2

//START Address-in-ksa i3
$ksa_address_po_box =filter_data('ksa-address-po-box');
$ksa_address_city = filter_data('ksa-address-city'); 
$ksa_address_postal_code = filter_data('ksa-address-postal-code', FILTER_VALIDATE_INT);
$ksa_address_country = filter_data('ksa-address-country');
$ksa_address_street = filter_data('ksa-address-street');
$ksa_address_district = filter_data('ksa-address-district'); 
$ksa_address_fax = filter_data('ksa-address-fax'); 
$ksa_address_phone = filter_data('ksa-address-phone'); 
$ksa_address_email = filter_data('ksa-address-email'); 
$ksa_address_website = filter_data('ksa-address-website'); 

//START ksa-contact-person
    $ksa_contact_person_name = filter_data('ksa-contact-person-name'); 
    $ksa_contact_person_nationality = filter_data('ksa-contact-person-nationality'); 
    $ksa_contact_person_mobile = filter_data('ksa-contact-person-mobile');
    $ksa_contact_person_fax = filter_data('ksa-contact-person-fax');
    $ksa_contact_person_phone = filter_data('ksa-contact-person-phone'); 
    $ksa_contact_person_email = filter_data('ksa-contact-person-email');
//END ksa-contact-person
//START national-address
    $national_address_street_name = filter_data('national-address-street-name');
    $national_address_building_number = filter_data('national-address-building-number');
    $national_address_unit_number = filter_data('national-address-unit-number');
    $national_address_region = filter_data('national-address-region');
    $national_address_additional_code = filter_data('national-address-additional-code'); 
    $national_address_city = filter_data('national-address-city'); 
    $national_address_postal_code = filter_data('national-address-postal-code'); 
    $national_address_country = filter_data('national-address-country'); 
    $national_address_district = filter_data('national-address-district'); 
//END national-address
//END Address-in-ksa i3


//START Entity-address-abroad i4 

//START abroad-address
    $abroad_address_po_box = filter_data('abroad-address-po-box'); 
    $abroad_address_city = filter_data('abroad-address-city');
    $abroad_address_postal_code = filter_data('abroad-address-postal-code');
    $abroad_address_country = filter_data('abroad-address-country');
    $abroad_address_street = filter_data('abroad-address-street');
    $abroad_address_district = filter_data('abroad-address-district');
    $abroad_address_fax = filter_data('abroad-address-fax');
    $abroad_address_phone = filter_data('abroad-address-phone');
    $abroad_address_email = filter_data('abroad-address-email', FILTER_SANITIZE_EMAIL); 
    $abroad_address_website = filter_data('abroad-address-website');
//END abroad-address 

//START abroad-contact-person 
    $abroad_contact_person_name = filter_data('abroad-contact-person-name');
    $abroad_contact_person_nationality = filter_data('abroad-contact-person-nationality');
    $abroad_contact_person_mobile = filter_data('abroad-contact-person-mobile'); 
    $abroad_contact_person_fax = filter_data('abroad-contact-person-fax'); 
    $abroad_contact_person_phone = filter_data('abroad-contact-person-phone');
    $abroad_contact_person_email = filter_data('abroad-contact-person-email', FILTER_SANITIZE_EMAIL); 
//END abroad-contact-person 
    
//END Entity-address-abroad i4   

//START Business-details i5 
$type_of_business = filter_data('type-of-business'); 
$business_details_establish_date = filter_data('business-details-establish-date'); 
$num_of_workers = filter_data('num-of-workers', FILTER_VALIDATE_INT);
$num_of_branches = filter_data('num-of-branches', FILTER_VALIDATE_INT);
$geographical_coverage_of_activities = filter_data('geographical-coverage-of-activities'); 
$of_initial_capital = filter_data('of-initial-capital'); 
$other_activity = filter_data('other-activity');
$amount = filter_data('amount'); 
$frequency = filter_data('frequency');
$business_details_name = filter_data('business-details-name');
//END Business-details i5 

//supporting-documents i6 
$file_name='';
if(isset($_POST['submit']))
{
    $file = rand(1000,100000)."-".$_FILES['cr-attachment']['name'];
    $file_loc = $_FILES['cr-attachment']['tmp_name'];
    $file_size = $_FILES['cr-attachment']['size'];
    $file_type = $_FILES['cr-attachment']['type'];
    $folder="upload/";
    $new_size = $file_size/1024;  
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
    $file_name=$folder.$final_file;
    if(!move_uploaded_file($file_loc,$folder.$final_file)){
        echo '<script>alert("يوجد خطأ في تحميل الملف، الرجاء المحاولة مرة اخرى")</script>';
    }
}
// END supporting-documents i6


$supply="لا يوجد بيانات";
if($account_limit){
    if($account_limit<1000000){
        $supply= " حجم التعامل على الحساب أقل من 1،000،000 ر.س.";
    }else if($account_limit>=1000000 && $account_limit<=5000000){
        $supply="3،750 ر.س.";
    }else if($account_limit>5000000 && $account_limit<=10000000){
        $supply="6،250 ر.س.";
    }else if($account_limit>10000000 && $account_limit<=20000000){
        $supply="11،250 ر.س.";
    }else if($account_limit>20000000 && $account_limit<=50000000){
        $supply= "17،500 ر.س.";
    }else{
        $supply="25،000 ر.س.";
    }
}

$status= "";
if($status_of_presence_in_ksa){
    $res=  $status_of_presence_in_ksa;
    if($res=="saudi-co"){
        $status= "شركة سعودية";
    }else if($res=="non-saudi-co"){
        $status= "شركة غير سعودية";
    }else if($res=="multinational-co"){
        $status= "شركة متعددة الجنسيات";
    }else{
        $status= "";
    }
}

$entity="";
if($entity_type){
    $res= $entity_type;
    if($res=="sole-proprietorship"){
        $entity= "مؤسسة فردية";
    }else if($res=="limited-partnership-co"){
        $entity= "شركة توصية بسيطة";
    }else if($res=="limited-liability-co"){
        $entity= "شركة ذات مسؤولية محدودة";
    }else if($res=="closed-joint-stock-co"){
        $entity= "شركة مساهمة مقفلة";
    }else if($res=="insurance-co"){
        $entity= "شركة تأمين";
    }else if($res=="general-partnership-co"){
        $entity= "شركة تضامن";
    }else if($res=="partnership-limited-by-share-co"){
        $entity= "توصية الأسهم";
    }else if($res=="public-joint-stock-co"){
        $entity= "شركة مساهمة عامة";
    }else if($res=="semi-government-co"){
        $entity= "شركة شبه حكومية";
    }else if($res=="public-sector-co"){
        $entity= "قطاع عام";
    }else{
        $entity= "";
    }
}

$frequency="";
if($statement_frequency){
    $res= $statement_frequency;
    if($res=="monthly"){
        $frequency= "شهري";
    }else if($res=="quarterly"){
        $frequency= "ربع سنوي";
    }else if($res=="annually"){
        $frequency= "سنوي";
    }else if($res=="on-request"){
        $frequency= "عند الطلب";
    }else if($res=="not-required"){
        $frequency= "لا يرغب";
    }else{
        $frequency= "";
    }
}

$lang="";
if($preferred_language){
    $lan= $preferred_language;
    if($lan=="english"){
        $lang= "الانجليزية";
    }else{
        $lang= "العربية";
    }
}

$politically="";
if($politically_exposed_person){
    $res= $politically_exposed_person;
    if($res=="yes"){
        $politically= "نعم";
    }else if($res=="no"){
        $politically= "لا";
    }else{
        $politically= "";
    }
}

$business_type="";
if($type_of_business){
    $res= $type_of_business;
    if($res=="trade"){
        $business_type= "تجاري";
    }else if($res=="industry"){
        $business_type= "صناعي";
    }else if($res=="service"){
        $business_type= "خدمي";
    }else if($res=="agriculture"){
        $business_type= "زراعي";
    }else if($res=="estate"){
        $business_type= "عقاري";
    }else if($res=="investment"){
        $business_type= "استثماري";
    }else if($res=="company"){
        $business_type= "شركة قابضة";
    }else if($res=="insurance"){
        $business_type= "تأمين";
    }else if($res=="exchange"){
        $business_type= "صرافة";
    }else if($res=="other"){
        $business_type= "أخرى";
    }else{
        $business_type= "";
    }
}

$initial_capital="";
if($of_initial_capital){
    $res= $of_initial_capital;
    if($res=="investment"){
        $initial_capital= "استثماري";
    }else if($res=="owners"){
        $initial_capital= "أصحاب المنشأة";
    }else if($res=="proceeds"){
        $initial_capital= "مبيعات";
    }else if($res=="other"){
        $initial_capital= "اخرى";
    }else{
        $initial_capital= "";
    }
}

$activities="";
if($other_activity){
    $res= $other_activity;
    if($res=="business-activity"){
        $activities= "عمل تجاري آخر";
    }else if($res=="investments"){
        $activities= "استثمارات";
    }else if($res=="rent"){
        $activities= "ايجارات";
    }else if($res=="other"){
        $activities= "اخرى";
    }else{
        $activities= "";
    }
}




function filter_data($id, $type=FILTER_SANITIZE_STRING){
    global $connection;
    $filtered= mysqli_real_escape_string($connection, filter_input(INPUT_POST, $id, $type));
    return $filtered;
}
?>