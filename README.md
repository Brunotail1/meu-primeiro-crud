# Sistema de Gerenciamento de Clientes (CRUD)

Este projeto é uma aplicação web desenvolvida em **PHP** utilizando o framework **Laravel**. O objetivo principal é fornecer um sistema completo para o gerenciamento de clientes, permitindo cadastrar, visualizar, atualizar e excluir registros (CRUD), além de integrar com uma API externa para preenchimento automático de endereço.

## 🚀 Funcionalidades

- **Listagem de Clientes:** Visualização de todos os clientes cadastrados em uma tabela.
- **Cadastro:** Formulário para inserção de novos clientes.
- **Edição:** Atualização dos dados de clientes existentes.
- **Exclusão:** Remoção de registros do banco de dados.
- **Busca de CEP:** Integração com a API **ViaCEP**. Ao digitar um CEP válido, os campos de endereço (Rua, Bairro, Cidade, UF) são preenchidos automaticamente.

## 🛠️ Tecnologias Utilizadas

- **PHP 8.2+**
- **Laravel Framework**
- **MySQL** (Banco de Dados)
- **Bootstrap 5** (Frontend e Estilização)
- **JavaScript/Fetch API** (Consumo de API no Frontend)

## 📦 Pré-requisitos

Para rodar este projeto localmente, você precisará ter instalado em sua máquina:

- [PHP](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/)
- [Git](https://git-scm.com/)
- Um banco de dados MySQL (via XAMPP, MySQL Workbench ou Docker)

## 🔧 Como Rodar o Projeto

Siga o passo a passo abaixo para configurar o ambiente de desenvolvimento:

### 1. Clone o repositório
Abra o terminal e rode o comando:
```bash
git clone [https://github.com/Brunotail1/meu-primeiro-crud.git](https://github.com/Brunotail1/meu-primeiro-crud.git)

Entre na pasta do projeto:

Bash
cd meu-primeiro-crud
2. Instale as dependências
Baixe as bibliotecas do Laravel via Composer:

Bash
composer install
3. Configure o ambiente
Crie o arquivo de configuração do sistema copiando o exemplo:

Bash
# No Windows
copy .env.example .env

# No Linux/Mac
cp .env.example .env
Gere a chave de criptografia da aplicação:

Bash
php artisan key:generate
4. Configure o Banco de Dados
Abra o arquivo .env que você acabou de criar.

Encontre a seção de banco de dados e configure conforme o seu ambiente local (exemplo abaixo):

Ini, TOML
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco_que_voce_criou
DB_USERNAME=root
DB_PASSWORD=
Lembre-se de criar um banco de dados vazio no seu MySQL com o nome definido acima.

5. Crie as tabelas (Migrations)
Execute o comando para criar a estrutura do banco de dados:

Bash
php artisan migrate
6. Inicie o Servidor
Tudo pronto! Agora é só rodar o servidor local:

Bash
php artisan serve
Acesse o projeto no seu navegador em: http://localhost:8000/clientes

Desenvolvido por Bruno Wozniak como parte de um desafio técnico de desenvolvimento web.
