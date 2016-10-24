<!DOCTYPE html>
<html>
<head>
    <title>Online Calculator</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    #row1{
        margin-left: 400px;
        margin-top: 50px;
    }
    #row2{
        margin: 30px 0px 0px 50px;
    }
    #row3{
        margin: 30px 0px 0px 50px;
    }
    #row4{
        margin: 30px 0px 0px 50px;
    }

    </style>
</head>
<body>
    <div class="container">
       <div class="row" id="row1">
            <form action= "receive.php"  method="post">
            <div class="row" id="row2">
                First number: <br>
                <input type="number" id="firstnumber" name="firstnumber">
                <br>
                Second number:<br>
                <input type="number" id="secondnumber" name="secondnumber"> 
                <br>
            </div>
            <div class="row" id="row3">
                <input type="radio" name="calculation" value="add" checked> Add<br>
                <input type="radio" name="calculation" value="subtract"> Subtract<br>
                <input type="radio" name="calculation" value="multiply"> Multiply<br>
                <input type="radio" name="calculation" value="divide"> Divide<br>
            </div>
            <div class="row" id="row4">
                <input type="submit" value="Submit">
                <input type="reset" value="Cancel">  
            </div>           
            </form>
       </div>
    </div>
</body>
</html>