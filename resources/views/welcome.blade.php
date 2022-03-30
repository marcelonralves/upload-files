<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="api/user" enctype="multipart/form-data">
    <label for="name_label">Nome:</label>
        <input type="text" name="name" id="name_label">

    <label for="email_label">Email:</label>
        <input type="email" name="email" id="email_label">

    <label for="password_label">Senha:</label>
        <input type="password" name="password" id="password_label">
    <label for="phone_label">Telefone:</label>
        <input type="text" name="phone" id="phone_label">

    <label for="image_label">Foto:</label>
        <input type="file" name="image" id="image_label">
    <button type="submit">Enviar</button>
</form>

</body>
</html>
