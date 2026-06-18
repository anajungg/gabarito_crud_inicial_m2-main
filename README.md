## Nome do Projeto

Sistema CRUD de Usuários

## Objetivo do Sistema

O objetivo deste projeto é desenvolver um sistema simples de cadastro de usuários utilizando PHP e MySQL, permitindo realizar operações básicas como login, cadastro, listagem, edição e exclusão de usuários, aplicando melhorias de organização, validação e segurança.

## Tecnologias Utilizadas
* PHP
* MySQL
* MySQL
* HTML

## Estrutura das Pastas

* /config- Arquivo de conexão com o banco de dados
* /public-  Componentes reutilizáveis (navbar, tabela)
* /style- Arquivos de estilo CSS

### Arquivos principais na raiz:

* index.php (login)
* home.php (dashboard)
* editar.php
* excluir.php
* logout.php

### funcionalidades
* Login de usuários
* Cadastro de novos usuários
* Listagem de usuários cadastrados
* Edição de usuários
* Exclusão de usuários
* Logout do sistema

## Melhorias Implementadas
* Validação de campos obrigatórios
O sistema verifica se todos os campos foram preenchidos antes de enviar o formulário.

* Verificação de usuário duplicado
Impede o cadastro de usuários com o mesmo nome já existente.

* Confirmação de senha
Foi adicionado um campo para confirmar a senha no cadastro.

* Ocultação de senha na listagem
As senhas não são exibidas, sendo substituídas por caracteres mascarados.

* Confirmação de exclusão
Antes de excluir um usuário, o sistema solicita confirmação para evitar exclusões acidentais.

### Instruções para Execução do Sistema
* Criar o banco de dados MySQL:
* CREATE DATABASE sistema_simples;
* Criar a tabela:

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

* Configurar o arquivo de conexão com o banco de dados:
* Verificar usuário, senha e nome do banco no arquivo de conexão.
* Colocar o projeto em um servidor local (XAMPP, WAMP ou similar)
* Acessar no navegador:
http://localhost/seu_projeto