<img src="https://github.com/rangel-pci/files/blob/master/laraVue-shot.png" />

# Rodando a aplicação

```bash
$ git clone https://github.com/rangel-pci/laraVue
$ cd laraVue
$ composer install
```
2. Renomeie o arquivo .env.example e informe a configuração do banco de dados e cliente de email
```bash
$ php artisan key:generate
$ php artisan storage:link
$ php artisan migrate
$ php artisan serve
```

# Utilizado
Laravel v8.83.23 (PHP v7.4.29)<br>
Vue.js v3.2.36<br>
MySQL v15.1

Laravel:<br>
Validação dos dados de entrada -> FormRequest<br>
Formatação dos dados de retorno -> JsonResource/ResourceCollection<br>
Envio de email -> Mailable com markdown<br>
Pacote de tradução para as validações -> lucascudo/laravel-pt-BR-localization<br>
<br>
Utilizei https://mailtrap.io para o envio de email

Vue.Js:<br>
Vue 3, composition API, vue-router e axios
