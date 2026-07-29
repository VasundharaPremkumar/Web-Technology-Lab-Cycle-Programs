<!DOCTYPE html> <!-- HTML5 document -->
<html>
<head>
<title>Prime Checker</title> <!-- Browser title -->
</head>
<body>

<h2>Prime Checker</h2> <!-- Heading -->

<form method="POST"> <!-- Send data using POST -->
<label>Number</label>
<input type="number" name="Number" required> <!-- Number input -->
<button type="submit">Check</button> <!-- Submit button -->
</form>

<p>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") // Run only after form submission
{
    $num = $_POST["Number"]; // Read entered number

    if($num==0 || $num==1) // Check for 0 or 1
    {
        echo "The $num is neither prime nor composite.";
        return; // Stop execution
    }

    $flag = 0; // Assume number is prime

    for($i=2; $i<=sqrt($num); $i++) // Check divisibility till √num
    {
        if($num % $i == 0) // Divisible?
        {
            $flag = 1; // Mark as not prime
            break; // Exit loop
        }
    }

    if($flag==1) // If divisor found
        echo "The $num is not a prime number";
    else // Otherwise
        echo "The $num is a prime number";
}
?>
</p>

</body>
</html>