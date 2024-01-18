function checkFirstName() {
    var name = document.getElementById('firstName');
    name.value = trim(name.value)
    if (/^[A-Za-z][A-Za-z\s]*$/.test(name.value) == false) {
        alert('name invalid');
        document.getElementById("firstName").value = "";
        return false;
    }
}

function checkEmail() {
    var email = document.getElementById('email');
    email.value = trim(email.value)
    if (/^[\w.-]+@([\w]+\.){1,3}[\w]{2,3}$/.test(email.value) == false) {
        alert('Email invalid');
        document.getElementById("email").value = "";
        return false;
    }
}

function checkPhone() {
    var phone = document.getElementById('phone');
    phone.value = trim(phone.value)
    if (/^(+\d{2,3})?\d{8,12}$/.test(phone.value) == false) {
        alert('Phone number invalid');
        document.getElementById("phone").value = "";
        return false;
    }
}

function checkAddress() {
    var address = document.getElementById('address');
    address.value = trim(address.value)
    if (/^(\d{1,3}.)?.+\s/.test(address.value) == false) {
        alert('Address is invalid');
        document.getElementById("address").value = "";
        return false;
    }
}

function checkZIP() {
    var zip = document.getElementById('zip');
    zip.value = trim(zip.value)
    if (/^[0-9]{6}$/.test(zip.value) == false) {
        alert('Postal code is invalid');
        document.getElementById("zip").value = "";
        return false;
    }
}

function trim(x) {
    return x.replace(/^\s+|\s+$/gm, '');
}