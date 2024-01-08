<!-- executive-bodies-information i1 -->
<div class="box" onclick="hideAway(1)">
            <h3 class="titles">معلومات مجلس الإدارة <span style="color:red;">*</span></h3>
            <button class="btn-show" type="button">+</button>
        </div>
        <div class="container" id="executive-bodies-information" >
            
            <div id="dialogs">        
                <dialog id="details-of-partners"> 
                    <h2>بيانات الشركاء ، الملاك المستفيدون النهائيون ، المالكين المستفيدين</h2>
                    <div>
                        <label for="details-of-partners-name">الاسم</label>
                        <input type="text" id="details-of-partners-name" name="details-of-partners-name" placeholder="الاسم"  >

                        <label for="details-of-partners-title">اللقب</label>
                        <input type="text" id="details-of-partners-title" name="details-of-partners-title" placeholder="اللقب"  >

                        <label for="details-of-partners-nationality">الجنسية</label>
                        <input type="text" id="details-of-partners-nationality" name="details-of-partners-nationality" placeholder="الجنسية"  >

                        <label for="details-of-partners-id-type">نوع الهوية / المنشأة</label>
                        <input type="text" id="details-of-partners-id-type" name="details-of-partners-id-type" placeholder="نوع الهوية / المنشأة"  >

                        <label for="details-of-partners-id-num">رقم الهوية / السجل</label>
                        <input type="text" id="details-of-partners-id-num" name="details-of-partners-id-num" placeholder="رقم الهوية / السجل"  >

                        <label for="details-of-partners-date-of-expiry">تاريخ الانتهاء</label>
                        <input type="date" id="details-of-partners-date-of-expiry" name="details-of-partners-date-of-expiry" placeholder="تاريخ الانتهاء"  >

                        <label for="details-of-partners-position">الوظيفة</label>
                        <input type="text" id="details-of-partners-position" name="details-of-partners-position" placeholder="الوظيفة"  >

                        <label for="details-of-partners-ownership">نسبة الملكية %</label>
                        <input type="text" id="details-of-partners-ownership" name="details-of-partners-ownership" placeholder="نسبة الملكية %"  >

                        <label for="details-of-partners-tax-resident-in">مقيم خاضع للضرائب في دولة / دول</label>
                        <input type="text" id="details-of-partners-tax-resident-in" name="details-of-partners-tax-resident-in" placeholder="مقيم خاضع للضرائب في دولة / دول"  >

                        <label for="details-of-partners-country-of-birth">دولة مكان الميلاد / الإصدار</label>
                        <input type="text" id="details-of-partners-country-of-birth" name="details-of-partners-country-of-birth" placeholder="دولة مكان الميلاد / الإصدار"  >

                        <label for="details-of-partners-date-of-birth">تاريخ الميلاد / الإصدار</label>
                        <input type="date" id="details-of-partners-date-of-birth" name="details-of-partners-date-of-birth" placeholder="تاريخ الميلاد / الإصدار"  >

                        <label for="details-of-partners-telephone">الهاتف</label>
                        <input type="text" id="details-of-partners-telephone" name="details-of-partners-telephone" placeholder="هاتف"  >
                    </div>

                    <div class="center">
                        <button button type="button" id="details-of-partners-send" name="details-of-partners-send" >إرسال</button>
                        <button button type="button" id="details-of-partners-cancel" name="details-of-partners-cancel" onclick="closeDialog('details-of-partners')">إلغاء</button>
                    </div>

                </dialog>

                <dialog id="authorized-to-operate-account"> 
                    <h2>المخولون بالتعامل مع الحساب</h2>
                    <div>
                        <label for="authorized-to-operate-account-name">الاسم</label>
                        <input type="text" id="authorized-to-operate-account-name" name="authorized-to-operate-account-name" placeholder="الاسم"  >
                        
                        <label for="authorized-to-operate-account-id-type">نوع الهوية</label>
                        <input type="text" id="authorized-to-operate-account-id-type" name="authorized-to-operate-account-id-type" placeholder="نوع الهوية"  >

                        <label for="authorized-to-operate-account-id-num">رقم الهوية</label>
                        <input type="text" id="authorized-to-operate-account-id-num" name="authorized-to-operate-account-id-num" placeholder="رقم الهوية"  >

                        <label for="authorized-to-operate-account-nationality">الجنسية</label>
                        <input type="text" id="authorized-to-operate-account-nationality" name="authorized-to-operate-account-nationality" placeholder="الجنسية"  >

                        <label for="authorized-to-operate-account-date-of-expiry">تاريخ الانتهاء</label>
                        <input type="date" id="authorized-to-operate-account-date-of-expiry" name="authorized-to-operate-account-date-of-expiry" placeholder="تاريخ الانتهاء"  >

                        <label for="authorized-to-operate-account-cancellation-date">تاريخ الإلغاء</label>
                        <input type="date" id="authorized-to-operate-account-cancellation-date" name="authorized-to-operate-account-cancellation-date" placeholder="تاريخ الإلغاء"  >

                        
                        <label for="authorized-to-operate-account-country-of-birth">دولة مكان الميلاد </label>
                        <input type="text" id="authorized-to-operate-account-country-of-birth" name="authorized-to-operate-account-country-of-birth" placeholder="دولة مكان الميلاد"  >

                        <label for="authorized-to-operate-account-date-of-birth">تاريخ الميلاد</label>
                        <input type="date" id="authorized-to-operate-account-date-of-birth" name="authorized-to-operate-account-date-of-birth" placeholder="تاريخ الميلاد"  >

                        
                        <label for="authorized-to-operate-account-telephone">الهاتف</label>
                        <input type="text" id="authorized-to-operate-account-telephone" name="authorized-to-operate-account-telephone" placeholder="هاتف"  >
                        
                    </div>

                    <div class="center">
                        <button type="button" id="authorized-to-operate-account-send" name="authorized-to-operate-account-send">إرسال</button>
                        <button type="button" id="authorized-to-operate-account-cancel" name="authorized-to-operate-account-cancel" onclick="closeDialog('authorized-to-operate-account')">إلغاء</button>
                    </div>

                </dialog>

                <dialog id="board-of-directors-members"> 
                    <h2>أعضاء مجلس الإدارة - الإدارة العليا</h2>
                    <div>
                        <label for="board-of-directors-members-name">الاسم</label>
                        <input type="text" id="board-of-directors-members-name" name="board-of-directors-members-name" placeholder="الاسم"  >

                        <label for="board-of-directors-members-title">اللقب</label>
                        <input type="text" id="board-of-directors-members-title" name="board-of-directors-members-title" placeholder="اللقب"  >

                        <label for="board-of-directors-members-nationality">الجنسية</label>
                        <input type="text" id="board-of-directors-members-nationality" name="board-of-directors-members-nationality" placeholder="الجنسية"  >
                        
                        <label for="board-of-directors-members-id-type">نوع الهوية</label>
                        <input type="text" id="board-of-directors-members-id-type" name="board-of-directors-members-id-type" placeholder="نوع الهوية"  >

                        <label for="board-of-directors-members-id-num">رقم الهوية</label>
                        <input type="number" id="board-of-directors-members-id-num" name="board-of-directors-members-id-num" placeholder="رقم الهوية"  >

                        <label for="board-of-directors-members-date-of-expiry">تاريخ الانتهاء</label>
                        <input type="date" id="board-of-directors-members-date-of-expiry" name="board-of-directors-members-date-of-expiry" placeholder="تاريخ الانتهاء"  >

                        <label for="board-of-directors-members-position">الوظيفة</label>
                        <input type="text" id="board-of-directors-members-position" name="board-of-directors-members-position" placeholder="الوظيفة"  >
                        
                        <label for="board-of-directors-members-date-of-birth">تاريخ الميلاد</label>
                        <input type="date" id="board-of-directors-members-date-of-birth" name="board-of-directors-members-date-of-birth" placeholder="تاريخ الميلاد"  >

                        <label for="board-of-directors-members-country-of-birth">دولة مكان الميلاد </label>
                        <input type="text" id="board-of-directors-members-country-of-birth" name="board-of-directors-members-country-of-birth" placeholder="دولة مكان الميلاد"  >


                        <label for="board-of-directors-members-telephone">الهاتف</label>
                        <input type="phone" id="board-of-directors-members-telephone" name="board-of-directors-members-telephone" placeholder="هاتف"  >
                        
                    </div>

                    <div class="center">
                        <button type="button" id="board-of-directors-members-send" name="board-of-directors-members-send">إرسال</button>
                        <button type="button" id="board-of-directors-members-cancel" name="board-of-directors-members-cancel" onclick="closeDialog('board-of-directors-members')">إلغاء</button>
                    </div>

                </dialog>
            </div>

            <h3>بيانات الشركاء، الملاك المستفيدون النهائيون، المالكين المستفيدين</h3>
            <h4>ملاحظة: يتم طلب معلومات الملاك التي تبلغ نسبة ملكيتهم في رأس مال الشركة 5% فأكثر (للشركات المساهمة)</h4>
            <h4>* الملاك المستفيدون النهائيون: الافراد المستفيدون النهائيون المالكين 5% أو أكثر من رأس مال الشركة من خلال سلسلة الشركات المالكة لهذه.</h4>
            <h4>* الشركة المالكين المستفيدين: إذا كانت الشركة تتصرف نيابة عن شخص آخر، فإن المعني في ذلك هو هذا الشخص.</h4>

            <div >
                <button class="btn-add" id="details-of-partners-new" name="details-of-partners-new" type="button" onclick="showDialog('details-of-partners')">＋ جديد</button>
                <div id="details-of-partners-container"></div>       
            </div>
            <br><br>

            <div>
                <h3>المخولون بالتعامل مع الحساب</h3>
                <button type="button" class="btn-add" id="authorized-to-operate-account-new" name="authorized-to-operate-account-new" type="button" onclick="showDialog('authorized-to-operate-account')">＋ جديد <span style="color:red;">*</span></button>
                <div id="authorized-to-operate-account-container"> </div>
            </div>

            <br><br>

            <div>
                <h3>أعضاء مجلس الإدارة - الإدارة العليا</h3>
                <button type="button" id="board-of-directors-members-new" name="board-of-directors-members-new" class="btn-add" type="button" onclick="showDialog('board-of-directors-members')">＋ جديد</button>
                <div id="board-of-directors-members-container"> </div>
            </div>

            <label for="politically-exposed-person">هل أحد أعضاء مجلس الإدارة/ الشركاء/ الملاك/ المفوضين بالتوقيع يشغل أو سبق وأن شغل هو أو أي أحد
                من أقاربه من الدرجة الأولى أي منصب سياسي أو منصب رفيع في الدولة؟
            </label>
            <select name="politically-exposed-person" id="politically-exposed-person">
                <option value="none" disabled selected>اختر</option>
                <option value="yes">نعم</option>
                <option value="no">لا</option>
            </select>

        </div>
        <!-- END executive-bodies-information i1 -->