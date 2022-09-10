# Rodando a aplicação

bash`
    $ git clone https://github.com/rangel-pci/laraVueCrud
    $ cd laraVueCrud
    $ composer require
    $ php artisan migrate
    $ php artisan storage:link
    $ php artisan serve
`

# O Que Foi Utilizado
Laravel v8.83.23 (PHP v7.4.29) | Vue.js v3.2.36 | MySQL v15.1

Algumas classes do Laravel como:
Validação dos dados de entrada -> FormRequest
Formatação dos dados de retorno -> JsonResource/ResourceCollection
Envio de email -> Mailable e Markdown
Pacote de tradução para as validações -> lucascudo/laravel-pt-BR-localization

Utilizei o https://mailtrap.io para envio de email
