<html>
<head>
<?php 
$qno=1;
echo $qno;
?>

</head>
<body color="red"> 
hello
<span id="serverResponse"> </span>
<script> 
var b="<?php echo $qno ?>";
//document.write(b);
 function find(){
const xhr=new XMLHttpRequest();
 sear= b;
//document.write(sear);
len=sear.length;
if(len>0)
{	
xhr.onload=function(){
const serverResponse=document.getElementById("serverResponse");
serverResponse.innerHTML=this.responseText;

};
xhr.open("POST","check.php");
xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xhr.send("name="+sear);
document.write(sear);
}
else
{
	document.getElementById("serverResponse").innerHTML="";
}
}setInterval('find()', 2000);

			
	
</script>
</body>
</html>
