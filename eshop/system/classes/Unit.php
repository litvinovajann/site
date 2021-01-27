<?php
   abstract class Unit //данный класс является абстрактным, потому что напрямую мы его низде не используем, и у него нет перменной TABLE_NAME
   {
       public static function getAllLines() //функция для возврата ВСЕХ данных таблицы TABLE_NAME в объектике
       {
           //make an object to connect to DB
        //    $link = mysqli_connect('localhost', 'root', '', 'eshop');

        //    //set encoding
        //    mysqli_set_charset($link, 'utf8');
           //query text
           $request = 'select * from '.static::TABLE_NAME;
            
           //send query and get result
           $results = mysqli_query(Connect::getConnection(), $request);
           //return all lines (Resourse)
           return $results;
       }

       public static function createLine($fields, $values)
       {
           $fields_str =  implode(',', $fields);
           $values_str = implode(',', $values);
        //    $link = mysqli_connect('localhost', 'root', '', 'eshop');
        //    //create encoding
        //    mysqli_set_charset($link, 'utf8');
        //    //create query text
           $request_text = "INSERT INTO ". static::TABLE_NAME ." ($fields_str) VALUES ($values_str)";
           //send request text to DB
           mysqli_query(Connect::getConnection(), $request_text);
       }

    //    public static function getDB()
    //    {
    //     //make an object to connect to DB
    //     $link = mysqli_connect('localhost', 'root', '', 'eshop');
    //     //create encoding
    //     mysqli_set_charset($link, 'utf8');
    //     return $link;
    //    }

    public static function deleteLine($id)
    {
        $request_text = "delete from ". static::TABLE_NAME ." where id=$id";
        mysqli_query(Connect::getConnection(), $request_text);
    }
   }
