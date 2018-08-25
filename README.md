#PDF Parser In Laravel

## Description 

This simple app returns strings that are inbetween two words from the uploaded PDF file.

## Installation

Clone this repository to your web server.

After cloning, in the project directory run:

```composer install```

Duplicate ```.env.example``` and rename it ```.env```

Then run:

```php artisan key:generateand```.  

## Usage

Open App\Http\Controllers\UploadFileController.php, in <b>get_texts</b> function, in line
``` $test1 = $this::get_form_text(" ".$text, "BeforeString", "AfterString");```
 repalce the "BeforeString" with the word just before the text you want to be returned, and "AfterString" with the word just after the text you want to be returned from the PDF. 

For example
 ```$order_id = $this::get_form_text(" ".$text, "Ord er ID :", "To ta l V eh ic le s");```

Don't forget to adjust the ecchoed varieble. 

Example:
```echo '<b>Order ID: </b>'.$order_id```

Open the  project in browser as follows, (suppose your project name is pdf_parser), "yourdomain/pdf_parser/public". Upload the pdf 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
