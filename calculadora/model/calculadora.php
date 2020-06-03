<?php
    session_start();

    switch ($_REQUEST['operacao']) {
        case 'C':
            session_destroy();
            $dados = array('result' => 0);
            break;

        case 'adc' :
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['valor'] : $_SESSION['result'] += $_REQUEST['valor'];
            $dados = array('result' => $_SESSION['result']);
            break;
        
        default:
            # code...
            break;
    }

    echo json_encode($dados);