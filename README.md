## PHP 7.4 Fork
I don't recommend using this. 
I forked this for a project and quickly made it work for a php7.4 project. 
I installed php7.4-bcmath

It works for me but there is no guarantee it will work for you. Use it as you like. Let me know if you have any issue. I don't promise to fix them but I may.  

## Run tests. 
docker-compose run app vendor/bin/phpunit




# [Sqids PHP](https://sqids.org/php)
Ref - https://github.com/sqids/sqids-php

Randomize IDs by providing a custom alphabet:

```php
$sqids = new Sqids($alphabet = 'FxnXM1kBN6cuhsAvjW3Co7l2RePyY8DwaU04Tzt9fHQrqSVKdpimLGIJOgb5ZE');
$id = $sqids->encode([1, 2, 3]); // "B4aajs"
$numbers = $sqids->decode($id); // [1, 2, 3]
```

Prevent specific words from appearing anywhere in the auto-generated IDs:

```php
$sqids = new Sqids($alphabet,$minLength, $blocklist = ['86Rf07']);
$id = $sqids->encode([1, 2, 3]); // "se8ojk"
$numbers = $sqids->decode($id); // [1, 2, 3]
```

## 📝 License
[MIT](LICENSE)
