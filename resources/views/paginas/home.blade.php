<x-layout title="Agendar Tarefas">

    <div class="container">

        <div class="row">
            <div class="col-4">
                <form action="/home/criar" method="POST">
                    @csrf <!-- valida o formulario -->
                    <label for="title" class="form-label">Título:</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" require><br>

                    <label for="description" class="form-label">Descrição:</label>
                    <textarea name="descricao" id="descricao" class="form-control" require></textarea><br>

                    <button type="submit" class="btn btn-primary">Criar tarefa</button>
                </form>

            </div>

            <div class="col-8">
            @csrf
                <div class="container">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dados as $id)
                            <tr>
                                <th>
                                    <td scope="row">{{$id->id}}</td>
                                    <td>{{$id->titulo}}</td>
                                    <td>{{$id->descricao}}</td>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</x-layout>