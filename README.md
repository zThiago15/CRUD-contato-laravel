# CRUD de Contato 📋
[![laravel-badge][laravel-img]][laravel]

[laravel-img]: https://img.shields.io/badge/Laravel-v.4.2.5-purple
[laravel]: https://laravel.com/

## Descrição 📌
Simples CRUD(Create, Read, Update, Delete) de contatos com campos de nome, email, assunto e mensagem. Feito com o framework Laravel e banco de dados MySQL.

## Instalação e configuração ⬇️
### 1. [Composer](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable/) - Gerenciador de pacotes do PHP
* Acesse a página de download do composer e baixe o arquivo executável no seu Sistema Operacional.
* Após o download, execute-o e siga os passos para concluir a instalação.
* Ao concluir, digite o comando *composer* no terminal do seu sistema para verificar se está tudo instalado corretamente.

---

### 2. [XAMPP](https://www.apachefriends.org/pt_br/index.html) - Cria um servidor local em sua máquina e dá acesso a servidores open-source, como MySQL.
* Assim como na instalação do Composer, faço o mesmo processo: vai pra página oficial, clica no botão de download para o seu sistema, baixe o executável e o inicie. 
* Quando abrir, clique *Start* no Apache e no MySQL para iniciar o servidor local e o banco de dados na sua máquina.
⚠️**Importante**⚠️-> Depois de iniciá-los, acesse a URL *localhost/phpmyadmin*, clique na opção **SQL** e cole o seguinte código SQL:
```
CREATE DATABASE bdContato;
USE bdContato;

CREATE TABLE tbContato (
	idContato INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(40),
    email VARCHAR(50),
    assunto VARCHAR(40),
    mensagem VARCHAR(250)
);
```
* Assim, o Laravel conseguirá se conectar a base de dados quando for instalado e iniciado o projeto.

---

### 3. [Laravel](https://laravel.com/) - Framework PHP para desenvolvimento Web, utiliza a arquitetura **MVC(Model-View-Controller)**
* Digite o comando: *composer global require "laravel/installer"*. Ao terminar, feche a aba.

#### Depois de tudo instalado, vamos configurar o sistema adicionando o caminho do composer nas _Variáveis de ambiente_ do seu sistema:

* No Explorador de Arquivos, clique na opção *Exibir* e ative a caixa de *Itens ocultos*.
![image](https://user-images.githubusercontent.com/61299540/122500648-8fa0fa80-cfc9-11eb-8ba1-ef176bd92fdb.png)

* Acesse e depois copie o seguinte caminho no seu sistema: *C:\Users\Seu_usuario\AppData\Roaming\Composer\vendor\bin*
![image](https://user-images.githubusercontent.com/61299540/122500738-b3644080-cfc9-11eb-8aff-28da605a13f7.png)

* Com o caminho copiado, vá para o diretório *Este Computador* e clique com o botão direito em um espaço vazio e acesse Propriedades
![image](https://user-images.githubusercontent.com/61299540/122501130-819fa980-cfca-11eb-9691-f353582aebf9.png)

* Clique em *Configurações avançadas do sistema*->*Variáveis de Ambiente*. Na seção de Variáveis de sistema, selecione o *Path* e clique em Editar, 
* Por fim, clique em *Novo* e cole o caminho copiado.
![image](https://user-images.githubusercontent.com/61299540/122501999-21aa0280-cfcc-11eb-8e88-0e348d0b5b48.png)

* Verifique se o Laravel foi instalado corretamente: abra o terminal e digite *laravel*. Se mostrar a versão e alguns comandos do framework, deu tudo certo.

## Execução ✅
```bash
  #Clone esse repositório 
  git clone https://github.com/zThiago15/CRUD-contato-laravel/
  
  #Acesse o local do projeto instalado pelo terminal e digite o seguinte comando:
  php artisan serve
  
```
### Agora o servidor se inicializou na máquina local. Entre na URL *https://localhost:8000/* para acessar o projeto.

---
Licença MIT ©


# Laravel Documentation 

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

