<script>
function showCustomer(str)
{
var xmlhttp;    
if (str=='')
  {
  document.getElementById("demo2").innerHTML="";
  //alert("l");
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }

xmlhttp.onreadystatechange=function()
  {//alert("2");
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {//alert("3");
    document.getElementById("demo2").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","databse.php?nav="+str,true);
xmlhttp.send();
}
</script>