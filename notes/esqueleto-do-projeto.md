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
- criar pasta `src` e `tests`
- criar arquivo `phpunit.xml`
