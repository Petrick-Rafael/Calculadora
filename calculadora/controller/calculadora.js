$(document).ready(function() {

    var display = ''
    var c = 0
    
    function calcular(value) {
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: value,
            url: 'calculadora/model/calculadora.php',
            success: function(dados) {
                $('#display').val(dados.result)
            }
        })
    }

    $('.btn').click(function(e) {

        e.preventDefault()

        var number = $(this).attr('id')

        var value   

        switch (number) {
            case 'C':
                value = `v1=0&op=C`
                display = ''
                number = ''
                calcular(value)
                break

            case 'adc':
                value = `v1=${display}&op=adc`
                calcular(value)
                display = ''
                break

            case 'sub':
                value = `v1=${display}&op=sub`
                calcular(value)
                display = ''
                break

            case 'div':
                value = `v1=${display}&operacao=div`
                calcular(value)
                display = ''
                break

            case 'X':
                value = `v1=${display}&operacao=X`
                calcular(value)
                display = ''
                break

            case 'porc':
                value = `v1=${display}&operacao=porc`
                calcular(value)
                display = ''
                break

            case 'res':
                value = `v1=${display}&op=res`
                calcular(value)
                display = ''
                break

            default:
                display += number
                $('#display').val(display)
        }
       
        $('#display').val(display)
    })
})
// $(document).ready(function() {

//     var display = ''
//     var v1 = ''
//     var op = ''
//     var vf = 0
//     var c = 0

//     $('.btn').click(function(e) {

//         e.preventDefault()

//         let number = $(this).attr('id')


//         switch (number) {
//             case 'c':
//                 $('#display').val(' ')
//                 display = ''
//                 number = ''
//                 vf = 0
//                 break;
//             case '=':
//                 v1 = display
//                 number = ''
//                 display = ''
//                 c = 0
                
//                 switch (op) {
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
//                 break;
//             case '+':
//                 v1 = display     
//                 vf = parseFloat(vf) + parseFloat(v1)
//                 op = '+'
//                 display = ''
//                 number = ''
//                 break;
//             case '-':
//                 v1 = display     
//                 vf = parseFloat(v1) - parseFloat(vf)     
//                 console.log(v1)  
//                 console.log(vf)  
//                 op = '-'
//                 display = ''
//                 number = ''
//                 break;
//             case '%':
//                 if (c == 0) {
//                 vf = 1
//                 }c++
//                 v1 = display     
//                 vf = (parseFloat(v1)/100) * parseFloat(vf)     
//                 console.log(v1)  
//                 console.log(vf)  
//                 op = '%'
//                 display = ''
//                 number = ''
//                 break;
//             case '/':
//                 if (c == 0) {
//                     vf = 1
//                 }c++
//                 v1 = display     
//                 vf = parseFloat(v1) / parseFloat(vf)     
//                 console.log(v1)  
//                 console.log(vf)  
//                 op = '/'
//                 display = ''
//                 number = ''
//                 break;
//             case 'X':
//                 if (c == 0) {
//                     vf = 1
//                 }c++
//                 v1 = display     
//                 vf = parseFloat(vf) * parseFloat(v1)     
//                 console.log(v1)  
//                 console.log(vf)  
//                 op = 'X'
//                 display = ''
//                 number = ''
//                 break;
        
//             default:0
//                 break;
//             }
//         display += number
//         $('#display').val(display)
//     })
// })