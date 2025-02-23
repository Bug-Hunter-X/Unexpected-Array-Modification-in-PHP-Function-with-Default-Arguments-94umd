```php
function processData(array $data): array {
    $dataCopy = array_values($data); // Create a copy
    foreach ($dataCopy as $key => $value) {
        if (is_array($value)) {
            $dataCopy[$key] = processData($value); // Recursive call on the copy
        }
        //Some processing
    }
    return $dataCopy;
}

$myData = [1,2,3,[4,5,6]];
$processedData = processData($myData);
print_r($processedData); //Now this will only modify the copy of the array and won't affect $myData
print_r($myData); //Original array remains unchanged
```