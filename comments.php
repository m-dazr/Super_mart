<?php
if(isset($_POST['submit'])){
  $comment=$_POST['comment'];
  $q="insert into ads (comments) values ('$comment')";
mysql_query($q);
} 
$q="select comments  from ads";
 $result=mysql_query($q);
 
while($row=mysql_fetch_array($result)){
 //list the  comments 
 echo $row[' comments ']."<br />";
}
?>
<html>
<body>
<form method="Post" action=" comments.php">
<textarea name="comment" rows=30 cols=10></textarea>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>