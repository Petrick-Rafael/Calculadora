<?php
    session_start();
    
switch ($_REQUEST['op']) {
    case 'C':
        $dados = array("result" => 0);
        $_REQUEST['op'] = '';
        session_destroy();        
        break;

    case 'adc':
        !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] += $_REQUEST['v1']; 
        $dados = array('result' => $_SESSION['result']);
        break;

    case 'sub':
        !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] -= $_REQUEST['v1']; 
        $dados = array('result' => $_SESSION['result']);
        break;

