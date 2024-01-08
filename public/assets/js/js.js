    
function hideAway(index) {
    var container = document.getElementsByClassName('container')[index];
    if (container.style.display == 'block') {
        container.style.display = 'none';
        // document.getElementById("test").innerHTML="+";
        document.getElementsByClassName("btn-show ")[index].innerHTML= "+";
    }else{
        container.style.display = 'block';
        document.getElementsByClassName("btn-show")[index].innerHTML= "-";
    }
}

function showDialog(id) {
    var dialog= document.getElementById(id);
    dialog.show();
}

function closeDialog(id){
    var dialog= document.getElementById(id);
    dialog.close()
}


document.getElementById("account-limit").addEventListener('input', function(){

    var supply_account_fee= document.getElementById("supply-account-fee");
    var account_limit = document.getElementById("account-limit").value;

        if(account_limit<1000000){
            supply_account_fee.innerHTML= "يجب أن يكون حجم التعامل على الحساب أكثر من 1،000،000 ر.س."
            supply_account_fee.style.color="#e4e2e6"
        }else if(account_limit>=1000000 && account_limit<=5000000){
            supply_account_fee.innerHTML="3،750 ر.س.";
            supply_account_fee.value="3،750 ر.س.";
            supply_account_fee.style.color="black";
        }else if(account_limit>5000000 && account_limit<=10000000){
            supply_account_fee.innerHTML="6،250 ر.س.";
            supply_account_fee.value="6،250 ر.س.";
            supply_account_fee.style.color="black";
        }else if(account_limit>10000000 && account_limit<=20000000){
            supply_account_fee.innerHTML="11،250 ر.س.";
            supply_account_fee.value="11،250 ر.س.";
            supply_account_fee.style.color="black";
        }else if(account_limit>20000000 && account_limit<=50000000){
            supply_account_fee.innerHTML= "17،500 ر.س.";
            supply_account_fee.value= "17،500 ر.س.";
            supply_account_fee.style.color="black";
        }else{
            supply_account_fee.innerHTML="25،000 ر.س.";
            supply_account_fee.value= "25،000 ر.س.";
            supply_account_fee.style.color="black";
        }


})



document.getElementById("details-of-partners-send").addEventListener('click', function(){
    var name= document.getElementById("details-of-partners-name").value;
    var title= document.getElementById("details-of-partners-title").value;
    var nationality= document.getElementById("details-of-partners-nationality").value;
    var type= document.getElementById("details-of-partners-id-type").value;
    var id_num= document.getElementById("details-of-partners-id-num" ).value;
    var date_of_expiry= document.getElementById("details-of-partners-date-of-expiry").value;
    var position= document.getElementById("details-of-partners-position" ).value;
    var ownership= document.getElementById("details-of-partners-ownership" ).value;
    var tax_resident_in= document.getElementById("details-of-partners-tax-resident-in" ).value;
    var country_of_birth= document.getElementById("details-of-partners-country-of-birth" ).value;
    var date_of_birth= document.getElementById("details-of-partners-date-of-birth").value;
    var telephone= document.getElementById("details-of-partners-telephone").value;

    
    document.getElementById("details-of-partners-container").innerHTML= 
    `
        <div class="border" >
            <div class="details-box">
                <span>الاسم: &emsp;</span>
                <span>${ name}</span>
            </div>
            <div class="details-box">
                <span>اللقب: &emsp;</span>
                <span>${title} </span>
            </div>
            <div class="details-box">
                <span>الجنسية: &emsp;</span>
                <span> ${nationality}</span>
            </div>
            <div class="details-box">
                <span>نوع الهوية / المنشأة: &emsp;</span>
                <span> ${type}</span>
            </div>
            <div class="details-box">
                <span>رقم الهوية / السجل: &emsp;</span>
                <span>${id_num} </span>
            </div>
            <div class="details-box">
                <span>تاريخ الانتهاء: &emsp;</span>
                <span> ${date_of_expiry}</span>
            </div>
            <div class="details-box">
                <span>الوظيفة: &emsp;</span>
                <span>${position} </span>
            </div>
            <div class="details-box">
                <span>نسبة الملكية % : &emsp;</span>
                <span> ${ownership}</span>
            </div>
            <div class="details-box">
                <span>مقيم خاضع للضرائب في دولة/ دول: &emsp;</span>
                <span> ${tax_resident_in}</span>
            </div>
            <div class="details-box">
                <span>دولة مكان الميلاد / الإصدار: &emsp;</span>
                <span> ${country_of_birth}</span>
            </div>
            <div class="details-box">
                <span>تاريخ الميلاد / الإصدار: &emsp;</span>
                <span>${date_of_birth} </span>
            </div>
            <div class="details-box">
                <span>الهاتف: &emsp;</span>
                <span>${telephone} </span>
            </div>
        </div>
    `;
    
    document.getElementById("details-of-partners-new").innerHTML= 'تعديل';
    closeDialog("details-of-partners");

})

