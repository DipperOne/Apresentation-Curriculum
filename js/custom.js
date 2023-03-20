$(document).ready(function() {
    // Seleciona o elemento h2 com a classe "saudacao"
    var saudacao = $('.saudacao');
    // Obtém o texto do elemento h2 com a classe "saudacao"
    var saudacaoText = saudacao.text();
    // Obtém o comprimento do texto do elemento h2 com a classe "saudacao"
    var saudacaoTextLength = saudacaoText.length;
    // Inicializa a variável que armazenará o texto que está sendo digitado
    var currentText = '';
    // Inicializa a variável que armazenará o comprimento do texto que está sendo digitado
    var currentTextLength = 0;
    // Define a velocidade de digitação
    var typingSpeed = 50;
    // Limpa o texto do elemento h2 com a classe "saudacao"
    saudacao.text('');
    // Função que escreve o texto do elemento h2 com a classe "saudacao" letra por letra
    function type() {
        // Adiciona a próxima letra do texto ao texto que está sendo digitado
        currentText += saudacaoText.charAt(currentTextLength);
        // Define o texto do elemento h2 com a classe "saudacao" como o texto que está sendo digitado
        saudacao.text(currentText);
        // Incrementa o comprimento do texto que está sendo digitado
        currentTextLength++;
        // Se ainda não chegou ao fim do texto, chama a função "type" novamente após um intervalo de tempo definido pela velocidade de digitação
        if (currentTextLength < saudacaoTextLength) {
            setTimeout(type, typingSpeed);
        }
    }

    // Chama a função "type" após um intervalo de tempo definido pela velocidade de digitação
    setTimeout(type, typingSpeed);

    function resize() {
        if ($(window).width() < 992) {
            $('#navbarSupportedContent').addClass('collapse');
            $('#navbarToggleExternalContent').removeClass('collapse');
            $('.midia-social').addClass('d-none');
            $('.midia').css({
                'width': '4.3%',
                'transition': '.5s',
                'opacity': '1',
                'visibility': 'visible'
            });
        } else {
            $('#navbarToggleExternalContent').addClass('collapse');
            $('#navbarSupportedContent').removeClass('collapse show');
            $('.midia-social').removeClass('d-none');
            $('.midia').css({
                'width': '0%',
                'transition': '.5s',
                'opacity': '0',
                'visibility': 'hidden'
            });
        }
    }
    resize();

    $(window).on('resize', function() {
        resize();
    });

    $('.navbar-brand').hover(
        function() {
            $('.nav-link').css({
            'opacity': '0',
            'transition': '.2s'
            });

        },
        function() {
            $('.nav-link').css({
            'opacity': '1',
            'transition': '.2s'
            });
        }
    );

    $('.navbar-dark').hover(
        function() {      
            $('.navbar-toggler').css({'opacity': '1', 'transition': '.2s'});
            $('.nameNavBar').css({'opacity': '1', 'transition': '.2s'});
            $('.saudacao').css({'opacity': '0', 'transition': '.2s'});
        },
        function() {
            $('.navbar-toggler').css({'opacity': '0','transition': '.2s'});
            $('.nameNavBar').css({'opacity': '0','transition': '.2s'});
            $('.saudacao').css({'opacity': '1','transition': '.2s'});
        }
    );

    $('.midia-social').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).css({'transform': 'rotate(0deg)','transition': '.5s'});
            $('.midia').css({
            'width': '0%',
            'transition': '.5s',
            'opacity': '0',
            'visibility': 'hidden'
            });
        } else {
            $(this).addClass('active');
            $(this).css({'transform': 'rotate(-180deg)','transition': '.5s'});
            $('.midia').css({
            'width': '4.3%',
            'transition': '.5s',
            'opacity': '1',
            'visibility': 'visible'
            });
        }
    });

    // $('a.nav-link').click(function() {
    //     var id = $(this).attr('id');
    //     var text;
    //     switch (id) {
    //       case 'btn-galeria':
    //         text = 'Galeria';
    //         break;
    //       case 'btn-formacoes':
    //         text = 'Formação';
    //         break;
    //       case 'btn-projetos':
    //         text = 'Futuros projetos';
    //         break;
    //       default:
    //         text = '';
    //     }
    //     $('.typing').text(text);
    // });      

    $('.navbar-brand').click(function() {
        location.reload();
    });
    

});
