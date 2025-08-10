function validateHero(){
    var from = document.getElementById('from').value;
    var to = document.getElementById('to').value;
    var date = document.getElementById('date').value;

    isTextEmpty(from,'from');
    isTextEmpty(to,'to');
    isTextEmpty(date,'date');

    
}

function isTextEmpty(tf,idd){

    if(tf=="" || tf == null){
        document.getElementById(idd).style.borderColor="red";
    }else{
        document.getElementById(idd).style.borderColor="green";
    }
}
/**-===============Sign Up Validation============== */
function validateSignUp(){
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var user = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var passwrd = document.getElementById('password').value;

    isTextEmpty(fname,'fname');
    isTextEmpty(lname,'lname');
    isTextEmpty(user,'username');
    isTextEmpty(email,'email');
    isTextEmpty(passwrd,'password');
}

/**====================Book validation================== */

function validateBook(){
    var from = document.getElementById('from').value;
    var to = document.getElementById('to').value;
    var date = document.getElementById('date').value;
    var type = document.getElementById('jtype').value;

    isTextEmpty(from,'from');
    isTextEmpty(to,'to');
    isTextEmpty(date,'date');
    
 
}





/**======================Contact=========================== */
function makeacall(){
    alert("Call our hotline - 011 234 5678");
}