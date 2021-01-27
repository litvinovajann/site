<?php

class Good extends Unit
{
    const TABLE_NAME = 'core_goods'; //делаем переменную с названием таблицы в БД, чтобы использовать в Юнит.пхп для выброса данных на страницу



    public function getInfo() //функция для вывода всех полей ОДНОГО ТОВАРА по переданному в гет запросе айди
    {
  
                            //make an object to connect to DB
        // $link = mysqli_connect('localhost', 'root', '', 'eshop'); // подключение к таблицы

        // //set encoding
        // mysqli_set_charset($link, 'utf8');
                            
        //query text
        $request = 'select * from core_goods where id='.$_GET['id'];
                            
        //send query and get result
        $results = mysqli_query(Connect::getConnection(), $request);
        //format DB data to an array
        $line = mysqli_fetch_assoc($results);

        return $line; //возвращаем объект со всеми данными одного товара
    }


    public function getField($field) //функция для вывода ОДНОГО поля конкретного товара, который вернула функция ГетАллЛайнс в Юнит.пхп
    {
        $line = $this->getAllLines(); //this используется для того, чтобы передать название таблички core_goods  в функцию другого класса
        return $line[$field]; //возвращаем строку из конкретного поля, переданного в аргументах функции
    }
}