<?php

    // PHP 문법 변수 선언 하는 방법 $ <- 변수로 선언가능
    // 사용자로부터 (form요소) GET방식으로 전달된 데이터 받기
    $title= $_GET['title'];
    $msg= $_GET['msg'];

    // 잘 받았는지 확인 해보고자 사용자에게 응답(Respons)
    echo "제목 : $title <br>";
    echo "내용 : $msg <br>";
    
?>