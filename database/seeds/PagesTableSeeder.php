<?php

/**
 * database/seeds/PagesTableSeeder.php
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Terms and Conditions',
                'slug' => 'terms-and-conditions',
                'content' => '# H1 Header

## H2 Header

### H3 Header

**Bold Text**

*Italic text*

Unordered List:

* Item One
* Item Two

Ordered List:

1. Item One
2. Item Two

Table:

First Header  | Second Header
------------- | -------------
Content Cell  | Content Cell
Content Cell  | Content Cell

[Example link](https://google.com)

![Example Image](https://empress.19peaches.com/storage/img/placeholder.jpg)

> Quoted Text

`inline code`

Code Block w/language:

```php
public function store(CreatePageRequest $request)
{
    Page::create($request->all());

    flash(\'Page saved successfully.\', \'success\');

    return redirect(route(\'admin.pages.index\'));
}
```

hr:

----------',
                'created_at' => '2017-02-20 06:07:37',
                'updated_at' => '2017-03-01 08:37:06',
            ),
        ));        
    }
}
