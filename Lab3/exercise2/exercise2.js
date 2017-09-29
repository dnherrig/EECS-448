function Click(pass)
{
    var slides = new Array("CS.jpg", "FT.jpg" , "GK.jpg", "MF.jpg", "TC.jpg");
    var check = pass;
    var last6 = (document.getElementById("myImgId").src.slice(-6));
    var adressString = document.getElementById("myImgId").src.substring(0, document.getElementById("myImgId").src.length-6);
    
    if(check == false)
    {
        //alert("NEXT!");
        if (last6 == slides[0])
        {
                document.getElementById("myImgId").src = adressString + slides[1];
        }
        else if (last6 == slides[1])
        {
                document.getElementById("myImgId").src = adressString + slides[2];
        }
        else if (last6 == slides[2])
        {
                document.getElementById("myImgId").src = adressString + slides[3];
        }
        else if (last6 == slides[3])
        {
                document.getElementById("myImgId").src = adressString + slides[4];
        }
        else if (last6 == slides[4])
        {
                document.getElementById("myImgId").src = adressString + slides[0];
        }
        
    }
    else if(check == true)
    {
        //alert("PREV!");
        if (last6 == slides[4])
        {
                document.getElementById("myImgId").src = adressString + slides[3];
        }
        else if (last6 == slides[3])
        {
                document.getElementById("myImgId").src = adressString + slides[2];
        }
        else if (last6 == slides[2])
        {
                document.getElementById("myImgId").src = adressString + slides[1];
        }
        else if (last6 == slides[1])
        {
                document.getElementById("myImgId").src = adressString + slides[0];
        }
        else if (last6 == slides[0])
        {
                document.getElementById("myImgId").src = adressString + slides[4];
        }
    }
    else
    {
        alert("ERROR!");
    }
    
}