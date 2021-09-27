# multilingual-support
An easy library to create multilingual support Telegram Bots

## How to Use it?

```php
<?php
use okayinc;

$l = new language('language', 'default');
echo $l->get('index');
```
Where:
* language is the current language to use, a file returning the associative index must exist, such as en.php, es.php, fr.php
* default is the default language incase the index of the main language doesnt exists, by default is english

### Example
```php
$l = new language('en');
echo $l->get('index');
```
