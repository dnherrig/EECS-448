function update()
{
    //alert("Updated!");
    var redBorder = document.getElementById("redValueBorder").value;
    var greenBorder = document.getElementById("greenValueBorder").value;
    var blueBorder = document.getElementById("blueValueBorder").value;
    var widthBorder = document.getElementById("widthBorder").value;
    var redBackground = document.getElementById("redValueBackground").value;
    var greenBackground = document.getElementById("greenValueBackground").value;
    var blueBackground = document.getElementById("blueValueBackground").value;
    
    document.getElementById("toChange").style.backgroundColor = "rgb(" + redBackground + "," + greenBackground + "," + blueBackground + ")";
    document.getElementById("toChange").style.borderColor = "rgb(" + redBorder + "," + greenBorder + "," + blueBorder + ")";
    document.getElementById("toChange").style.borderWidth = widthBorder + "px";

}