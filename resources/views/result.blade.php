<!-- resources/views/calculator/result.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
</head>
<body>
    <h1>Calculation Result</h1>
    <p>The result of the calculation is: {{ $result }}</p>
    <a href="{{ url('/calculate-numbers') }}">Go Back</a>
</body>
</html>
