## Descrição do projeto

Neste projeto, foi desenvolvida uma API utilizando Laravel e uma SPA com VueJS. 

## Para rodar o projeto (Instale o Docker e Docker-compose)

Subir o projeto

``make up``

Executar as migrations p/ criar as tabelas no BD

``make migrate``

Executar o seed p/ carregar os dados no BD

``make seed``

## Para parar a execução do projeto

Apenas parar os containers docker

``make stop``

Parar e remover os containers docker

``make down`` 

## Links

[Documentação do Laravel](https://laravel.com/docs/8.x)

[Documentação do VueJS](https://br.vuejs.org/v2/guide/)

[Documentação do Docker](https://docs.docker.com/get-started/)

[Documentação do Docker-Compose](https://docs.docker.com/compose/)
