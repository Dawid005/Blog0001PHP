<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input[type="text"]
        {
            width: 500px;
            height: 500px;
        }

        #container{
            margin-left:auto;
            margin-right:auto;
            text-align:center;
        }
    </style>

</head>
<body>
    <div id="container">
        <form method="post" action="userMakePost.php">
            Right here content of post:
            <br /> 
            <input type="text" name="content">
            <br />
            <input type="submit" value="Send">
        </form>
    </div>
</body>
</html>