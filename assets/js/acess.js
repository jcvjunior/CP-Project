$(function(){
    $("#cadastrar").on("click", function(e){
        e.preventDefault();

        var inNome = $("#nome").val();
        var inEmail = $("#email").val();
        var inPass = $("#password").val();
        var inCpf = $("#cpf").val();

        $.ajax({
            url:"cadastro/php",
            type: "POST",
            data: {
                nome: inNome,
                email: inEmail,
                password: inPass,
                cpf: inCpf
            },
            success: function(retorno) {
                console.log(retorno);
            }
        })
    });
});