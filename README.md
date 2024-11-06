<p align="center"> <a href="https://laravel.com" target="_blank"> <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"> </a> </p> <p align="center"> <a href="https://github.com/laravel/framework/actions"> <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"> </a> <a href="https://packagist.org/packages/laravel/framework"> <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"> </a> <a href="https://packagist.org/packages/laravel/framework"> <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"> </a> <a href="https://packagist.org/packages/laravel/framework"> <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"> </a> </p>

Sobre o Projeto

Este projeto Laravel demonstra o uso de Resources e Collections para organizar e formatar dados no backend. No frontend, utilizamos jQuery/AJAX para buscar esses dados e exibi-los dinamicamente, criando uma interface de usuário responsiva e interativa.
Funcionalidades Principais

    Uso de Resources e Collections: No backend, os dados são estruturados com Resources e Collections, permitindo personalizar como os dados dos modelos são formatados antes de serem enviados para o frontend.
    Integração com jQuery/AJAX: No frontend, jQuery/AJAX é usado para fazer requisições assíncronas, buscando dados JSON do backend sem recarregar a página.
    Exibição Dinâmica de Dados: A interface exibe informações, como listas de alunos, que são populadas dinamicamente com os dados da API.

Tecnologias Utilizadas

    Laravel: Framework backend para criar a API e organizar os dados com Resources e Collections.
    jQuery/AJAX: Para realizar chamadas assíncronas ao backend e atualizar a interface sem recarregar a página.

Exemplo de Implementação

Para exibir a lista de alunos de uma turma, o backend retorna os dados formatados pelo AlunoResource. No frontend, os dados são recuperados usando jQuery/AJAX e exibidos em uma lista:

$.ajax({
    url: '/api/turma/alunos',  // Exemplo de rota para obter alunos
    method: 'GET',
    dataType: 'json',
    success: function(response) {
        $.each(response.data, function (index, aluno) { 
            let alunoItem = `<li>${aluno.NomeAluno} ${aluno.SobreNome}</li>`;
            $('#lista-alunos').append(alunoItem);
        });
    },
    error: function(error) {
        console.log("Erro ao obter dados:", error);
    }
});


Como Contribuir

Obrigado por considerar contribuir para este projeto! Por favor, siga as diretrizes de contribuição do Laravel, disponíveis na documentação oficial.
Código de Conduta

Para garantir um ambiente acolhedor para todos, revise e siga o Código de Conduta.
Licença

Este projeto é open-source, licenciado sob a licença MIT.
