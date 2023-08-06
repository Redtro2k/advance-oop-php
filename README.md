# advance-oop-php
the commits "first commit" is the "namespace"

#### dependency 
install by composer
```properties
composer dumpautoload
```
then edit the composer.json

```php
"autoload": {
        "psr-4": {
            "Darwin\\Example\\": "src/",
            "Entities\\": "Entities/",
            "Animals\\": "Animals/"
        }
    },
```
