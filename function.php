<?php
// include 'login.php';

// зададим книгу паролей
$users = [
    ['one' => ['id' => '1', 'password' => 'b59c67bf196a4758191e42f76670ceba']],
    ['two' => ['id' => '2', 'password' => '934b535800b1cba8f96a5d72f72f1611']],
    ['three' => ['id' => '3', 'password' => '2be9bd7a3434f7038ca27d1918de58bd']],
    ['four' => ['id' => '4', 'password' => '2be9bd7a3434f7038ca27d1918de58bd']],
    ['five' => ['id' => '5', 'password' => '6074c6aa3488f3c2dddff2a7ca821aab']],
    ['six' => ['id' => '6', 'password' => 'e9510081ac30ffa83f10b68cde1cac07']],
    ['seven' => ['id' => '7', 'password' => 'd79c8788088c2193f0244d8f1f36d2db']],
    ['eight' => ['id' => '8', 'password' => 'cf79ae6addba60ad018347359bd144d2']],
    ['nine' => ['id' => '9', 'password' => 'fa246d0262c3925617b0c72bb20eeb1d']],
];

// для просмотра паролей
// $users = [
//     ['one' => ['id' => '1', 'password' => '1111']],
//     ['two' => ['id' => '2', 'password' => '2222']],
//     ['three' => ['id' => '3', 'password' => '3333']],
//     ['four' => ['id' => '4', 'password' => '4444']],
//     ['five' => ['id' => '5', 'password' => '5555']],
//     ['six' => ['id' => '6', 'password' => '6666']],
//     ['seven' => ['id' => '7', 'password' => '7777']],
//     ['eight' => ['id' => '8', 'password' => '8888']],
//     ['nine' => ['id' => '9', 'password' => '9999']],
// ];

$p = count($users);

$new = [];

for ($i = 0; $i < $p; $i++) {
   $new[$i] = array_keys($users[$i]); 
}

