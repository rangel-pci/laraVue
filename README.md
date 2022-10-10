Studying Vue.js 3 and Laravel integration.<br>
Something i thought was really cool was make Laravel taking full care of API routes and partially of WEB routes, making vue-router take preference over WEB routes.
<br>

<img src="https://github.com/rangel-pci/files/blob/master/laraVue-shot.png" />

## Running the application

```bash
$ git clone https://github.com/rangel-pci/laraVue
$ cd laraVue
$ composer install
```

## Rename the .env.example file and enter the database and email client configuration
```bash
$ php artisan key:generate
$ php artisan storage:link
$ php artisan migrate
$ php artisan serve
```

## Technologies
Laravel 8<br>
VueJS 3<br>
MySQL

Laravel:
<ul>
<li>Input data validation -> FormRequest</li>
<li>Response data formatting -> JsonResource/ResourceCollection</li>
<li>Mail -> Mailable & markdown</li>
<li>Mailtrap.io to send emails</li>
<li>Translation package for validations -> lucascudo/laravel-pt-BR-localization</li>
</ul>

VueJS:
<ul>
<li>Vue 3</li>
<li>composition API</li>
<li>vue-router</li>
<li>axios</li>
</ul>
