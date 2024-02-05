<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <style>
        body{
            background-image: url('/img/imgLogin.jpeg');
            background-color: #280747;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <title>login</title>
</head>
<body>

    <div class="position-absolute top-50 start-50 translate-middle" >
    
        <div class="container-lg p-5 rounded-5 text-white shadow-lg"  style="background-color: #8B2B98 ; width: 1170px;"> 
         
            <div class="row">
                <div class="col-8 p-5 ps-4" >
                    <h2>Bem Vindo</h2><br><br>

                    <p>Bem-vindo à nossa Agenda de Tarefas! Estamos empolgados por você estar aqui para simplificar e organizar suas atividades diárias. Prepare-se para uma experiência incrível de produtividade. Digite suas credenciais e mergulhe em um mundo mais organizado e eficiente. Estamos aqui para tornar cada dia mais leve e suas tarefas mais gerenciáveis. Boa jornada!</p>
    
                </div>
                <div class="col">
                    <div class="container-sm rounded-4 p-3 text-center shadow-lg " style="background-color: #7735A9;" >
                        <form action="" method="POST">
                            @csrf <!-- Valida o formulario -->
                        <br>
                        <h1 class="float-end mb-5 me-5" >Login</h1>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu email" required><br>
                
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Password" required>
                
                        <button type="submit" class="btn btn-primary m-3 shadow" style="width: 200px ;background-color: #E95AC2; border: none">Enviar</button><br>
                        <a href="/cadastrar" class="fw-semibold" style="color: #fefefe">Cadastre-se</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>