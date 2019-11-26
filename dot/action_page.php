<!--<html>
<form align="right" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
<style>
    .logoutLblPos{

position:fixed;
right:10px;
top:5px;
}
</style>
</html> -->

<html>
<div class="navigation">
  
	<a class="button" href="logout.php">

  
  <div class="logout">LOGOUT</div>

	</a>
  
</div>
</html>

<style>
    .navigation {
  width: 100%;
  background-color: black;
}

.logout {
  font-size: .8em;
  font-family: 'Oswald', sans-serif;
	position: relative;
  right: -18px;
  bottom: -4px;
  overflow: hidden;
  letter-spacing: 3px;
  opacity: 0;
  transition: opacity .45s;
  -webkit-transition: opacity .35s;
  
}

.button {
	text-decoration: none;
	float: right;
  padding: 12px;
  margin: 15px;
  color: black;
  width: 25px;
  background-color: #53e3d4;
  transition: width .35s;
  -webkit-transition: width .35s;
  overflow: hidden
}

a:hover {
  width: 100px;
}

a:hover .logout{
  opacity: .9;
}

a {
  text-decoration: none;
}
</style>