<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Inicio</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
	<form action="index.php" method="post" target="_blank">

  		<p>
    		<input type="search" name="search-bar" placeholder="Tags">
    		<input type="submit" value="Buscar">
		</p>
	</form>
  </body>
</html>
