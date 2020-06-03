<?php
    session_start();

    switch ($_REQUEST['operacao']) {
        case 'C':
            session_destroy();
            $_REQUEST['valor'] = 0;
            $dados = array('result' => 0);
        break;

        case 'adc':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['valor'] : $_SESSION['result'] += $_REQUEST['valor'];
            $dados = array('result' => $_SESSION['result']);
        break;

        case 'sub':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['valor'] : $_SESSION['result'] -= $_REQUEST['valor'];
            $dados = array('result' => $_SESSION['result']);
        break;

        case 'X':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['valor'] : $_SESSION['result'] *= $_REQUEST['valor'];
            $_REQUEST['valor'] = 0;
            $dados = array('result' => $_SESSION['result']);
        break;

        case 'div':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['valor'] : $_SESSION['result'] /= $_REQUEST['valor'];
            $dados = array('result' => $_SESSION['result']);
        break;

        case 'porc':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['valor'] : $_SESSION['result'] %= $_REQUEST['valor'];
            $dados = array('result' => $_SESSION['result']);
        break;

        case 'res':
            $dados = array('result' => $_SESSION['result']);
        break;

        default:
            # code...
        break;
    }

    echo json_encode($dados);