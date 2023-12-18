<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="appBg">
        <form name="calculator">
            <input type="textfield" name="ans" value="" autocomplete="off" readonly>
            <br>
            <input type="button" value="7" onclick="document.calculator.ans.value+='7'">
            <input type="button" value="8" onclick="document.calculator.ans.value+='8'">
            <input type="button" value="9" onclick="document.calculator.ans.value+='9'">
            <input type="button" value="+" onclick="document.calculator.ans.value+='+'">
            <br>
            <input type="button" value="4" onclick="document.calculator.ans.value+='4'">
            <input type="button" value="5" onclick="document.calculator.ans.value+='5'">
            <input type="button" value="6" onclick="document.calculator.ans.value+='6'">
            <input type="button" value="-" onclick="document.calculator.ans.value+='-'">
            <br>
            <input type="button" value="1" onclick="document.calculator.ans.value+='1'">
            <input type="button" value="2" onclick="document.calculator.ans.value+='2'">
            <input type="button" value="3" onclick="document.calculator.ans.value+='3'">
            <input type="button" value="X" onclick="document.calculator.ans.value+='*'">
            <br>
            <input type="button" value="0" onclick="document.calculator.ans.value+='0'">
            <input type="reset" value="C">
            <input type="button" value="=" onclick="document.calculator.ans.value=eval(document.calculator.ans.value)">
            <input type="button" value="/" onclick="document.calculator.ans.value+='/'">
        </form>
    </div>
</body>
</html>