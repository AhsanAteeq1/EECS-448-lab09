function isValidate()
{

  var item1Quantity=document.getElementById("item1Quantity").value;
  var item2Quantity=document.getElementById("item2Quantity").value;
  var item3Quantity=document.getElementById("item3Quantity").value;

  var username=document.getElementById("username").value;
  var password=document.getElementById("password").value;

  var shippingOption1=document.getElementById("shippingOption1");
  var shippingOption2=document.getElementById("shippingOption2");
  var shippingOption3=document.getElementById("shippingOption3");


  if (item1Quantity == '' || item2Quantity == '' || item3Quantity == '' || item1Quantity < 0 || item2Quantity < 0 || item3Quantity < 0)
  {
    alert("Quantities cant be blank or negatives. Please input again.");
    return false;
  }

  if (shippingOption1.checked || shippingOption2.checked || shippingOption3.checked)
  {
    alert("shipping option selected successfully");
  }
  else
  {
    alert("You must pick one of the shipping options. Please input again.");
    return false;
  }



  if (password == '')
  {
    alert("password cant be blank. please input password again.");
    return false;
  }


  var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(username.match(mailFormat))
  {
    return true;
  }
  else
  {
    alert("Invalid email. Please input again.")
    return false;
  }

}

function reset()
{
  var item1Quantity=document.getElementById("item1Quantity").value;
  var item2Quantity=document.getElementById("item2Quantity").value;
  var item3Quantity=document.getElementById("item3Quantity").value;

  var username=document.getElementById("username").value;
  var password=document.getElementById("password").value;

  var shippingOption1=document.getElementById("shippingOption1");
  var shippingOption2=document.getElementById("shippingOption2");
  var shippingOption3=document.getElementById("shippingOption3");


  item1Quantity='';
  item2Quantity="";
  item3Quantity="";
  username="";
  password="";
  shippingOption1="";
  shippingOption2="";
  shippingOption3="";

  alert("Reset Successful");

}
