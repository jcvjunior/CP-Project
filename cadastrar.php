<?php require 'pages/header.php'; 
?>
<html>
<script type="text/javascript" src="assets/js/acess.js"></script>
<div class="bk">
    <div class="container-sm"><h3>Area de Cadastro</h3></div>
    <div class="form-area container-sm ">
    <form class="row g-3" action="cadastro.php" id="cadastro" method="POST">
            <div class="col-md-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome"  name="nome" pattern="[a-zA-Z\s]+$" maxlength="150">
            </div><div></div>
        
            <div class="col-md-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="col-md-4">
                <label for="email2" class="form-label">Confirmação de Email</label>
                <input type="email" class="form-control" id="email2" name="email2" >
            </div><div></div>

            <div class="col-md-2">
                <label for="date" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" id="date" name="data">
            </div><div></div>

            <div class="col-md-4">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="col-md-4">
                <label for="passconfirm" class="form-label">Confirmação de senha</label>
                <input type="password" class="form-control" id="passconfirm" name="passconfirm">
            </div><div></div>
            
            <div class="col-md-4">
                <label for="inputZip" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
                <script>
                $( "#cpf" ).keypress(function() {
                    $(this).mask('000.000.000-00');
                });
                </script>
            </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="cadastrar">Cadastrar</button>
        </div>


        <script>
        $(document).ready(function(){
            $('#cadastro').validate({
                rules:{
                    nome:{
                            required: true,
                            minlength: 10,
                            maxlength: 100
                    },
                    email:{
                            required: true,
                            email: true
                    },
                    email2:{
                            required: true,
                            equalTo: '#email'
                    },
                    data: {
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 4,
                        maxlength: 20
                    },
                    passconfirm: {
                        required: true,
                        minlength: 4,
                        maxlength: 20,
                        equalTo: '#password'
                    },
                    cpf: {
                        required: true,
                        cpfBR: true
                    }
                }
            })
        })
    </script>   
    </form>            
</div>   
</div>
</html