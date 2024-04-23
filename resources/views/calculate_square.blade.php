<!-- resources/views/calculate_square.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Calculate Square</title>
</head>
<body>
<h1>Calculate Square</h1>
<form method="post" action="/calculate-square">
    @csrf
    <input type="number" name="number" placeholder="Enter a number">
    <button type="submit">Calculate Square</button>
</form>

@isset($square)
    <p>The square is {{ $square }}</p>
@endisset
</body>
</html>