document.getElementById("authorized-to-operate-account-send").addEventListener("click", function(){
    var name= document.getElementById("authorized-to-operate-account-name").value;
    var type= document.getElementById("authorized-to-operate-account-id-type").value;
    var id_num= document.getElementById("authorized-to-operate-account-id-num" ).value;
    var nationality= document.getElementById("authorized-to-operate-account-nationality").value;
    var date_of_expiry= document.getElementById("authorized-to-operate-account-date-of-expiry").value;
    var cancellation_date= document.getElementById("authorized-to-operate-account-cancellation-date" ).value;
    var country_of_birth= document.getElementById("authorized-to-operate-account-country-of-birth" ).value;
    var date_of_birth= document.getElementById("authorized-to-operate-account-date-of-birth").value;
    var telephone= document.getElementById("authorized-to-operate-account-telephone").value;


    document.getElementById("authorized-to-operate-account-container").innerHTML= 
        `
        <div class="border" >
                <div class="details-box">
                    <span>الاسم: &emsp;</span>
                    <span>${ name}</span>
                </div>
                <div class="details-box">
                    <span>نوع الهوية: &emsp;</span>
                    <span> ${type}</span>
                </div>
                <div class="details-box">
                    <span>رقم الهوية: &emsp;</span>
                    <span>${id_num} </span>
                </div>
                <div class="details-box">
                    <span>الجنسية: &emsp;</span>
                    <span> ${nationality}</span>
                </div>
                <div class="details-box">
                    <span>تاريخ الانتهاء: &emsp;</span>
                    <span> ${date_of_expiry}</span>
                </div>
                <div class="details-box">
                    <span>تاريخ الإلغاء: &emsp;</span>
                    <span>${cancellation_date} </span>
                </div>
                <div class="details-box">
                    <span>دولة مكان الميلاد: &emsp;</span>
                    <span> ${country_of_birth}</span>
                </div>
                <div class="details-box">
                    <span>تاريخ الميلاد: &emsp;</span>
                    <span>${date_of_birth} </span>
                </div>
                <div class="details-box">
                    <span>الهاتف: &emsp;</span>
                    <span>${telephone} </span>
                </div>
        </div>
    `; 
    
    document.getElementById("authorized-to-operate-account-new").innerHTML= 'تعديل';
    closeDialog("authorized-to-operate-account");

})

document.getElementById("board-of-directors-members-send").addEventListener('click', function(){
    var name= document.getElementById("board-of-directors-members-name").value;
    var title= document.getElementById("board-of-directors-members-title").value;
    var nationality= document.getElementById("board-of-directors-members-nationality").value;
    var type= document.getElementById("board-of-directors-members-id-type").value;
    var id_num= document.getElementById("board-of-directors-members-id-num" ).value;
    var date_of_expiry= document.getElementById("board-of-directors-members-date-of-expiry").value;
    var position= document.getElementById("board-of-directors-members-position" ).value;
    var date_of_birth= document.getElementById("board-of-directors-members-date-of-birth").value;
    var country_of_birth= document.getElementById("board-of-directors-members-country-of-birth" ).value;
    var telephone= document.getElementById("board-of-directors-members-telephone").value;


    document.getElementById("board-of-directors-members-container").innerHTML= 
    `
        <div class="border" >
                <div class="details-box">
                    <span>الاسم: &emsp;</span>
                    <span>${ name}</span>
                </div>
                <div class="details-box">
                    <span>اللقب: &emsp;</span>
                    <span>${title} </span>
                </div>
                <div class="details-box">
                    <span>الجنسية: &emsp;</span>
                    <span> ${nationality}</span>
                </div>
                <div class="details-box">
                    <span>نوع الهوية: &emsp;</span>
                    <span> ${type}</span>
                </div>
                <div class="details-box">
                    <span>رقم الهوية: &emsp;</span>
                    <span>${id_num} </span>
                </div>
                <div class="details-box">
                    <span>تاريخ الانتهاء: &emsp;</span>
                    <span> ${date_of_expiry}</span>
                </div>
                <div class="details-box">
                    <span>الوظيفة: &emsp;</span>
                    <span>${position} </span>
                </div>
                <div class="details-box">
                    <span>تاريخ الميلاد: &emsp;</span>
                    <span>${date_of_birth} </span>
                </div>
                <div class="details-box">
                    <span>دولة مكان الميلاد: &emsp;</span>
                    <span> ${country_of_birth}</span>
                </div>
                <div class="details-box">
                    <span>الهاتف: &emsp;</span>
                    <span>${telephone} </span>
                </div>
            </div>
    `;

    document.getElementById("board-of-directors-members-new").innerHTML= 'تعديل';
    closeDialog("board-of-directors-members");
  
});


