function checkPrice(id)
{   
price_id="price"+id;
className="go"+id;
    if (document.getElementById(price_id).value <= 0)
    {
    alert ("Price cannot be less than or equal to 0.")
    document.getElementById(price_id).value = 0.1;
    
    }
    document.getElementById(className).style.display = "inline-block";
}

function updateDate(className) 
{
    document.getElementById(className).style.display = "inline-block";
} 