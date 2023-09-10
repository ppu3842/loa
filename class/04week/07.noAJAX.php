<?php

    header('Content-Type: text/html; charset=utf-8');

    $name= $_GET['name'];
    $email= $_GET['email'];

    // echo "$name $email 업로드 되었습니다.";
    // form 요소를 통한 서버와의 통신은 현재 페이지가 바뀌는 것
    // 그래서 기존 페이지가 없어짐
    // 만약 그럼에도 기존 페이지가 있는것처럼 느끼게 하고싶다면

    // 기존 페이지를 그대로 양식을 만들고 그 안에 데이터 삽입

    echo("
        <!DOCTYPE html>

        <html>
            <head>
                <meta charset='UTF-8'>
                <title>No AJAX</title>
            </head>
            <body>
                <h3>회원가입 페이지</h3>
                <form action='./07.noAJAX.php' method='get'>
                    <input type='text' neme='name' value='$name'>
                    <input type='text' neme='email' value='$email'>

                    <input type='submit'>
                </form>
                <hr>
                <!-- 서버로부터 응답받은 결과를 보여주기 위한 요소 -->
                <textarea cols='50' rows='3'>$name $email</textarea>
            </body>
        </html>
    ");

?>