function check(){
    if(document.getElementById('password').value==document.getElementById('cpassword').value){
        document.getElementById('submit').disabled = false;
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Password Matches';

    }
    else{
        document.getElementById('submit').disabled = true;
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Passwords Do Not Match';

    }
}