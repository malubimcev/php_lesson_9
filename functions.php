<?php

    function writeLog($data)//функция записи в лог для отладки
    {
        $log = file_get_contents("log.txt");
        $data = (string)$data;
        $log .= strftime("%c", time())." >> ".$data.";\r\n";
        file_put_contents("log.txt", $log);
    }

    function get_json_data($fileName) //функция получения данных из json-файла
    {
        $jsonFile = file_get_contents($fileName);
        $jsonData = json_decode($jsonFile, true);
        return $jsonData;
    }

?>
