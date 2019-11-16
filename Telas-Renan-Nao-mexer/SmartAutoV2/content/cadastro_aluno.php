<br>
<div class="container">

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
                    <input  name="cpf" placeholder="CPF" class="form-control"  type="text" required>
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


<!--
        <div class="form-group"> 
            <label class="col-md-4 control-label">Department / Office</label>
            <div class="col-md-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="department" class="form-control selectpicker">
                        <option value="">Select your Department/Office</option>
                        <option>Department of Engineering</option>
                        <option>Department of Agriculture</option>
                        <option >Accounting Office</option>
                        <option >Tresurer's Office</option>
                    </select>
                </div>
            </div>
        </div>
-->


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
<!--                <input class="btn btn-warning" type="submit" value="Submit">-->
                <button type="submit" class="btn btn-primary">Submit</button>

<!--                <button type="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-send"></span></button>-->
            </div>
        </div>
    </form>
</div>
