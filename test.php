<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=number] {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }

        select {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }
    </style>
</head>
<body>
<br/>
<h3>Simple Calculator</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="number" name="search1" placeholder="Nhập so 1"/><br>
    <select name="cal">
        <option value="/">Chia</option>
        <option value="*">Nhan</option>
        <option value="+">Cong</option>
        <option value="-">Tru</option>
    </select><br>
    <input type="number" name="search2" placeholder="Nhập so 2"/><br>
    <input type="submit" id="submit" value="Calculate"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["search1"];
    $number2 = $_POST["search2"];
    $cal = $_POST["cal"];
    echo eval ('return ' . $number1 . $cal . $number2 . ";");


}
?>
</body>
</html>