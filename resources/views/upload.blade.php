<!DOCTYPE html>
<html>
<head>
    <title>Upload de Arquivo</title>
</head>
<body>
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="arquivo">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>