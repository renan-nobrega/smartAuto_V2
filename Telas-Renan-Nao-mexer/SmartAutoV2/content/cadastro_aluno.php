


<br>
<div class="container">

    <?php
    $result = $_GET['result'];
    
    if ($result != 0){
        $msg    = msgErro($result);
        echo $msg;
    }
    ?>
   
    <form class="well form-horizontal" action="action/cadastro_aluno.php" method="post"  id="contact_form">


        <!-- Form Name -->
        <legend><center><h2><b>Cadastro de Aluno</b></h2></center></legend><br>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Nome Completo</label>  
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                    <input  name="nome" placeholder="Nome Completo" class="form-control"  type="text" required>
                </div>
            </div>
        </div>



        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">CPF</label>  
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i>
                    </span>
                    <input  name="cpf" placeholder="CPF" id="cpf" class="form-control"  type="text" required>
                </div>
            </div>
        </div>



        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>  
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    <input name="email" placeholder="E-Mail Address" class="form-control"  type="email" required>
                </div>
            </div>
        </div>



        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">Senha</label>  
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-rebel" aria-hidden="true"></i>
                    </span>
                    <input name="senha" placeholder="Senha" class="form-control"  type="password" required>
                </div>
            </div>
        </div>





        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </div>
    </form>
</div>




<script type="text/javascript">
    $(document).ready(function(){
        $("#cpf").mask("999.999.999-99");
    });
</script>