<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$cars =
[
[
  'brand' => 'audi',
  'model' => 'a4',
  'year' => '2002',
  'cost' => '1000',
  'country' => [
    'Lithuania'=>[
      'kaunas',
      'vilnius',
      'klaipeda',
    ],
    'Russia',
    'Latvia',
  ]
],
  [
    'brand' => 'bmw',
    'model' => 'm5',
    'year' => '2004',
    'cost' => '18000',
    'country' => [
      'Lithuania'=>[
        'kaunas',
        'vilnius',
        'klaipeda',
      ],
      'Belgium',
      'Germany',
    ]
  ],
    [
      'brand' => 'fiat',
      'model' => 'panda',
      'year' => '1996',
      'cost' => '1000',
      'country' => [
        'Lithuania'=>[
          'kaunas',
          'vilnius',
          'klaipeda',
        ],
        'Belgium',
        'Germany',
      ]
    ],
      [
        'brand' => 'volvo',
        'model' => 's60',
        'year' => '2015',
        'cost' => '27000',
        'country' => [
          'Lithuania'=>[
            'kaunas',
            'vilnius',
            'klaipeda',
          ],
          'Belgium',
          'Germany',
        ]
        ]
];
var_dump($cars);


foreach ($cars as $key => $value) {
 var_dump($value['country']['Lithuania']);
}
 ?>
