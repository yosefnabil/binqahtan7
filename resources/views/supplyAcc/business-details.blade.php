        <!-- Business-details i5 -->
        <div class="box" onclick="hideAway(5)">
            <h3 class="titles">تفاصيل العمل</h3>
            <button type="button" class="btn-show" >+</button>
        </div>
        <div class="container" id="business-details">

            <label for="type-of-business">نوع النشاط</label>
            <select name="type-of-business" id="type-of-business">
                <option value="" disabled selected>اختر</option>
                <option value="trade">تجاري</option>
                <option value="industry">صناعي</option> 
                <option value="service">خدمي</option> 
                <option value="agriculture">زراعي</option> 
                <option value="estate">عقاري</option> 
                <option value="investment">استثماري</option>
                <option value="company">شركة قابضة</option>
                <option value="insurance">تأمين</option>
                <option value="exchange">صرافة</option>
                <option value="other">أخرى</option>
            </select>

            <h3>معلومات إضافية</h3>

            <label for="business-details-establish-date">تاريخ بداية العمل التجاري</label>
            <input type="date" id="business-details-establish-date" name="business-details-establish-date" placeholder="تاريخ بداية العمل التجاري"  >

            <label for="num-of-workers">عدد الموظفين</label>
            <input type="number" id="num-of-workers" name="num-of-workers" placeholder="عدد الموظفين"  >

            <label for="num-of-branches">عدد الفروع</label>
            <input type="number" id="num-of-branches" name="num-of-branches" placeholder="عدد الفروع"  >

            <label for="geographical-coverage-of-activities">المنطقة الجغرافية للنشاط</label>
            <input type="text" id="geographical-coverage-of-activities" name="geographical-coverage-of-activities" placeholder="المنطقة الجغرافية للنشاط"  >

            <label for="of-initial-capital">مصدر رأس المال</label>
            <select name="of-initial-capital" id="of-initial-capital">
                <option value="" disabled selected>اختر</option>
                <option value="investment">استثماري</option> 
                <option value="owners">أصحاب المنشأة</option> 
                <option value="proceeds">مبيعات</option> 
                <option value="other">اخرى</option> 
            </select>

            <label for="other-activity">إيرادات من نشاطات أخرى (إن وجد)</label>
            <select name="other-activity" id="other-activity">
                <option value="" disabled selected>اختر</option>
                <option value="business-activity">عمل تجاري آخر</option> 
                <option value="investments">استثمارات</option> 
                <option value="rent">ايجارات</option> 
                <option value="other">اخرى</option> 
            </select>

            <label for="amount">اجمالي القيمة</label>
            <input type="text" id="amount" name="amount" placeholder="اجمالي القيمة"  >

            <label for="frequency">عدد مرات التكرار</label>
            <input type="text" id="frequency"  name="frequency" placeholder="عدد مرات التكرار"  >

            <label for="business-details-name">اسم النشاط</label>
            <input type="text" id="business-details-name" name="business-details-name" placeholder="اسم النشاط"  >
        
        </div>
        <!-- END business-details i5 -->