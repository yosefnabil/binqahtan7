<!-- Customers-vendors-and-subsidiary-details i2 -->
<div class="box" onclick="hideAway(2)">
            <h3 class="titles">العملاء، الموردون، الشركات التابعة</h3>
            <button class="btn-show" type="button" >+</button>
        </div>
        <div class="container" id="customers-vendors-and-subsidiary-details">
            
            <div>
                <dialog id="main-customers"> 
                    <h2>العملاء الرئيسيون</h2>
                    <div>
                        <label for="main-customers-name">الاسم</label>
                        <input type="text" id="main-customers-name" name="main-customers-name" placeholder="الاسم"  >
                        
                        <label for="main-customers-country">الدولة</label>
                        <input type="text" id="main-customers-country" name="main-customers-country" placeholder="الدولة"  >

                        <label for="main-customers-goods">سلع / بضائع</label>
                        <input type="text" id="main-customers-goods" name="main-customers-goods" placeholder="سلع / بضائع"  >
                        
                    </div>

                    <div class="center">
                        <button type="button" id="main-customers-send" name="main-customers-send">إرسال</button>
                        <button type="button" id="main-customers-cancel" name="main-customers-cancel" onclick="closeDialog('main-customers')">إلغاء</button>
                    </div>
                </dialog>

                
                <dialog id="main-vectors"> 
                    <h2>الموردون الرئيسيون</h2>
                    <div>
                        <label for="main-vectors-name">الاسم</label>
                        <input type="text" id="main-vectors-name" name="main-vectors-name" placeholder="الاسم"  >
                        
                        <label for="main-vectors-country">الدولة</label>
                        <input type="text" id="main-vectors-country" name="main-vectors-country" placeholder="الدولة"  >

                        <label for="main-vectors-goods">سلع / بضائع</label>
                        <input type="text" id="main-vectors-goods" name="main-vectors-goods" placeholder="سلع / بضائع"  >
                        
                    </div>

                    <div class="center">
                        <button type="button" id="main-vectors-send" name="main-vectors-send">إرسال</button>
                        <button type="button" id="main-vectors-cancel" name="main-vectors-cancel" onclick="closeDialog('main-vectors')">إلغاء</button>
                    </div>
                </dialog>


                <dialog id="subsidiary"> 
                    <h2>الشركات التابعة</h2>
                    <div>
                        <label for="subsidiary-name">الاسم</label>
                        <input type="text" id="subsidiary-name" name="subsidiary-name" placeholder="الاسم"  >
                        
                        <label for="subsidiary-location-country">موقع الدولة</label>
                        <input type="text" id="subsidiary-location-country"  name="subsidiary-location-country" placeholder="موقع الدولة"  >

                        <label for="subsidiary-ownership">نسبة الملكية %</label>
                        <input type="text" id="subsidiary-ownership" name="subsidiary-ownership" placeholder="نسبة الملكية %"  >
                        
                    </div>

                    <div class="center">
                        <button type="button" id="subsidiary-send" name="subsidiary-send">إرسال</button>
                        <button type="button" id="subsidiary-cancel" name="subsidiary-cancel" onclick="closeDialog('subsidiary')">إلغاء</button>
                    </div>
                </dialog>
            </div>
            
            <h3>يتم ذكر العملاء والموردين الرئيسيين الذين تتعامل معهم شركتكم</h3>
            
            <div>
                <h3>العملاء الرئيسيون</h3>
                <button type="button" class="btn-add" id="main-customers-new" name="main-customers-new" onclick="showDialog('main-customers')">＋ جديد</button>
            
                <table id="main-customers-table">
                    <tr>
                        <th>الاسم</th>
                        <th>الدولة</th>
                        <th>سلع/ بضائع</th>
                    </tr>
                    <tr id="main-customers-table-data">
                        <td colspan="12" style="color: gray;" >لا توجد بيانات</td>
                    </tr>
                </table>
            </div>

            <br><br>
            
            <div>
                <h3>الموردون الرئيسيون</h3>
                <button type="button" class="btn-add" id="main-vectors-new" name="main-vectors-new" onclick="showDialog('main-vectors')">＋ جديد</button>

                <table id="main-vectors-table">
                    <tr>
                        <th>الاسم</th>
                        <th>الدولة</th>
                        <th>سلع/ بضائع</th>
                    </tr>
                    <tr id="main-vectors-table-data">
                        <td colspan="12" style="color: gray;" >لا توجد بيانات</td>
                    </tr>
                </table>
            </div>

            <br><br>
            <div>
                <h3>الشركات التابعة</h3>
                <button type="button" class="btn-add" id="subsidiary-new" name="subsidiary-new" onclick="showDialog('subsidiary')">＋ جديد</button>

                <table id="subsidiary-table">
                    <tr>
                        <th>الاسم</th>
                        <th>موقع الدولة</th>
                        <th>نسبة الملكية %</th>
                    </tr>
                    <tr id="subsidiary-table-data">
                        <td colspan="12" style="color: gray;" >لا توجد بيانات</td>
                    </tr>
                </table>
            </div>

            <br><br>
            
        </div>
        <!-- END customers-vendors-and-subsidiary-details i2 -->