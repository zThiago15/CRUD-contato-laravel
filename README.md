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

