<!DOCTYPE html>
<html>

<head>
    <title>Create Account</title>
    <style>
    /* Reset default styles */
    body {
        background-color: antiquewhite;
        font-family: Verdana;
        text-align: center;
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
    .container {
        width: 400px;
        margin: 0 auto;
        padding: 10px;
        background-color: #f8f8f8;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        background-color: #fff;
        max-width: 500px;
        margin: 50px auto;
        padding: 30px 20px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
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
        background-color:lavender;
        border: 1px solid #777;
        border-radius: 2px;
        font-family: inherit;
        font-size: 21px;
        display: block;
        width: 100%;
        margin-top: 10px;
        margin-bottom: 5px;
    }

    /* Form submit button */
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border: none;
        border-radius: 3px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    /* Form submit button hover effect */
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Create Account</h1>
        <form id="createAccountForm" action="user_insert.php" method="post">
        <label>username</label>
            <input type="text" name="user"><br><br>
            <label>password</label>
            <input type="password" name="pass"><br><br>
            <label>email</label>
            <input type="email" name="mail"><br><br>
            <label>telephone</label>
            <input type="text" name="tel"><br><br>
            <button type="submit" name="submit">Create Account</button>
        </form>
    </div>
</body>

</html>