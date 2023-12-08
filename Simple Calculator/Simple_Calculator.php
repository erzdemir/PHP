<?php
// Check if the calculate button is clicked
if (isset($_POST['calculate'])) {
// Get the first number from the form and convert it to an integer
    $num1 = (int) $_POST['num1'];
// Get the second number from the form and convert it to an integer
    $num2 = (int) $_POST['num2'];
// Get the operator from the form
    $operator = $_POST['operator'];
// Initialize result to zero
    $result = 0;

// Switch case based on the operator
    switch ($operator) {
// Add operation
        case "add":
            $result = $num1 + $num2;
            break;
// Subtract operation
        case "minus":
            $result = $num1 - $num2;
            break;
// Multiply operation
        case "times":
            $result = $num1 * $num2;
            break;
// Divide operation
        case "divide":
            $result = $num1 / $num2;
            $result = round($result, 2);
            break;
// Modulo operation
        case "mod":
            $result = $num1 % $num2;
            break;
// Exponentiation operation
        case "expo":
            $result = $num1 ** $num2;
            break;
// Default case when no operator matches
        default:
// Initialize result to zero
            $result = 0;
    }
}

?>



<html>

<body>

<form action="" method="POST">

Number 1: <input type="number" name="num1">

<select name="operator">
<option value="add">+</option>
<option value="minus">-</option>
<option value="times">*</option>
<option value="divide">/</option>
<option value="mod">%</option>
<option value="expo">**</option>
</select>

Number 2: <input type="number" name="num2">

<input type="submit" name="calculate" value="Calculate"/>
</form>

<?php
// Output the result
echo "Result is: " . $result;
?>
</body>


</html>
