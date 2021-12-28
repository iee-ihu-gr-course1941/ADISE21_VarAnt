<?php
function show_board(){
    global $mysql;

    $sql='select * from board';
    $st=$mysql-prepare($sql);

    $st->execute();
    $res=$st->get_result();

    header('Conternt-type: application/json');
    print json_encode($res->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);


}

?>