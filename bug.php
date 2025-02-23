```php
function processData(array $data): array {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = processData($value); // Recursive call
        }
        //Some processing
    }
    return $data;
}

$myData = [1,2,3,[4,5,6]];
$processedData = processData($myData);
print_r($processedData);
```