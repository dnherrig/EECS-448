function buttonPress()
{
    if (document.getElementById("password1").value.length >=8)
    {
        if(document.getElementById("password1").value == document.getElementById("password2").value )
        {
            alert("Passwords match!");
        }
        else
        {
            alert("Passwords don't match!");
        }
    }
    else
    {
        alert("Passwords must be at least 8 characters!");
    }
    
}