## Agenda de Contatos

Aplicativo didático desenvolvido em PHP com base no Lumen framework.
<img  src="http://s24.postimg.org/cn30ra2lh/captura.jpg">


## Instalação

### Pré requisitos do ambiente

* [PHP 5.6](https://secure.php.net)
* [NodeJS](https://nodejs.org)
* [npm](https://www.npmjs.com)
* [Bower](http://bower.io)
* [Composer](https://getcomposer.org)

### Instalar pacotes e dependências

```sh
  $ composer install

  $ npm install

  $ bower install

  $ gulp

```

### Configurar o ambiente

```sh
  $ cp .env.example .env

  $ php artisan migrate:refresh --seed
```

### Rodar o aplicativo

```sh
  $ php artisan serve
```

### Abrir no browser

[http://localhost:8000](http://localhost:8000)


### Observação

* Para fins didáticos, utilizamos um banco de dados SQLite.
* Não alterar o arquivo `\storage\database.sqlite` original.

