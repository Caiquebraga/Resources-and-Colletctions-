<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- CSS do Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!-- JavaScript do Toastr (deve vir após o jQuery) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <title>Document</title>
</head>
<body>

    <h1>Turmas</h1>
    <div>
        @foreach ($turmas as $turma)
        <ul class="list-group">
            <li id="turma-{{ $turma->turPk }}"
                class="list-group-item list-group-item-action cursor-pointer"
                data-id="{{ $turma->turPk }}"    
                data-nome="{{ $turma->turNome }}">
                <strong>{{ $turma->turNome }}</strong>
            </li>
        </ul>   
        @endforeach
    </div>

    <div class="modal fade" id="modal-aluno" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="showmodal">
                    <h5>Alunos da Classe <span id="nome-turma"></span></h5>
                    <ol id="lista-alunos">
                       
                    </ol>
                    <hr>
                    <div id="form-editar-alunos" style="display: none;">
                        <h5>Editar Aluno</h5>
                        <form id="form-aluno">
                            <input type="hidden" id="aluno-id">
                            <div class="form-group">
                                <label for="nome-aluno">Nome</label>
                                <input type="text" class="form-control" id="nome-aluno">
                            </div>
                            <div class="form-group">
                                <label for="obreNome-aluno">Sobre Nome</label>
                                <input type="text" class="form-control" id="sobreNome-aluno">
                            </div>
                            <button type="button" class="btn btn-primary" id="save-aluno">Salvar</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- Botão Adicionar Participante que abre outro modal -->
                    <button type="button" id="adcNewAlu" class="btn btn-secondary" data-toggle="modal" data-target="#modal-newAlunos">
                        Adicionar Participante
                    </button>
                    <!-- Botão Fechar -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    


    <script>
        $(document).on('click', '.list-group-item', function(){
            const turmaId = $(this).data('id');
            const turmaNome = $(this).data('nome');
    
            console.log('Turma ID capturado:', turmaId);
            console.log('Turma Nome capturado:', turmaNome);
    
            $.ajax({
                method: "GET",
                url: "{{ route('busAluno') }}",
                dataType: "json",
                data: { idTurma: turmaId },
                success: function(response) {
                    // console.log(response);

                    $('#lista-alunos').empty();

                    $('#nome-turma').text(turmaNome);

                    $.each(response.data, function (index, aluno) { 
                        let alunoItem = `<li>${aluno.Nome} ${aluno.SobreNome }</li>`;
                        
                        $('#lista-alunos').append(alunoItem);
                    });

                    $('#modal-aluno').modal('show');

                },
                error: function(xhr, status, error) {
                    console.error('Erro na requisição:', error);
                }
            });
        });
    </script>

</body>
</html>

