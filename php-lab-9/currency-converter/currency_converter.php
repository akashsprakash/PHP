<!DOCTYPE html>
<html>
<head>
    <title>Currency converter</title>
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
        margin-top: 50px;
    }
    #row3{
        margin-top: 20px;
    }
    #row4{
        margin-top: 20px;
    }    
    #row5{
        margin-top: 20px;
    } 
    #firstnumber{
        width:200px;
    }   
    #dropdown{
        width:200px;
    } 
    #submit{
        width: 99px;
        color: green;
    }
    #cancel{
        width: 99px;
        color: red;
    }

    </style>
</head>
<body>
    <div class="container">
       <div class="row" id="row1">
          <form action= " "  method="post">
            <!-- Input box -->
            <div class="row" id="row2">
                Amount: <br>
                <input type="number" id="firstnumber" name="firstnumber">
                <br>
            </div>
            <!-- Dropdown list for currenct selecting -->
            <div class="row" id="row3">
                <select name="format" id="dropdown">
                    <option value="usd">US Dollar</option>
                    <option value="euro">Euro</option>
                    <option value="pound">British Pound</option>
                    <option value="australiandollar">Australian Dollar</option>
                    <option value="canadiandollar">Canadian Dollar</option>
                    <option value="singaporedollar">Singapore Dollar</option>
                    <option value="franc">Swiss Franc</option>
                    <option value="ringgit">Malaysian Ringgit</option>
                    <option value="yen">Japanese Yen</option>
                    <option value="yuan">Chinese Yuan Renminbi</option>
                </select>
            </div>
            <!-- Sumbit and Reset button row -->
            <div class="row" id="row4">
                <input type="submit" value="Submit" id="submit" name="submit">
                <input type="reset" value="Cancel" id="cancel">  
            </div>           
            </form>
            <div class="row" id="row5">
                <!-- php condition check for not empty -->
                    <?php
                        if(isset($_POST['submit']))
                        {
                            $number1= $_POST['firstnumber']; 
                            $currency= $_POST['format'];
                            if (empty($number1))
                            {
                    ?>
                    <!-- Warning alert box for null input -->
                            <div class="alert alert-warning">
                            <strong>Warning!</strong> Input value null.
                            </div>
                            <!-- Currency conversion -->
                    <?php
                            }
                            else
                            {
                                if ($currency == "usd") {
                                    $result= $number1 * 63.495763;
                                    $currency_selected= "US Dollar";
                                }
                                if ($currency == "euro") {
                                    $result= $number1 * 72.343691;
                                    $currency_selected= "Euro";
                                }
                                if ($currency == "pound") {
                                    $result= $number1 * 100.926470;
                                    $currency_selected= "British Pound";
                                }
                                if ($currency == "australiandollar") {
                                    $result= $number1 * 49.470005;
                                    $currency_selected= "Australian Dollar";
                                }
                                if ($currency == "canadiandollar") {
                                    $result= $number1 * 51.840784;
                                    $currency_selected= "Canadian Dollar";
                                }
                                if ($currency == "singaporedollar") {
                                    $result= $number1 * 47.714950;
                                    $currency_selected= "Singapore Dollar";
                                }
                                if ($currency == "franc") {
                                    $result= $number1 * 69.188719;
                                    $currency_selected= "Swiss Franc";
                                }
                                if ($currency == "ringgit") {
                                    $result= $number1 * 17.020105;
                                    $currency_selected= "Malaysian Ringgit";
                                }
                                if ($currency == "yen") {
                                    $result= $number1 * 0.517365;
                                    $currency_selected= "Japanese Yen";
                                }
                                if ($currency == "yuan") {
                                    $result= $number1 * 10.254612;
                                    $currency_selected= "Chinese Yuan Renminbi";
                                } 
                                $answer= round($result,2); 
                                echo "Selected currency: $currency_selected";
                            }
                        }
                    ?>
                    <br>
                    <?php 
                        echo "INR: $answer";
                    ?>
            </div>
        </div>
    </div>
</body>
</html>
