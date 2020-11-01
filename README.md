## João Gabriel dos Santos Rodrigues
[![Github Badge](https://img.shields.io/badge/-Github-000?style=flat-square&logo=Github&logoColor=white&link=)](https://github.com/psico)
[![Linkedin Badge](https://img.shields.io/badge/-LinkedIn-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/jo%C3%A3o-gabriel-dos-santos-rodrigues-34378323/?locale=en_US)](https://www.linkedin.com/in/jo%C3%A3o-gabriel-dos-santos-rodrigues-34378323/?locale=en_US)



## getLocalProject
Projeto para coletar dados de localização



## Tecnlogias usadas:
 - Docker e DockerComposer - Criação do container com a aplicação
 - Git e GitHub - Versionamento
 - PHP - Linguagem de programação
 - Composer - Instalar repositórios externos
 - Laravel - Framework
 - Model - Eloquent
 - Migrations - Criar base de dados ao iniciar a aplicação
 - Sqlite* - Base de dados
 - PHPUnit - Teste automatizados
 - Artisan - CLI do Laravel



## Passo-a-passo para fazer o projeto funcionar:

1 - Ter instalado o docker e o docker-compose na maquina (no Windows normalmente o docker-compose é 
instalado junto do docker).

2 - Baixar o projeto do github no seguinte endereço: https://github.com/psico/getLocalProject

3 - Com o projeto baixado é preciso gerar um token no github (algumas bibliotecas do laravel exigem essa 
chave), para gerar essa chave entre no endereço https://github.com/settings/tokens e click em "Generate New 
Token" (é necessário loggar no github)

4 - Com o token gerado em mãos, abra o arquivo que está em getLocalProject\Dockerfile

5 - No arquivo aberto, na linha 20 subistitua o COLOQUE_O_TOKEN_AQUI pelo token gerado no github, feito isso 
pode salvar e fechar o arquivo.

6 - Agora abra o prompt/bash no diretorio do projeto baixado e execute esse comando: docker-compose up

7 - E se tudo deu certo basta acessar o endereço e aparecera a documentação do Laravel se estiver tudo certo: http://localhost:5001/



## ROTAS / ENDPOINTS

**Trazer todos as localizações inseridas**

GET http://localhost:5001/api/localizacao


**Busca uma localização pelo id** 

GET http://localhost:5001/api/localizacao/{id}


**Inserir uma localização** 

POST http://localhost:5001/api/localizacao?latitude={numero}&longitude={numero}&user_id={numero}


## TESTES AUTOMATIZADOS

docker ps
getlocalproject_php
docker exec -it f6cf938274ad bash

/var/www/html/getLocalProject#
php vendor/bin/phpunit
php artisan test


<!--
6 - Agora abra o prompt/bash no diretorio do projeto baixado e execute esse comando(selecione o ponto no final também): docker build -t image-get-local-project .

7 - Ainda no prompt/bash execute esse outro comando: docker run -p 5001:5001 image-get-local-project

docker run -p 5001:5001 -d --name devtest --mount source=myvol2,target=. image-get-local-project
-->
