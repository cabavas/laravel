✅ Gerenciador de Tarefas

Um sistema web para gerenciamento de tarefas pessoais, desenvolvido com Laravel e Tailwind CSS. O projeto tem como objetivo facilitar a organização das atividades diárias, permitindo acompanhar tarefas pendentes, em andamento e concluídas em um único lugar.

📋 Sobre o projeto

O Gerenciador de Tarefas é um projeto desenvolvido para praticar e aplicar conceitos de desenvolvimento web utilizando o framework Laravel.

A aplicação contará com autenticação de usuários, um dashboard com indicadores e funcionalidades para criar, visualizar, editar, concluir e excluir tarefas.

✨ Funcionalidades
Cadastro de usuários
Login e logout
Dashboard com resumo das tarefas
Criação de tarefas
Listagem de tarefas
Edição de tarefas
Exclusão de tarefas
Definição de prioridades
Definição de prazos
Atualização do status das tarefas
Filtro por status e prioridade
Restrição de acesso às tarefas por usuário
🛠️ Tecnologias utilizadas
PHP — linguagem de programação
Laravel — framework backend
Blade — mecanismo de templates
Tailwind CSS — estilização da interface
MySQL ou SQLite — banco de dados
Git e GitHub — versionamento e hospedagem do código
📁 Estrutura do projeto
gerenciador-de-tarefas/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   └── views/
│       ├── auth/
│       ├── layouts/
│       ├── tasks/
│       └── dashboard.blade.php
├── routes/
│   └── web.php
├── .env.example
├── artisan
├── composer.json
└── README.md


Estrutura ilustrativa: os diretórios e arquivos serão adicionados conforme o desenvolvimento do projeto.

⚙️ Como executar o projeto
Pré-requisitos

Antes de começar, instale:

PHP em uma versão compatível com o Laravel utilizado
Composer
Node.js e npm, caso o projeto utilize Vite para compilar os assets
MySQL ou SQLite
1. Clone o repositório
git clone https://github.com/SEU-USUARIO/gerenciador-de-tarefas.git


Entre na pasta:

cd gerenciador-de-tarefas

2. Instale as dependências
composer install

3. Configure o ambiente

Crie o arquivo .env a partir do exemplo:

cp .env.example .env


No Windows PowerShell, você também pode utilizar:

Copy-Item .env.example .env


Gere a chave da aplicação:

php artisan key:generate


Configure no .env o banco de dados que será utilizado.

4. Execute as migrations
php artisan migrate

5. Instale os assets, se necessário

Se o projeto utilizar Vite e Tailwind CSS compilado:

npm install
npm run build

6. Inicie a aplicação
php artisan serve


Acesse no navegador:

http://127.0.0.1:8000

🗺️ Roadmap
Preparar a estrutura inicial do projeto
Criar as telas de cadastro e login
Implementar a autenticação
Desenvolver o dashboard
Criar o CRUD de tarefas
Implementar filtros e prioridades
Validar permissões e acesso aos dados
Melhorar a responsividade da interface
Adicionar testes automatizados
🔐 Segurança

O projeto deverá utilizar os recursos de segurança do Laravel, incluindo proteção CSRF, validação dos dados recebidos, armazenamento seguro de senhas e controle de acesso às tarefas de cada usuário.

O arquivo .env, que contém configurações locais e possíveis credenciais, não deve ser enviado ao GitHub.

🎯 Objetivo de aprendizado

Este projeto tem como objetivo praticar:

Desenvolvimento de aplicações MVC com Laravel
Criação de rotas e controllers
Construção de interfaces com Blade e Tailwind CSS
Operações CRUD com Eloquent ORM
Migrations e relacionamentos entre tabelas
Autenticação e autorização
Validação de formulários
Versionamento de código com Git
📄 Licença

Este projeto ainda não possui uma licença definida. Uma licença poderá ser adicionada futuramente, conforme a finalidade de distribuição do código.

Desenvolvido como projeto de estudo para praticar Laravel e desenvolvimento web.