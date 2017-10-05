

 

<html>
<head>
<style>
body {
    background-color: #6666ff;
}
</style>
</head>
<body>    


<p>Welcome, Daniel</p>
<b1>
<h4>
Photos
<h1>
<br>

<br>
<h5>48 People liked this</h5>
<br>
<br>
<img src=""/>
<img src=""/>

<form action="#" method="POST">

  <center><input type="text" name="inputText" style="width:500px;height:50px;"/>
  <input type="submit" name="SubmitButton" value="post" style="width:80px;height:50px;"/></center>
</form>    
</body>
</html>
<?php    
if(isset($_POST['SubmitButton'])){
  $input = $_POST['inputText']; 
  $message = "Daniel John: ".$input;
  echo $message;
}    
?>