<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>login</title>
</head>
<body style="background-color: #280747">

    <!-- <div class="container">
        @foreach ($dados as $dado)
            <li class="list-group-item">{{$dado->nome}}</li>
            <li class="list-group-item">{{$dado->telefone}}</li>
        <br><br>
        @endforeach
    </div> -->

    <div class="position-absolute top-50 start-50 translate-middle" >
        <div class="container-lg p-5 rounded-5 text-white shadow-lg"  style="background-color: #8B2B98; width: 1170px; background-image: url("/astro_login.jpeg");>  
            <div class="row" >
                <div class="col">
                    <div class="container-sm rounded-4 p-3 text-center shadow-lg " style="background-color: #7735A9;" >
                        <form action="/cadastrar/salvar" method="POST">
                                @csrf <!-- Valida o formulario -->
                            <br>
                            <h1 class="float-start mb-5 ms-3" >Cadastro</h1>

                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome" requered><br>

                            <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu email" required><br>
                    
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Password" required>
                    
                            <button type="submit" class="btn btn-primary m-3 shadow" style="width: 200px ;background-color: #E95AC2; border: none">Enviar</button><br>
                            <a href="/login" class="fw-semibold" style="color: #fefefe">Login</a>
                        </form>
                    </div>
                </div>
                <div class="col-8 p-5 ps-4" >
                    <h2>Registro Rápido: Sua Agenda de Tarefas Personalizada!</h2><br><br>

                    <p>Vamos começar a jornada da produtividade juntos! Preencha os campos abaixo para criar sua conta na nossa Agenda de Tarefas. Aqui, você terá o poder de planejar, organizar e conquistar seus objetivos diários. Não perca tempo, inscreva-se agora e transforme sua rotina em algo mais eficiente e satisfatório. Bem-vindo à sua nova maneira de se manter no controle!</p>
    
                </div>
            </div>
        </div>
    </div>
</body>
</html>