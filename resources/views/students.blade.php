<!DOCTYPE html>
<html>
<head>
    <title>Excel Import</title>
</head>
<body>

<h2>Import Excel File</h2>

@if(session('success'))
    <p style="color:green">
        {{ session('success') }}
    </p>
@endif

<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="file" name="file">

    <button type="submit">Import</button>

</form>

</body>
</html>