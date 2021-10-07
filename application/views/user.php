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
        <title>Document</title>
    </head>
    <body>
    <h1>Create user</h1>
    <form name="createUser">
        <label for="name">
            <input type="text" name="name" placeholder="Name">
        </label>
        <label for="email">
            <input type="email" name="email" placeholder="E-mail">
        </label>
        <label for="password">
            <input type="password" name="password" placeholder="Password">
        </label>
        <label for="submit">
            <input type="submit" name="submit" value="Sign up">
        </label>
    </form>
    <h1>Delete user</h1>
    <form name="deleteUser">
        <label for="name">
            <input type="text" name="name" placeholder="Name">
        </label>
        <label for="password">
            <input type="password" name="password" placeholder="Password">
        </label>
        <label>
            <input type="submit" name="submit" value="Delete">
        </label>
    </form>
    </body>
</html>