<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        input[type="number"], button {
            padding: 8px;
            margin: 5px 0;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br><br>
        
        <button type="submit" name="operation" value="add">Add (+)</button>
        <button type="submit" name="operation" value="subtract">Subtract (-)</button>
        <button type="submit" name="operation" value="multiply">Multiply (*)</button>
        <button type="submit" name="operation" value="divide">Divide (/)</button>
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = 0;

            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    echo "Result: $num1 + $num2 = $result";
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    echo "Result: $num1 - $num2 = $result";
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    echo "Result: $num1 * $num2 = $result";
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "Result: $num1 / $num2 = $result";
                    } else {
                        echo "Error: Cannot divide by zero!";
                    }
                    break;
                default:
                    echo "Please select an operation";
            }
        }
        ?>
    </div>
</body>
</html>