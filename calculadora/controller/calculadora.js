$(document).ready(function() {

    var display = ''
    var v1 = ''
    var op = ''
    var vf = 0
    var c = 0

    $('.btn').click(function(e) {

        e.preventDefault()

        let number = $(this).attr('id')


        switch (number) {
            case 'c':
                $('#display').val(' ')
                display = ''
                number = ''
                vf = 0
                break;
            case '=':
                v1 = display
                number = ''
                display = ''
                c = 0
                
                switch (op) {
                    case '+':
                        vf = parseFloat(vf) + parseFloat(v1)  
                        display = vf
                        vf = 0
                        break;
                    case '-':
                        vf = parseFloat(vf) - parseFloat(v1)  
                        display = vf
                        vf = 0
                        break;
                    case '%':
                        vf = parseFloat(vf) * parseFloat(v1)   
                        display = vf
                        vf = 0
                        break;
                    case '/':
                        vf = parseFloat(vf) / parseFloat(v1)  
                        display = vf
                        vf = 0
                        break;
                    case 'X':
                        vf = parseFloat(vf) * parseFloat(v1)  
                        display = vf
                        vf = 0
                        break;
                
                    default:
                        break;
                }
                break;
            case '+':
                v1 = display     
                vf = parseFloat(vf) + parseFloat(v1)
                op = '+'
                display = ''
                number = ''
                break;
            case '-':
                v1 = display     
                vf = parseFloat(v1) - parseFloat(vf)     
                console.log(v1)  
                console.log(vf)  
                op = '-'
                display = ''
                number = ''
                break;
            case '%':
                if (c == 0) {
                vf = 1
                }c++
                v1 = display     
                vf = (parseFloat(v1)/100) * parseFloat(vf)     
                console.log(v1)  
                console.log(vf)  
                op = '%'
                display = ''
                number = ''
                break;
            case '/':
                if (c == 0) {
                    vf = 1
                }c++
                v1 = display     
                vf = parseFloat(v1) / parseFloat(vf)     
                console.log(v1)  
                console.log(vf)  
                op = '/'
                display = ''
                number = ''
                break;
            case 'X':
                if (c == 0) {
                    vf = 1
                }c++
                v1 = display     
                vf = parseFloat(vf) * parseFloat(v1)     
                console.log(v1)  
                console.log(vf)  
                op = 'X'
                display = ''
                number = ''
                break;
        
            default:0
                break;
            }
        display += number
        $('#display').val(display)
    })
})