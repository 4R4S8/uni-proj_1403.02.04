<!-- resources/views/calculator/calculate-numbers.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="{{ url('/calculate-numbers') }}" method="POST">
        @csrf <!-- CSRF token for security -->
        <input type="number" name="number1" required placeholder="Enter first number">
        <input type="number" name="number2" required placeholder="Enter second number">
        
        <!-- Buttons for operations -->
        <button type="submit" name="operator" value="add">Add</button>
        <button type="submit" name="operator" value="subtract">Subtract</button>
        <button type="submit" name="operator" value="multiply">Multiply</button>
        <button type="submit" name="operator" value="divide">Divide</button>
    </form>
</body>
</html>
