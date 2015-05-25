

<script type="text/javascript">
<!--
//preload images
var image1=new Image()
image1.src="slider/1.gif"
var image2=new Image()
image2.src="slider/3.gif"
var image3=new Image()
image3.src="slider/2.gif"
//-->
</script>


<a href="javascript:slidelink()">
<img src="images/1.jpg" name="slide" border="0" width="750" height="200" /></a>
<script type="text/javascript">
<!--
var step=1
var whichimage=1
function slideit(){
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
whichimage=step
if (step<3)
step++
else
step=1
setTimeout("slideit()",4000)
}
slideit()
function slidelink(){
if (whichimage==1)
window.location="index.php"
else if (whichimage==2)
window.location="register.php"
else if (whichimage==3)
window.location="products.php"
}
//-->
</script>