document.getElementById("main-customers-send").addEventListener("click", function(){
    // to remove initial value
    // var no_data= document.getElementById("main-customers-table-no-data");
    // if(no_data){
    //     no_data.remove() 
    // }
    // END to remove initial value

    var name= document.getElementById("main-customers-name").value;
    var country= document.getElementById("main-customers-country").value;
    var goods= document.getElementById("main-customers-goods").value;
    document.getElementById("main-customers-table-data").innerHTML=
    `
        <td>${name}</td>
        <td>${country}</td>
        <td>${goods}</td>
        `;

    document.getElementById('main-customers-new').innerHTML= "تعديل";

    closeDialog("main-customers");
    
});

document.getElementById("main-vectors-send").addEventListener("click", function(){
    // to remove initial value
    // var no_data= document.getElementById("main-vectors-table-no-data");
    // if(no_data){
    //     no_data.remove() 
    // }
    // END to remove initial value

    var name= document.getElementById("main-vectors-name").value;
    var country= document.getElementById("main-vectors-country").value;
    var goods= document.getElementById("main-vectors-goods").value;
    document.getElementById("main-vectors-table-data").innerHTML=
    `   <td>${name}</td>
        <td>${country}</td>
        <td>${goods}</td>
    `;

    document.getElementById('main-vectors-new').innerHTML= "تعديل";

    closeDialog("main-vectors");
});

document.getElementById("subsidiary-send").addEventListener("click", function(){

    // to remove initial value
    // var no_data= document.getElementById("subsidiary-table-no-data");
    // if(no_data){
    //     no_data.remove() 
    // }
    // END to remove initial value

    var name= document.getElementById("subsidiary-name").value;
    var country= document.getElementById("subsidiary-location-country").value;
    var ownership= document.getElementById("subsidiary-ownership").value;
    document.getElementById("subsidiary-table-data").innerHTML=
    `
        <td>${name}</td>
        <td>${country}</td>
        <td>${ownership}</td>
    `;

    document.getElementById('subsidiary-new').innerHTML= "تعديل";

    closeDialog("subsidiary");
});





function styleEmptyFields(itms,id){
    for (let itm of itms) {
        if(itm.value == ""){
            itm.style.border="solid 1px red";
            document.getElementsByClassName("box")[id].style.border="solid 2px red";
            document.getElementsByClassName("container")[id].style.display="block";
        }else{
            itm.style.border="solid 1px gray";
            document.getElementsByClassName("box")[id].style.border="none";
            // document.getElementsByClassName("container")[id].style.display="none";
        }
    } 
}

document.getElementById("submit").addEventListener("click", function(){

    //To handle required empty fields of #customer-basic-information
    let customer_container = document.querySelector("#customer-basic-information");
    let customer_textInputs = customer_container.querySelectorAll("input[type=text]");
    let customer_dateInputs = customer_container.querySelectorAll("input[type=date]");
    let customer_numInputs = customer_container.querySelectorAll("input[type=number]");
    let customer_selectInputs = customer_container.querySelectorAll("select");
    styleEmptyFields(customer_textInputs, "0");
    styleEmptyFields(customer_dateInputs, "0");
    styleEmptyFields(customer_numInputs, "0");
    styleEmptyFields(customer_selectInputs, "0");
    //END To handle required empty fields of #customer-basic-information

    //To handle required empty fields of #address-in-ksa
    let address_container = document.querySelector("#address-in-ksa");
    let address_textInputs = address_container.querySelectorAll("input[type=text]");
    let address_emailInputs = address_container.querySelectorAll("input[type=email]");
    let address_telInputs = address_container.querySelectorAll("input[type=tel]");
    let address_numInputs = address_container.querySelectorAll("input[type=number]");
    styleEmptyFields(address_textInputs, "3");
    styleEmptyFields(address_emailInputs, "3");
    styleEmptyFields(address_telInputs, "3");
    styleEmptyFields(address_numInputs, "3");
    //END To handle required empty fields of #address-in-ksa



    let authorized_container= document.getElementById("authorized-to-operate-account-container");
    let authorized_sub_container= document.getElementById("authorized-sub-container");
    if(authorized_container.contains(authorized_sub_container)){
        document.getElementsByClassName("box")[1].style.border="none";
        document.getElementById("authorized-to-operate-account-new").style.color="#1da1f2";
    }else{
        document.getElementsByClassName("box")[1].style.border="solid 2px red";
        document.getElementsByClassName("container")[1].style.display="block";
        document.getElementById("authorized-to-operate-account-new").style.color="red";
        
    }

    

    if(document.getElementById("cr-attachment").files.length==0){
        document.getElementsByClassName("box")[6].style.border="solid 2px red";
        document.getElementsByClassName("container")[6].style.display="block";        

    }else{
        document.getElementsByClassName("box")[6].style.border="none";
    }
    
});




