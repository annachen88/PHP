<?php
//  //新增PDO物件
//  $dbConnect = new PDO("mysql:host=localhost;port=3307;dbname=country_db","root","");
// //SQL查詢語法
//  $query = "SELECT * FROM city WHERE city.country_code='USA' ";
//  //指令處理prepare 回傳一個PDOStatement物件
//  $statement = $dbConnect->prepare($query);
//  //執行statement
//  $statement->execute();
//  //fetchAll()會回傳return執行sql查詢後的資料
//  //加上(PDO::FETCH_ASSOC)關聯式資料
//  $data = $statement->fetchAll(PDO::FETCH_ASSOC);
//  print_r($data);

 //新增資料
$nameInput = "Hsinchu";
$popInput = 447081;
$codeInput = "TWN";
$dbConnect = new PDO("mysql:host=localhost;port=3307;dbname=country_db","root","");
$query = "INSERT INTO city (city_name, population, country_code)
           VALUE (:city_name, :population, :country_code)";
$stmt = $dbConnect->prepare($query);
$stmt->bindParam(":city_name", $nameInput);
$stmt->bindParam(":population", $popInput);
$stmt->bindParam(":country_code", $codeInput);
if ($stmt->execute()) {
   echo "Insert Success!";
} else {
   echo $stmt->error;
}

?>