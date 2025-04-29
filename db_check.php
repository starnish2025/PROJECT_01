<?php
$host = '192.168.0.63'; // MySQL 호스트
$username = 'we12345'; // MySQL 사용자명
$password = 'we12345'; // MySQL 비밀번호
$database = 'project'; // 사용할 데이터베이스명
$port = 3307; // 포트 번호

$conn = mysqli_connect($host, $username, $password, $database, $port);

if (!$conn) {
    die('MySQL 연결 실패: ' . mysqli_connect_error());
} else {
    echo 'MySQL 연결 성공!';
    echo 'MySQL 연결 성공test';
    echo 'test22
    
    ';
}
?>