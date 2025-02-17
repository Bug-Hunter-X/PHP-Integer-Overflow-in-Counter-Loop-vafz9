The GMP library provides a solution for handling arbitrarily large integers, preventing integer overflow.  Here's an example using the GMP library:

```php
<?php
// Requires the GMP extension to be enabled
$counter = gmp_init(0);
while (true) {
  $counter = gmp_add($counter, 1);
  // ... some code that uses $counter. Note that gmp_strval is used to convert the GMP number to a string
  echo gmp_strval($counter) . '\n';
}
?>
```

This revised code utilizes GMP functions (`gmp_init`, `gmp_add`, `gmp_strval`) to ensure that the counter can grow beyond PHP's native integer limit without wrapping around. Remember to enable the GMP extension in your PHP configuration.