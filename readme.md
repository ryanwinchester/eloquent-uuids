# Laravel Eloquent Uuids

To use it just install

```
composer require ryanwinchester/eloquent-uuids
```

then in you model you can do:

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SevenShores\Uuids\Uuids;

class Post extends Model
{
    use Uuids;

    public $incrementing = false;

    // . . .
}
```


Don't forget, in your migration for your model, for `id` field you should use:

```php
$table->uuid('id')->primary();
```

#### Note:
**I know I've seen a similar package to this in the past, but I don't remember where,
and don't care to look for it, because I'd rather just make my own for my own use.**
