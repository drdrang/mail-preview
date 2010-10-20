A PHP script and style file for generating rendered HTML from Markdown for pasting into mail messages. I use it instead of WYSIWYG editing in Rich Text mode because I'm so used to working in Markdown.

I run this from TextMate using the Mail Preview command:

<img class="ss" src="http://www.leancrew.com/all-this/images2010/tm-mail-preview.png" />

the text of the command is

    php ~/mail-preview/mail-preview.php > ~/mail-preview/mail-preview.html
    open ~/mail-preview/mail-preview.html

When invoked, this command passes the Markdown in the current document to the `mail-preview.php` script and generates a new `mail-preview.html` file, which is then opened in the default browser.

I then copy the text from the browser and paste it into either Mail.app or GMail's Compose field.

**Note:**  
The script relies on some form of PHP Markdown (I use my own [PHP Markdown Extra Math][1]) and PHP SmartyPants to be on the local computer. The paths to these libraries are specified in Lines 3 and 4 of `mail-preview.php`.

[1]: http://github.com/drdrang/php-markdown-extra-math
