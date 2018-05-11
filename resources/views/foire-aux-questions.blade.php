<!DOCTYPE html>
<html>

<head>

    <title>Foire aux Questions</title>

</head>

<body>

<h1>Hello <?php echo $name; ?> </h1>

<ul>
    @foreach ($tasks as $task)

        <li>{{ $task }}</li>

    @endforeach()
</ul>

</body>

</html>