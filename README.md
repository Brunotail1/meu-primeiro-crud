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
