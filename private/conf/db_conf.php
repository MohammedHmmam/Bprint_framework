<?php

//Database Credentials


$credential = [
                "DB_DRIVER"  => 'mysql',
                "HOST"       => '127.0.0.1',
                "DB_NAME"    => 'rocket_wings',
                "DB_USER"    =>  'admin',
                "DB_PASS"    =>  '123456',
                "DB_CHARSET" => 'utf8'


];

////////////////////////////////////////Don't Change any thing here but $options if you need////////////////////////////////////////////////////////
#Database Source Name
$dsn = $credential['DB_DRIVER'].":host=".$credential['HOST'].
                                ";dbname=".$credential['DB_NAME'].";charset=".$credential['DB_CHARSET'];

#Set Connection option
$option = [

    PDO::ATTR_ERRMODE               =>  PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    =>  PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      =>  false

];

?>