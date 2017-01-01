captcha-master
============

captcha oluşturma sınıfı

Örnek Kullanımı
============

```php
<?php

session_start();
include("captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA" />';

/**
  output:
  
  <img src="/_captcha/captcha.php?_CAPTCHA&amp;t=0.59861700+1483271815" alt="CAPTCHA" />

**/

?>
```

<h2>Detaylı Bilgi</h2>
<p><a href="http://www.fatihsoysal.com/">http://www.fatihsoysal.com/</a></p>
