# Symfony4
PHP STORM

Comandos Utilizados pelo Composer(terminal da IDE)
	dentro da pasta do projeto
		composer create-project symfony/skeleton nome-do-projeto

Configuração da IDE para projeto em Symfone 4

Settings>Plugins> Search "Symfony"
	install Drupal Symfony Bridge
			PHP Annotations
			SensioLabsInsight
			Shopware
			Symfony Plugin		
		
Após a Instalação entrar novamente em Settings, digitar "Symfony" no 
campo de busca

Selecionar Symfony
	Habilitar "Enable Plugin for this project"
	
Web Directory
		Colocar a pasta "public" do projeto


Em seguida digite "Composer" na Barra de Busca do Settings
	Habilitar campos
		Add packages as libraries
		Synchronize IDE Settings with composer.json
		
No Campo -> Path Composer.json
			colocar o arquivo composer.json que está na raiz do projeto
			
Para instalar servidor próprio do Symfony
	digitar no terminal -> composer req server
	
	para subir o servidor digite o comando no terminal
		php bin/console server:run
		
Para auxiliar na criação de rotas para o framework
instalar o pacote annotations com o comando no terminal

	composer req annotations
	
Para auxiliar na criação de Views instalar o pacote TWIG
com o comando no terminal
	
	composer req twig
	
para a criação de um banco de dados instalar o pacote DOCTRINE
para instalação utilize o comando em terminal

	composer req doctrine
	
	após isso configurar o banco no arquivo .env
	
	na linha DATABASE_URL=mysql://{NOME DO BANDO}:{SENHA SE HOUVER}@127.0.0.1:3306/{NOME DO BANCO}
	
	Para criar um banco utilize o camando em terminal	
		php bin/console doctrine:database:create
		
	
	Para criar Entidades será necessário o pacote MAKER que pode ser instalado 
	com o camando pelo terminal 
		composer req maker
		
	após instalação , para se criar uma entidade use o camando via terminal
		php bin/console make:entity {nome da tabela}
		
	para criar campos na tabela
		php bin/console doctrine:migrations:migrate
		
