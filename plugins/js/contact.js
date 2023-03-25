const loginName = document.getElementById('name');
const loginPassword = document.getElementById('email');
const loginBtn = document.getElementById('login');

let nameValue ='';
let passwordValue ='';

loginPassword.onblur =()=>{
    passwordValue = loginPassword.value; 
}

loginName.onblur =()=>{
    nameValue = loginName.value;
    if(nameValue == 'nick tshilwane'){
        loginBtn.style.display = 'inline-block';
    }    
}
    
loginBtn.onclick =(e)=>{
    e.preventDefault();
    if(passwordValue  == 'tlotlo@2020' && nameValue == 'nick tshilwane'){
        sessionStorage.setItem('showEdits',passwordValue);
        location.replace('index.php');
    }
}

