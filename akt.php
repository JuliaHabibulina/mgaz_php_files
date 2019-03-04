<?
    ini_set("display_errors",1);
   
    
    require 'db_config.php';

    $db = ibase_connect($DB_DATABASE, $DB_USER, $DB_PASSWORD);//соединение с базой данных
            
    if ($db) {
            //   echo "ibase connected<br/>";
    } else {
        echo "Ошибка подключения к базе данных СУРГ: ibase notconnected<br/>";
        exit();
    }  
    error_reporting(E_ALL);
 
 
   $NOM_ABON=$_POST['NOM_ABON'];
    $POK_AKT = $_POST['POK_AKT'];
    $DATE_SVER = $_POST['DATE_SVER'];
    $PRIM = $_POST['PRIM'];
    $PRIM =iconv( 'UTF-8','windows-1251',$PRIM);
    $KOD_SN = $_POST['KOD_SN'];
    $DATE_VVOD =date("d.m.Y");
    $KOD_OP =$_POST['KOD_OP'];


  
$sql = "INSERT INTO AKT_SVER (NOM_ABON, POK_AKT, DATE_SVER, PRIM, KOD_SN, DATE_VVOD, KOD_OP) VALUES (". $NOM_ABON.",". $POK_AKT.",'".$DATE_SVER."', '".$PRIM."', ".$KOD_SN.", '".$DATE_VVOD."', ".$KOD_OP.")";

   $exec = ibase_query($sql);//выполнение кода из переменной $sql
   error_reporting(E_ALL); 
   

    ibase_close($db);//закрытие соединений

?>