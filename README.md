# getLocalProject
Projeto para coletar dados de localização


# Passo-a-passo para fazer o projeto funcionar:

1 - Ter instalado o docker e o docker-compose na maquina (no Windows normalmente o docker-compose é 
instalado junto do docker).

2 - Baixar o projeto do github no seguinte endereço: https://github.com/psico/getLocalProject

3 - Com o projeto baixado é preciso gerar um token no github (algumas bibliotecas do laravel exigem essa 
chave), para gerar essa chave entre no endereço https://github.com/settings/tokens e click em "Generate New 
Token" (é necessário loggar no github)

4 - Com o token gerado em mãos, abra o arquivo que está em getLocalProject\Dockerfile

5 - No arquivo aberto na linha 20 subistitua o COLOQUE_O_TOKEN_AQUI pelo token gerado no github, feito isso 
pode salvar e fechar o arquivo.

6 - Agora abra o prompt/bash no diretorio do projeto baixado e execute esse comando: docker-compose up

7 - Agora basta acessar o endereço: http://localhost:5001/


# ROTAS / ENDPOINTS

## Trazer todos as localizações inseridas
GET http://localhost:5001/api/localizacao

## Busca uma localização pelo id
GET http://localhost:5001/api/localizacao/{id}

## Inserir uma localização
POST http://localhost:5001/api/localizacao?latitude={numero}&longitude={numero}&user_id={numero}







<!--
6 - Agora abra o prompt/bash no diretorio do projeto baixado e execute esse comando(selecione o ponto no final também): docker build -t image-get-local-project .

7 - Ainda no prompt/bash execute esse outro comando: docker run -p 5001:5001 image-get-local-project

docker run -p 5001:5001 -d --name devtest --mount source=myvol2,target=. image-get-local-project
-->