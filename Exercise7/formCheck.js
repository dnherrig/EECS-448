function buttonPress()
{
    if (document.getElementById("userName").value == "" || document.getElementById("password").value == "" )
    {
      alert("You must fill both fields!");
    }
    else if (document.getElementById("userName").value.search("@") == -1)
    {
      alert("User names must include an @!");
    }
    else if (document.getElementById("userName").value.search(".com") == -1)
    {
      alert("User names must include a .com!");
    }
    else
    {
      let products = document.getElementById("products");
      show(products);

      let logIn = document.getElementById("logIn");
      hide(logIn);

      let shipping = document.getElementById("shipping");
      show(shipping);

    }

}

function shipCheck()
{
  let shippinCheck = false;

  let buttonChecks = document.getElementsByName("Shipping");

  for(let i = 0; i < buttonChecks.length ; i++)
  {
    if(buttonChecks[i].checked)
    {
      shippinCheck = true;
    }
  }

  if(shippinCheck == false && document.getElementById("trashBagQuant").value != "" && document.getElementById("cardBoardBoxQuant").value != "" && document.getElementById("storageTubQuant").value != "")
  {
    alert("You must pick a shiping option");
    return false;
  }
  else if(shippinCheck == false && document.getElementById("trashBagQuant").value != "" && document.getElementById("storageTubQuant").value != "")
  {
    alert("How do you want those bags & tubs shipped? (You must pick a shiping option)");
    return false;
  }
  else if(shippinCheck == false && document.getElementById("cardBoardBoxQuant").value != "" && document.getElementById("storageTubQuant").value != "")
  {
    alert("How do you want those boxes & tubs shipped? (You must pick a shiping option)");
    return false;
  }
  else if(shippinCheck == false && document.getElementById("cardBoardBoxQuant").value != "" && document.getElementById("trashBagQuant").value != "" )
  {
    alert("How do you want those boxes & bags shipped? (You must pick a shiping option)");
    return false;
  }
  else if(shippinCheck == false && document.getElementById("trashBagQuant").value != "")
  {
    alert("How do you want those bags shipped? (You must pick a shiping option)");
    return false;
  }
  else if(shippinCheck == false && document.getElementById("cardBoardBoxQuant").value != "")
  {
    alert("How do you want those boxes shipped? (You must pick a shiping option)");
    return false;
  }
  else if(shippinCheck == false && document.getElementById("storageTubQuant").value != "")
  {
    alert("How do you want those tubs shipped? (You must pick a shiping option)");
    return false;
  }


  else if(shippinCheck == true && document.getElementById("trashBagQuant").value == "" && document.getElementById("cardBoardBoxQuant").value == "" && document.getElementById("storageTubQuant").value == "")
  {
    alert("We cant ship nothing!");
    return false;
  }
  else if(shippinCheck == false && document.getElementById("trashBagQuant").value == "" && document.getElementById("cardBoardBoxQuant").value == "" && document.getElementById("storageTubQuant").value == "")
  {
    alert("You have to pick something to submit an order!!");
    return false;
  }
  else
  {
    return true;
  }
}

function Reset()
{
  //document.shippingForm.reset();
  location.reload();
}

function hide(x)
{
  if (x.style.display == "none")
  {
      x.style.display = "block";
  }
  else
  {
      x.style.display = "none";
  }
}

function show(x)
{
  if (x.style.display == "block")
  {
      x.style.display = "none";
  }
  else
  {
      x.style.display = "block";
  }
}
