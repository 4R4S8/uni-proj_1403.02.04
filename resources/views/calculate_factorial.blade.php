<!-- resources/views/calculate_square.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Calculate Factorial</title>
</head>
<body>
<h1>Calculate Factorial</h1>
<form method="post" action="/calculate-factorial">
    @csrf
    <input type="number" name="number" placeholder="Enter a number">
    <button type="submit">Calculate Factorial</button>
</form>

@isset($factorial)
    <p>The Factorial is {{ $factorial }}</p>
@endisset
</body>
</html>
