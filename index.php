<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Details</title>
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body>
    <h3>Login Details</h3>
    <form id="login" method="post" action="#">
        <div class="imgContainer">
            <img src="./iamges/login.png" height="150" width="150">
        </div>
        <div class="container">

            <label><b>User Name</b></label>
            <input type="text" placeholder="User Name" name="uname" required id="username">

            <label><b>Email ID</b></label>
            <input type="email" placeholder="Email ID" name="email" required id="email">

            <label><b>Password</b></label>
            <input type="password" placeholder="Password" name="pwd" required id="pwd">
            <input type="submit" value="Next">
        </div>
    </form>
    <script>
        $('#login').submit(function(e) {
            e.preventDefault();
            $.post('./insetToDb.php', $("#login").serialize()).done(function(data) {
                window.location.href = "./personalDetails.php";
            });
        });
    </script>


</body>

</html>