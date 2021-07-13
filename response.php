<?php

    //데이터 베이스 헤더문()
    //'서버이름(localhost), 사용자이름(tnqls0470), 비밀번호(~), 데이터베이스이름(tnqls0470)' 설정

    //폼 정보를 변수설정 그리고 기억 , $변수 필수
    $email = $_POST['email'];
    $code = $_POST['code'];

    //데이터베이스에 저장(입력)
    //sql insert into $email


    //서버가 클라이언트에게 응답
    echo '축하합니다. 메일 리스트에 저장되었습니다!' . $email;

?>