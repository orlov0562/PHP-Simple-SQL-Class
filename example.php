<?php
    require_once('sql.class.php');

    sql::connect('localhost','root','','my-test-db');

    $str = " It's a perfect world! ";

    $sql = 'SELECT '.sql::esc($str);

    $result = sql::get_var( $sql );

    var_dump( $result );