$(document).ready(function () {

    var qtdQual = 0;
    var qtdDef = 0;

    $('.j_qualidades').click(function () {

        if (qtdQual < 4) {

            $('.qualidades').append('<input type="text" name="qualidades[]" class="inputQualidades inpt' + qtdQual + '" name="inputTitulo"/>');
            $('.inpt' + qtdQual).focus();

            qtdQual++;
        } else {
            $('.msgQualidades').text("Você só pode adicionar 5 qualidades para o produto");
            $('.j_qualidades').fadeOut();
        }
        return  false;
    });

    $('.j_defeitos').click(function () {

        if (qtdDef < 4) {

            $('.defeitos').append('<input type="text" name="defeitos[]" class="inputQualidades inptDef' + qtdDef + '" name="inputTitulo"/>');
            $('.inptDef' + qtdDef).focus();
            qtdDef++;
        } else {
            $('.msgDefeitos').text("Você só pode adicionar 5 defeitos para o produto");
            $('.j_defeitos').fadeOut();
        }
        return  false;
    });

});