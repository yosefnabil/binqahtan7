
<!-- customer-basic-information i0 -->
<div class="box" onclick="hideAway(0)">
            <h3 class="titles">العميل، المنشأة، تفاصيل الحساب <span style="color:red;">*</span></h3>
            <button type="button" class="btn-show" >+</button>
        </div>
        <div class="container" id="customer-basic-information" >
            
            <h3>البيانات الأساسية للعميل</h3>
            <label for="co-name">اسم الشركة</label>
            <input type="text" id="co-name" name="co-name" placeholder="اسم الشركة" required>
            
            <label for="license-num">رقم السجل التجاري/ الترخيص</label>
            <input type="number" id="license-num" name="license-num" placeholder="رقم السجل التجاري/ الترخيص" required>
            
            <label for="country-of-issue">دولة الإصدار</label>
            <input type="text" id="country-of-issue" name="country-of-issue" placeholder="دولة الإصدار" required>
            
            <label for="city-of-issue">مدينة الإصدار</label>
            <input type="text" id="city-of-issue" name="city-of-issue" placeholder="مدينة الإصدار" required>
            
            <label for="release-date">تاريخ الإصدار</label>
            <input type="date" id="release-date" name="release-date" placeholder="تاريخ الإصدار" required>
        
            <label for="expiry-date">تاريخ الانتهاء</label>
            <input type="date" id="expiry-date" name="expiry-date" placeholder="تاريخ الانتهاء" required>
        
            <label for="status-of-presence-in-ksa">طبيعة وجودها في المملكة</label>
            <select name="status-of-presence-in-ksa" id="status-of-presence-in-ksa" required>
                <option value="" disabled selected>اختر</option>
                <option value="saudi-co">شركة سعودية</option>
                <option value="non-saudi-co">شركة غير سعودية</option>
                <option value="multinational-co">شركة متعددة الجنسيات</option>
            </select>

            <label for="entity-type">نوع المنشأة</label>
            <select name="entity-type" id="entity-type" required>
                <option value="" disabled selected>اختر</option>
                <option value="sole-proprietorship">مؤسسة فردية</option>
                <option value="limited-partnership-co">شركة توصية بسيطة</option>
                <option value="limited-liability-co">شركة ذات مسؤولية محدودة</option>
                <option value="closed-joint-stock-co">شركة مساهمة مقفلة</option>
                <option value="insurance-co">شركة تأمين</option>
                <option value="general-partnership-co">شركة تضامن</option>
                <option value="partnership-limited-by-share-co">توصية الأسهم</option>
                <option value="public-joint-stock-co">شركة مساهمة عامة</option>
                <option value="semi-government-co">شركة شبه حكومية</option>
                <option value="public-sector-co">قطاع عام</option>
            </select>

            <h3>معلومات الحساب</h3>
            
            <label for="account-limit">حجم التعامل على الحساب</label>
            <input type="number" id="account-limit" name="account-limit" placeholder="حجم التعامل على الحساب" required>
        

    

            <br>
            <label for="account-opening-purpose">الغرض من فتح الحساب</label>
            <input type="text" id="account-opening-purpose" name="account-opening-purpose" placeholder="الغرض من فتح الحساب" required>

            
            <label for="statement-frequency">كشف الحساب</label>
            <select name="statement-frequency" id="statement-frequency" required>
                <option value="" disabled selected>اختر</option>
                <option value="monthly">شهري</option>
                <option value="quarterly">ربع سنوي</option>
                <option value="annually">سنوي</option>
                <option value="on-request">عند الطلب</option>
                <option value="not-required">لا يرغب</option>
            </select>

            <label for="preferred-language">اللغة المفضلة</label>
            <select name="preferred-language" id="preferred-language" required>
                <option value="" disabled selected>اختر</option>
                <option value="english">الانجليزية</option>
                <option value="arabic">العربية</option>
            </select>

        </div>
        <!-- END customer-basic-information i0 -->