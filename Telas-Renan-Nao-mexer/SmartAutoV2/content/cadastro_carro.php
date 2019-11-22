<br>
<div class="container">

    <?php
    $result = $_GET['result'];

    if ($result != 0){
        $msg    = msgErro($result);
        echo $msg;
    }

    ?>
    <form class="well form-horizontal" action="action/cadastro_carro.php" method="post"  id="contact_form">


        <!-- Form Name -->
        <legend><center><h2><b>Cadastro de Carros</b></h2></center></legend><br>


        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Placa</label>  
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                    <input  name="placa" placeholder="XXX-XXXX" class="form-control"  type="text" required>
                </div>
            </div>
        </div>

        <div class="form-group"> 
            <label class="col-md-4 control-label">Marca</label>
            <div class="col-md-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-rebel" aria-hidden="true"></i></span>
                    <select name="marca" class="form-control selectpicker">
                        <option value="cherry">Cherry</option>
                        <option value="volkswagen">Volkswagen</option>
                        <option value="fiat">Fiat</option>
                        <option value="ford">Ford</option>
                        <option value="chevrolet">Chevrolet</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Modelo</label>  
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i>
                    </span>
                    <input  name="modelo" placeholder="Modelo" class="form-control"  type="text" required>
                </div>
            </div>
        </div>


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
