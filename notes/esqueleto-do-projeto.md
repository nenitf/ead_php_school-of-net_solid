# composer
```
composer init
```
- yes em tudo e na hr de pesquisar dev-dependencies digitar phpunit/phpunit
- add autoload no composer.json conforme abaixo:
```
"autoload": {
    "psr-4": {
        "App\\Solid\\": "src"
    }
}
```
> Obs: A cada mudança no auoload é necessário usar o comando composer du para atualizar
- criar pasta `src` e `tests`
- criar arquivo `phpunit.xml`
