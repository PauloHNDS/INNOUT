<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comun.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>In N' Out</title>
</head>
<body>

    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling mr-2"></i>
                <span class="font-weight-light">In</span>
                <span class="font-weight-bold mx-2">N'</span>
                <span class="font-weight-light">Out</span>
                <i class="icofont-runner-alt-1 ml-2"></i>
            </div>
            <div class="card-body">
                <?php include(TEMPLATE_PATH.'/messages.php') ?>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" 
                    class="form-control <?= $exception? 'is-invalid' : '' ?>" autofocus value="<?=$email?>">
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" placeholder="Digite sua senha" 
                    class="form-control <?= $exception? 'is-invalid' : '' ?>" autofocus value="<?=$email?>">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-lg btn-primary">Entrar</button>
            </div>
        </div>
    </form>
</body>
</html>