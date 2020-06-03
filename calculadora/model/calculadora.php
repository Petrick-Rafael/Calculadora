<?php
    session_start();
    $a = '';

    switch ($_REQUEST['op']) {
        case 'C':
            session_destroy();
            $_REQUEST['v1'] = 0;
            $dados = array('result' => 0);
        break;

        case 'res': 
            // $dados = array('result' => $_SESSION['result']);
            

            if ($_REQUEST['op'] == "adc") {
                // case 'adc':
                    !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] += $_REQUEST['v1'];
            $dados = array('result' => $_SESSION['result']);
            $_SESSION['result'] = '';
                // break;
            }
                //                     case '+':
                //                         vf = parseFloat(vf) + parseFloat(v1)  
                //                         display = vf
                //                         vf = 0
                //                         break;
                //                     case '-':
                //                         vf = parseFloat(vf) - parseFloat(v1)  
                //                         display = vf
                //                         vf = 0
                //                         break;
                //                     case '%':
                //                         vf = parseFloat(vf) * parseFloat(v1)   
                //                         display = vf
                //                         vf = 0
                //                         break;
                //                     case '/':
                //                         vf = parseFloat(vf) / parseFloat(v1)  
                //                         display = vf
                //                         vf = 0
                //                         break;
                //                     case 'X':
                //                         vf = parseFloat(vf) * parseFloat(v1)  
                //                         display = vf
                //                         vf = 0
                //                         break;
                                
                //                     default:
                //                         break;
                //                 }
        break;
        
        case 'adc':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] += $_REQUEST['v1'];
            $_REQUEST['op'] = 'adc';
            $dados = array('result' => $_SESSION['result']);
            $_REQUEST['v1'] = '';            
            
            // $_REQUEST['op'] = '';
        break;

        case 'sub':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] -= $_REQUEST['v1'];
            $dados = array('result' => $_SESSION['result']);
        break;

        case 'X':
            !isset($_SESSION['result']) ? $_SESSION['result'] = $_REQUEST['v1'] : $_SESSION['result'] *= $_REQUEST['v1'];
            $_REQUEST['v1'] = 0;
            $dados = array('result' => $_SESSION['result']);
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