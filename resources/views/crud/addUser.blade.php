<!DOCTYPE html>
<html lang="pt">
<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
}
.header{
    display: flex;
    justify-content: space-between;
    padding: 10px;
}

</style>
<head>
    <meta charset="UTF-8">

    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>

<body>
<div class="header">
    <div class="header-left">
        <a href="dashboard" class="btn btn-outline-primary">Voltar</a>
    </div>
    <div class="header-right">
        <a href="logout" class="btn btn-outline-danger">Logout</a>
    </div>
</div>
<h4 class="center" style="color:blue;">Criar Utilizador Administração</h4>    
<div class="center">
<form  action="{{ route('register-user') }}" class="form_gray" method="post">
    @csrf
    <table>
        <tr>
            <td><label for="name">Nome:</label></td>
            <td><input type="text" name="name" id="name"></td>
        <tr>

        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="text" name="email" id="email"></td>
        <tr>

        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" name="password" id="password"></td>
        <tr>
    </table>
    
    <span>@error('email') {{$message}} <br> @enderror</span>
    <span>@error('username') {{$message}} <br> @enderror</span>
    <span>@error('password') {{$message}} <br> @enderror</span>
    
    </br>

    <button style="text-align:center;" class="btn btn-outline-success" type="submit" id="btn_blue">Criar</button>

</form>
</div>


                

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
</html>