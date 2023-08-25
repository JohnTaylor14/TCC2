<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Cus.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <div class="title">
        <h1>Filmoteca</h1>
        <p>O ponto de encontro dos verdadeiros amantes do cinema!</p>
    </div>    
    <div id="content">
            <table>
                <tr>
                    <th>
                        <h2>Login</h2>
                    </th>
                    <th>
                        <h2>Cadastro</h2>
                        <p>Caso não tenha conta, realize seu cadastro abaixo!</p>
                    </th>
                </tr>
                <tr>
                    <td>
                        <form id="login-form" method="post" action="Login_form.php">
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Nome de usuário" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Senha" required class="form-control">
                            </div>
                            <input type="submit" value="Entrar" class="btn btn-primary">
                        </form>
                    </td>
                    <td>
                        <form id="signup-form" method="post" action="Cadastro_form.php">
                            <div class="form-group">
                                <input type="text" id="name" name="name" placeholder="Nome completo" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Email" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="tel" id="telefone" name="telefone" placeholder="Telefone" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="date" id="datadenascimento" name="datadenascimento" placeholder="Data de Nascimento" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="username" name="username" placeholder="Nome de usuário" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" placeholder="Senha" required class="form-control">
                            </div>
                            <input type="submit" value="Cadastrar" class="btn btn-primary">
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>