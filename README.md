# 🎼 Aplicação Symfony 4 — Arquitetura Backend & ORM

Repositório voltado para a demonstração e estudo prático do **Symfony 4**, explorando a construção de rotas, injeção de dependências, mapeamento objeto-relacional (ORM) e gestão de migrações com Doctrine.

---

## 🚀 Tecnologias Utilizadas

* **Linguagem:** PHP (7.x+)
* **Framework:** [Symfony 4](https://symfony.com/)
* **ORM:** [Doctrine ORM](https://www.doctrine-project.org/)
* **Database Migrations:** Doctrine Migrations Bundle
* **Template Engine:** Twig
* **Gestor de Dependências:** Composer

---

## 🛠️ Conceitos e Funcionalidades Implementadas

* **Estrutura MVC:** Organização modular separando controladores, entidades de domínio e renderização visual com Twig.
* **Rotas e Mapeamento:** Configuração de rotas baseada em ficheiros de configuração YAML.
* **Injeção de Dependências:** Declaração e resolução automática de serviços através do `services.yaml`.
* **Persistência de Dados:** Mapeamento de entidades com Doctrine e aplicação de migrações estruturadas para versionamento do banco de dados.

---

## 📂 Estrutura do Projeto

```text
projetoSymfony4/
├── bin/                 # Executáveis do Symfony (console)
├── config/              # Ficheiros de configuração (routes, packages, services)
├── public/              # Ponto de entrada público da aplicação (index.php)
├── src/
│   ├── Controller/      # Controladores da aplicação (ex: ExemploController.php)
│   ├── Entity/          # Entidades do Doctrine (ex: TABSymfony.php)
│   ├── Migrations/      # Ficheiros de migração da base de dados
│   └── Repository/      # Repositórios do Doctrine para consultas personalizadas
└── templates/           # Views em Twig (base.html.twig)
```

🔧 Como Executar o Projeto
Pré-requisitos
PHP 7.3+ (com extensões pdo, pdo_mysql, mbstring ativas)

Composer
Servidor MySQL/MariaDB (ou SQLite para testes)

Passos para Instalação
1. Clonar o repositório e entrar no diretório:

```bash
git clone [https://github.com/felipeisraelsantos/Symfony4.git](https://github.com/felipeisraelsantos/Symfony4.git)
cd Symfony4/projetoSymfony4
```

2. Instalar as dependências via Composer:

```Bash
composer install
```
3. Configurar as Variáveis de Ambiente:
Duplique ou edite o ficheiro .env na raiz do projeto e ajuste as credenciais do banco de dados na variável DATABASE_URL:

Snippet de código
```
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name
```
4. Executar as Migrações do Banco de Dados:
```Bash
php bin/console doctrine:migrations:migrate
```
5.Iniciar o Servidor de Desenvolvimento:
```Bash
php -S localhost:8000 -t public/
```
A aplicação estará acessível em http://localhost:8000.

📄 Licença
Este projeto é de uso livre para fins de estudo e demonstração de conhecimentos no ecossistema Symfony.
