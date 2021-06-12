<?php
$json_data = file_get_contents('backend-titanic-test.json');
$json = json_decode($json_data, true);
$arr = [];
foreach ($json as $item) {
    $arr[$item['age']][] = $item['name'];
}
$result = max($arr);
print_r(json_encode(array_values($result)));
