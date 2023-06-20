<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>Aplicação API</h1>
  <p>Esta API foi desenvolvida utilizando a versão 8.2 do PHP e o framework Laravel na versão mais atual. Para executar a aplicação, é necessário ter instalado na máquina o PHP 8.2 obrigatoriamente, juntamente com o Docker.</p>
  <h2>Passo a passo para executar a aplicação</h2>
  <ol>
    <li>Certifique-se de ter o Docker instalado em sua máquina.</li>
    <li>Instale o laradock na raiz do projeto o link do git está aqui <a href="https://github.com/laradock/laradock".></li>
    <li>No diretório laradock, abra o terminal e execute o seguinte comando:</li>
  </ol>
  <pre><code>docker-compose up -d mysql phpmyadmin</code></pre>
  <p>Esse comando irá subir o banco de dados da aplicação no Docker. Aguarde até que o banco de dados esteja online.</p>
  <ol start="3">
    <li>Após o banco de dados estar online, execute o seguinte comando no terminal:</li>
  </ol>
  <pre><code>php artisan migrate</code></pre>
  <p>Esse comando será responsável por criar todas as tabelas utilizadas na aplicação.</p>
  <ol start="4">
    <li>Em seguida, execute o comando abaixo para popular a aplicação com um usuário fictício que será utilizado no processo de login, uma vez que a funcionalidade de criação de usuário não foi implementada neste momento:</li>
  </ol>
  <pre><code>php artisan db:seed</code></pre>
  <p>Parabéns! Agora a aplicação está pronta para ser executada.</p>
  <h2>Documentação da API</h2>
  <p>A documentação da API pode ser encontrada no arquivo <a href="https://documenter.getpostman.com/view/15706775/2s93sjVUtX">API_DOC.md</a>.</p>
   <h2>Executar a API</h2>
  <p>Para consumir a API, execute o seguinte comando no terminal:</p>
  <pre><code>php artisan serve</code></pre>
</body>
</html>
