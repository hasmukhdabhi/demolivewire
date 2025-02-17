<!-- resources/views/products.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    @livewireStyles
</head>
<body>

    <h2>Product Management System</h2>

    @livewire('crud-form') <!-- Livewire component call -->

    @livewireScripts
</body>
</html>
