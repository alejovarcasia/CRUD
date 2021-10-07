<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <title>Sign up</title>
    </head>
    <body>
    <h1>Create user</h1>
    <form>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Full name" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Email</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="E-mail" required>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Password</label>
      <input type="password" class="form-control" id="validationDefault01" placeholder="Password" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault03">Country</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="Country" required>
    </div>
    <div>
        <input class="btn btn-primary" type="submit" value="Submit">
    </div>
    </body>
</html>