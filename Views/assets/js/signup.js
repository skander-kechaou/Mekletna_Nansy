const form=document.getElementById('signup');
const firstname=document.getElementById('fnameClient');
const lastname=document.getElementById('lnameClient');
const email=document.getElementById('mailClient');
const address=document.getElementById('addressClient');
const dob=document.getElementById('bdayClient');
const password=document.getElementById('pwdClient');
const password2=document.getElementById('pwd');


//Show input error message

function showError(input,message){
    const formControl=input.parentElement;
    formControl.className='form-control error';
    const small=formControl.querySelector('small');
    small.innerText=message;
}

function showSuccess(input){
    const formControl=input.parentElement;
    formControl.className='form-control success';
    
}

//Email

function isValidEmail(email)
{
    const re= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}





form.addEventListener('submit',function(e){
    e.preventDefault();

    if(firstname.value===''){
        showError(firstname,'First name is required');
    }
    else{
        showSuccess(firstname);
    }
    if(lastname.value===''){
        showError(lastname,'Last name is required');
    }
    else{
        showSuccess(lastname);
    }
    if(email.value===''){
        showError(email,'Email is required');
    }else if(!isValidEmail(email.value)){
        showError(email,'Email is not valid');
    }
    else{
        showSuccess(email);
    }

    if(password.value===''){
        showError(password,'Password is required');
    }
    else{
        showSuccess(password);
    }
    if (address.value == '') {
        showError(address, 'Address is required');
    } else if (address.value.length < 5) {
        showError(address, 'You have to fill your full address')
    }
    else {
        showSuccess(address);
    }
    
});