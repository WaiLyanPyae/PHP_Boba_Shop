function checkName() {
    var name = document.getElementById('name');
    name.value = trim(name.value)
        if (/^[A-Za-z][A-Za-z\s]*$/.test(name.value)==false)
        {
            alert('name invalid');
            document.getElementById("name").value = "";
            return false;
        }
}

function checkEmail() {
    var email = document.getElementById('email');
    email.value = trim(email.value)
    
    if (/^[\w.-]+@([\w]+\.){1,3}[\w]{2,3}$/.test(email.value)==false) 
    {
        alert('email invalid');
        document.getElementById("email").value= "";
        return false;
    }
}

function trim(x) {
    return x.replace(/^\s+|\s+$/gm,'');
}
    

    
