<?php
session_start();
?>
<style>
* {
    margin: 0;
    padding: 0;
}

body {
    background-color: #1111;
}
</style>
<html>

<head>
    <title>
        Admin login form
    </title>
    <style>
    body {
        background-color: antiquewhite;
        font-family: Verdana;
        text-align: center;
    }

    /* Form container */
    .form-container {
        width: 400px;
        margin: 0 auto;
        padding: 10px;
        background-color: #f8f8f8;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    /* Form title */
    .form-title {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }

    /* Form labels */
    label {
        display: block;
        margin-bottom: 8px;
        font-size: 20px;
        color: #555;
    }

    /* Form input fields */
    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
        background-color: lavender;
        border: 1px solid #777;
        border-radius: 2px;
        font-family: inherit;
        font-size: 21px;
        display: block;
        width: 100%;
        margin-top: 10px;
        margin-bottom: 5px;
    }

    button {
        background-color: yellowgreen;
        border: 1px solid #777;
        border-radius: 2px;
        font-family: inherit;
        font-size: 21px;
        display: block;
        width: 100%;
        margin-top: 50px;
        margin-bottom: 20px;
    }

    button:hover {
        background-color: #0056b3;
    }

    form {
        background-color: #fff;
        max-width: 500px;
        margin: 50px auto;
        padding: 30px 20px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    }
    </style>
</head>

<body>
    <center>
        <h1>Admin login</h1><br><br>
        <form method="POST" action="#">
            <label>username</label>
            <input type="text" name="user"><br><br>
            <label>password</label>
            <input type="password" name="pass"><br><br>
            <button type= "submit" name="login">Login</button>

        </form>

    </center>
</body>

</html>