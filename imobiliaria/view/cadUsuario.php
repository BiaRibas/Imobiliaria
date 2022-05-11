<?php
if (isset($_POST['btnSalvar'])) {
    require_once 'controller/UsuarioController.php';
    call_user_func(array('UsuarioController', 'salvar'));
}
//header('Location: index.php?action=listar');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Cadastro de Usuario</title>
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Cadastro de Usuario
                    </span>
                </div>
                <form name="cadUsuario" id="cadUsuario" action="index.php?action=listar" method="post" class="login100-form validate-form">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Login: </span>
                        <input class="input100" type="text" name="login" id="login" placeholder="Enter username" 
                        value="<?php echo isset($usuario)?$usuario->getLogin():'' ?> "/>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Senha:</span>
                        <input class="input100" type="password" name="senha" id="senha" placeholder="Enter password"
                        value="<?php echo isset($usuario)?$usuario->getSenha():'' ?> "/>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Confirmação da Senha:</span>
                        <input class="input100" type="password" name="senha2" id="senha2" placeholder="Enter password"
                        value="<?php echo isset($usuario)?$usuario->getSenha():'' ?> "/>
                        <span class="focus-input100"></span>
                    </div>
                    <br />
                    <select style="margin-top:10px;border-radius: 5px;" class="select1" name="permissao" id="permissao">
                        <option value="0">***SELECT***</option>
                        <option value="A" <?php echo isset($usuario) && $usuario->getPermissao()=='A'?'selected':''?>>Administrador</option>
                        <option value="C" <?php echo isset($usuario) && $usuario->getPermissao()=='C '?'selected':''?>>Comum</option>
                    </select>
                    <br>
                    <div style="margin-top:25%;" class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="btnSalvar" id="btnSalvar">
                           Enviar
                        </button>
                    </div>
                    <input type="hidden" name="id" id="id" value="<?php echo isset($usuario)?$usuario->getId():'';?>" />
                </form>
</body>

</html>