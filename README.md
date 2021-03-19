
Buranko
=======

Inspired by Arakawa Youji's poem _Gallery_ (ギャラリー). It grabs some tweets according to certain keywords and displays them rocking as if on a swing. Created by me (Ale Grilli) as part of my application for the New Media program at the Tokyo University of the Arts (which I have since graduated from).

See it in action at: http://www.agj.cl/files/interactive/buranko/ . More about it [on my blog][blog].

Technically it's currently (2021, as of this writing) pretty outmoded. It uses [RequireJS][require], [Vue.js][vue], some [FRP][frp] with [Bacon][bacon], and PHP.

[require]: https://requirejs.org/
[vue]: https://vuejs.org/
[frp]: https://en.wikipedia.org/wiki/Functional_reactive_programming
[bacon]: https://baconjs.github.io/
[blog]: http://blog.agj.cl/tag/buranko/


## To run it

Add a `php\twitterkey.php` file with the following contents, replacing the appropriate places with your own Twitter API v1.1 key and secret.

```php
<?php
$twitterKey = array(
	'key'    => 'TWITTER API KEY',
	'secret' => 'TWITTER API SECRET',
);
```

With [Bower][bower] and [Composer][composer] installed, install their dependencies on the command line running the following commands:

```sh
bower install
composer install
```

After that, serve the folder on a system with PHP available, and open `index.html`.

[bower]: https://bower.io/#install-bower
[composer]: https://getcomposer.org/doc/00-intro.md


## License

The MIT License (MIT)

Copyright (c) 2015 Ale Grilli

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
