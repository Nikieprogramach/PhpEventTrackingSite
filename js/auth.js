function LogIn(){
    const email = document.getElementById('email-input').value;
    const password = document.getElementById('password-input').value;
    console.log(email + "," + password)
    // sql logic here
    if(!email.includes("@") || email == "" || password == ""){
        ThrowAuthError(1)
    }
}
function SignUp(){
    const name = document.getElementById('name-input').value;
    const email = document.getElementById('email-input').value;
    const password = document.getElementById('password-input').value;
    console.log(name + ", " + email + ", " + password)
    // sql logic
}

/*
    errType = 1 => Wrong email or password
    errType = 2 => User with that email already exists
    errType = 3 => Other unidentified error
*/
function ThrowAuthError(errType){
    switch(errType){
        case 1:
            document.getElementById('error-text-message').innerHTML = "Wrong email or password!"
            break
        case 2:
            document.getElementById('error-text-message').innerHTML = "Email already in use!"
            break
        case 3:
            document.getElementById('error-text-message').innerHTML = "Something went wrong!"
            break
    }

}