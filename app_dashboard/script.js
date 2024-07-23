$(document).ready(() => {
    // O load é um GET internamente

    $('#documentacao').on('click',()=>{
        // $('#pagina').load('documentacao.html');
        // Sendo GET OU POST terá uma resposta armazenada na variavel data
        $.get('documentacao.html',data =>{
            // console.log(data);
            $('#pagina').html(data);

        })
    })
    $('#suporte').on('click', () => {
        // $('#pagina').load('suporte.html');
        // A variável pode ter qualquer nome
        $.post('suporte.html', dados=> {
            // console.log(data);
            $('#pagina').html(dados);

        })        
    })

    // ajax request
    $('#competencia').on('change', (e) => {
        // console.log($(e.target).val());
        let competencia = $(e.target).val();

        // método, url, dados x-www-form-urlencoded, sucesso, erro
        $.ajax({type:'GET',
                url:'app.php',
                data: `competencia=${competencia}`,
                dataType:'json',
                success: (dados)=>{$('#numeroVendas').html(dados.numeroVendas)
                                   $('#totalVendas').html(dados.totalVendas)
                },
                error: (erro) =>{console.log(erro)}
        })

    })

})
