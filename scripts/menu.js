var modal = document.getElementById('myModal');
var span = document.getElementsByClassName("close")[0];

function modalFunc(name,price,image,item,description) {
    modal.style.display = "block";
    document.getElementById("modal-item-name").innerHTML ='<h1>'.concat(name, '</h1>');
    document.getElementById("modal-item-price").innerHTML = '<h2>'.concat(('$'.concat(price)),'</h2>');
    document.getElementById("modal-picture").innerHTML = '<img src="'.concat(image, '">');  
    document.getElementById("modal-item-description").innerHTML ="<h4>".concat(description,"</h4>");
    document.getElementById("itemId").value = item; 
    document.getElementById("itemId").style.display = "none";
   
}  

function checkQuantity()
{
    if (document.getElementById("quantity").value < 1)
    {
    alert ("Quantity cannot be less than 1")
    document.getElementById("quantity").value = 1;
    }
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}