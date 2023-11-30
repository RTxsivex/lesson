<?php

#1
$arr = [
    [
        'country' => 'Россия',
        'city' =>    'Москва',
    ],
    [
        'country' => 'Беларусь',
        'city' =>    'Минск',
    ],
    [
        'country' => 'Россия',
        'city' =>    'Питер',
    ],
    [
        'country' => 'Россия',
        'city' =>    'Владивосток',
    ],
    [
        'country' => 'Украина',
        'city' =>    'Львов',
    ],
    [
        'country' => 'Беларусь',
        'city' =>    'Могилев',
    ],
    [
        'country' => 'Украина',
        'city' =>    'Киев',
    ],
];

$res1=[];

foreach ($arr as $item) {

    $res1[$item['country']][]=$item['city'];
}

print_r($res1);


#3

$arr1 = [
    '2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
    '2019-12-30'=> ['name5', 'name6', 'name7'],
    '2019-12-31'=> ['name8', 'name9'],
];
$res3=[];
foreach ($arr1 as $item => $value) {

    foreach ($value as $val) {

        $res3[]=['date'=>$item, 'event'=>$val];

    }
}
print_r($res3);