function confirmSubmit()
{
      if(confirm("are you sure you want to submit the order? \nYou cannot change the order and personal data beyond this page")==true){
      window.location.href='./php/sendOrder.php';
      }
      else {
      }

}  