$(document).ready(function() {

    var display = ''

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

        let number = $(this).attr('id')

        var value   

        switch (number) {
            case 'C':
                value = `valor=0&operacao=C`
                calcular(value)
                display = ''
                break

            case 'adc':
                value = `valor=${display}&operacao=adc`
                calcular(value)
                display = ''
                break

            case 'sub':
                value = `valor=${display}&operacao=sub`
                calcular(value)
                display = ''
                break

            case 'div':
                value = `valor=${display}&operacao=div`
                calcular(value)
                display = ''
                break

            case 'X':
                value = `valor=${display}&operacao=X`
                calcular(value)
                display = ''
                break

            case 'porc':
                value = `valor=${display}&operacao=porc`
                calcular(value)
                display = ''
                break

            case 'res':
                value = `valor=${display}&operacao=sub`
                calcular(value)
                display = ''
                break

            default:
                display += number
                $('#display').val(display)
        }
    })
})