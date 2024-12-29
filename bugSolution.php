The solution involves being explicit about the key types and ensuring they are consistently handled as strings. One method is to use keys that are clearly not integers, another is to use type casting or strict comparison. Example:
```php
<?php
$myArray = [];
$myArray['10'] = 'ten';
$myArray['10_string'] = 'tenMore'; //Use non-numeric string to avoid ambiguity
print_r($myArray);
?>
```
Another solution is to use type casting to explicitly handle it as a string key:
```php
<?php
$myArray = [];
$myArray[(string)10] = 'ten'; // Type cast the key to string
$myArray[10] = 'tenMore';
print_r($myArray);
?>
```
This explicitly tells PHP to treat the key as a string, preventing the type juggling issue.