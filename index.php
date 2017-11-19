<?php
//var_dump($_POST)


//$int = 1;
//$string = '23';

//$array = [1, 3, 5, 6, "name" => "Vadim", "sername" => "Petrov", 7, 8, 9, 'users' => ["Vadim", "Alex", "Ruslan"]];


//for ($i = 0; $i < 15; $i++) {
//    echo "<pre>";
//    var_dump($array[$i]);
//    echo "</pre>";
//}
//foreach ($array as $key => $value) {
//    if (is_array($value)) {
//        foreach ($value as $key => $value) {
//            var_dump($value);
//        }
//    }
//}
//while ($i < 5) {
//    $count = $i++;
//    echo "<pre>";
//    var_dump($i);
//    echo "</pre>";
//}

//var_dump($int);
//var_dump($string);
//var_dump($array);

//--------------------------------------------------------------------------------------------------------
//video lms beetroot
//--------------------------------------------------------------------------------------------------------
//1_2)    echo "Hello World!";
//--------------------------------------------------------------------------------------------------------
//2_3) $orgs = array(
//    "org1"=>array(
//        "worker1" => [
//            "name" => "John",
//            "age" => 25
//            ],
//        "worker2" => [
//            "name" => "Peter",
//            "age" => 60
//            ],
//        "worker3" => [
//            "name" => "Jack",
//            "age" => 23
//            ]
//                ),
//              "org2"=>array (
//                  "worker1"=> [
//                      "name" => "Jack",
//                      "age" => 21
//                      ]
//              ),
//              "org3"=>array (
//                  "worker1"=> [
//                      "name" => "Peter",
//                      "age" => 34
//                      ]
//              )
//    );
//echo "Whe have worker named ". $orgs["org1"]["worker1"]["name"]. ", and his age is ". $orgs["org1"]["worker1"]["age"]." years.";
//-----------------------------------------------------------------------------------------------------
//3_4)   $array = ["a"=>"Sergey", "b"=>"Alexandr", "c"=>"Alexey", "z"=>"Anna", "t"=>"Tanya"];
//    сортировка по ключу напрямую
//    ksort($array);
//    сортировка по ключу обратно
//    krsort($array);
//    сортировка по значению напрямую
//    asort($array);
//    сортировка по значению обратно
//    arsort($array);
//    $array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'a', 'A', 'f'];
//    $array2 = ['h','i', 'j', 'k','a', 'b', 'c', 'f'];
//    разбивка по 2 штуки
//    echo "<pre>"; --> это для переноса строки
//    echo "</pre>";
//    $chunks = array_chunk($array, 2, true);
//    объединение
//    $merge = array_merge($array, $array2);
//    $diff = array_diff($array, $array2);
//    $merge = array_unique (array_merge($array, $array2));
//    echo "<pre>";
//    print_r($merge);
//    echo "</pre>";

//$fruits = ['Apple', 'Banana', 'Orange', 'Pear'];
// забирает последний элемент  массива
//$pop = array_pop($fruits);
//забирает первый элемент массива
//$shift = array_shift($fruits);
//print_r ($fruits);
//shuffle($fruits);
//$rand = (array_rand ($fruits));
//print_r ($rand);
//echo $fruits[$rand];
//--------------------------------------------------------------------------------------------------------

//4_5    $number = 7;
//    if ($number > 10){
//        ЧТО ДЕЛАТЬ ЕСЛИ УСЛОВИЕ ВЫПОЛНИЛОСЬ
//        echo "Да. Ваше число больше 10";
//    }
//        elseif ($number > 5) {
//            echo "Ваше число в диапозоне от 5 до 10";
//        }
//        else {
//        ЧТО ДЕЛАТЬ ЕСЛИ УСЛОВИЕ НЕ ВЫПОЛНИЛОСЬ
//        echo "Нет. Ваш число меньше 5";
//    }

//    if ($number > 10):
//        echo "Да. Ваше число больше 10";
//    elseif ($number > 5):
//            echo "Ваше число в диапозоне от 5 до 10";
//    else :
//        echo "Нет. Ваш число меньше 5";
//    endif;

//    echo $number >10 ? "Да. Ваше число больше 10" : "Нет. Ваш число меньше 10";

//    $name = "Anna";
//    switch ($name) {
//        case "Sergey":
//            echo "Hello ".$name;
//            break;
//        case "Alexander":
//            echo "Hello ".$name. " I will kill you!";
//            break;
//        default:
//            echo "We're not friend with you.";
//            break;
//
//    }
//------------------------------------------------------------------------------------------------------------

//5_6  $fruits =['a'=>'Apple','o'=>'Orange', 'p'=>'Pear','k'=>'Kiwi'];
//  foreach($fruits as $key=>$fruit){
//        echo $key. " stands for ".$fruit."<br>";
//}

//$fruits =['Apple','Orange','Pear','Kiwi'];
//for ($i = 0;$i< count($fruits); $i++){
//    echo $fruits[$i]."<br>";
//}

//$i =0;
//while($i <= 15) {
//    echo $i."<br>";
//    $i += 1;
//}

//    $i = 0;
//    do {
//        echo $i."<br>";
//        $i++;
//    }while ($i<=25);
//
//------------------------------------------------------------------------------------------------------------

//$fp = fopen("file.txt","w");
// //r    чтение
// //r+   чтение+запись
// //w    запись   если файла нет, попытается создать, каждый раз заново.
// //w+   запись+чтение, каждый раз заново.
// //a    только добавление с конца сущ содержим. если файла нет попытается создать
// //a+       добавление+чтение так пытается создать файл.
//$text = "Hello World!";
//fwrite($fp,$text);
//fclose($fp);
//--------------------------------------------------------------------------------------------------------
//$number = ["a" => '1', "b" => '2', 'c' => '3', 'd' => '25', 'e' => '45', 'f' => '60', "g" => '80'];
//asort($number);
////var_dump($number);
//
//foreach ($number as $key => $val) {
//
//    echo "$key = $val</br>";
//}

//$number = ['1','2','3','25','45','60','80'];
//    asort($number);
//    var_dump($number);

//
//$number = ['1','2','3','25','45','60','80'];
//var_dump(sort($number));

//$number = ["a" => '1', "b" => '2', 'c' => '3', 'd' => '25', 'e' => '45', 'f' => '60', "g" => '80'];
//var_dump(array_key_exists("f", $number));
//var_dump(array_key_exists("x", $number));

//$number = ["a" => '1', "b" => '1', 'c' => '1', 'd' => '25', 'e' => '45', 'f' => '80', "g" => '80'];
//var_dump(array_values(array_unique($number)));

//$number = ['1','2','3','25','45','60','80'];
//var_dump(array_push($number, "Banan", "Orange",));

//$file = 'people.txt';
//
//// Новый человек, которого нужно добавить в файл
//$person = "John Smith\n";
//// Пишем содержимое в файл,
//// используя флаг FILE_APPEND flag для дописывания содержимого в конец файла
//// и флаг LOCK_EX для предотвращения записи данного файла кем-нибудь другим в данное время
//file_put_contents($file, $person,FILE_APPEND | LOCK_EX);
//echo file_get_contents('./people.txt', true);

//function fileGetContents(){
//}

?>