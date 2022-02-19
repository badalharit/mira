# MIRA

It is the utility to recursively move all the files, from N-Level sub-directories to a folder, with a folder-level sorting of the media type.

## Installation

You just need [PHP](https://www.php.net/) to use this utility.

## Configuration
Remember to configure the `index.php` file, to mention the folder name before executing the utility.

```php
<?php
/**
 * Configurations Start
 */
$fromPath = 'D:\SOME_RANDOM_DIRECTORY_WITH_MIXED_FILES_AND_SUB_DIRECTORIES';
$new_path = 'D:\SOME_RANDOM_DIRECTORY_WITH_MIXED_FILES_AND_SUB_DIRECTORIES'.'/';
$wantToDebug = false;
/**
 * Configurations End
 */
```
## Usage

```bash
php index.php
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
[MIT](https://choosealicense.com/licenses/mit/) License

Copyright (c) 2022 badalharit

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES, OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
