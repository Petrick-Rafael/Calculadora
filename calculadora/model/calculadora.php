<?php
    session_start();
    
    switch ($_REQUEST['op']) {
        case 'C':
            session_destroy();
            $_REQUEST['v1'] = 0;
            $dados = array('result' => 0);
        break;

        case 'res':
            if ($_SESSION['op'] == 'adc') {
                !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] += $_REQUEST['v1'];
                $_REQUEST['op'] = 'adc';
                $_SESSION['op'] = 'adc';
                $dados = array('result' => $_SESSION['result']);
                $_REQUEST['v1'] = '';
                
            } else if ($_SESSION['op'] == 'sub'){
                !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] -= $_REQUEST['v1'];
                $_REQUEST['op'] = 'sub';
                $_SESSION['op'] = 'sub';
                $dados = array('result' => $_SESSION['result']);
                $_REQUEST['v1'] = '';
                
            } else if ($_SESSION['op'] == 'X'){
                !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] *= $_REQUEST['v1'];
                $_REQUEST['op'] = 'X';
                $_SESSION['op'] = 'X';
                $dados = array('result' => $_SESSION['result']);
                $_REQUEST['v1'] = '';
            }
        break;
        
        case 'adc':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] += $_REQUEST['v1'];
            $_REQUEST['op'] = 'adc';
            $_SESSION['op'] = 'adc';
            $dados = array('result' => $_SESSION['result']);       
            $_REQUEST['v1'] = '';
        break;

        case 'sub':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] -= $_REQUEST['v1'];
            $_REQUEST['op'] = 'sub';
            $_SESSION['op'] = 'sub';
            $dados = array('result' => $_SESSION['result']);
            $_REQUEST['v1'] = '';
        break;

        case 'X':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] *= $_REQUEST['v1'];
            $_REQUEST['op'] = 'X';
            $_SESSION['op'] = 'X';
            $dados = array('result' => $_SESSION['result']);
            $_REQUEST['v1'] = '';
        break;

        case 'div':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] /= $_REQUEST['v1'];
            $dados = array('result' => $_SESSION['result']);
        break;

        case 'porc':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] %= $_REQUEST['v1'];
            $dados = array('result' => $_SESSION['result']);
        break;

        

        default:
            # code...
        break;
    }
    echo json_encode($dados);