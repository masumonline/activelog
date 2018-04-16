# Activelog

Activelog is a activiti log creator and viewer.

  - It create log on every controller you want
  - use any where in your controller
  - Show log report

### Installation

```composer require activelava/activelog:dev-master```

Then
Add this line to your config/app.php file. 
``` 
in Provider Section
activelava\activelog\ActivelogServiceProvider::class,
in aliases section
'Activelog' => App\Helpers\activelog::class, 
```

Now run
```
php artisan migrate
```
a new Table will create in your database.
Then Run
```
php artisan vendor:publish
```

It will publish the helper and model and view in your project

``` 
List of Published Item
Copied Directory [/vendor/activelava/activelog/src/Model] To [/App]
Copied Directory [/vendor/activelava/activelog/src/Helpers] To [/App/Helpers]
Copied Directory [/vendor/activelava/activelog/src/Views] To [/resources/views/vendor/activelava/activelog]
```

There is an example controller in app/Http/Controllers folder name LogController.php

open it and check how its Done.

License
----
MIT