<br>
<div class="container">

    <form class="well form-horizontal" action="action/cadastro_aluno.php" method="post"  id="contact_form">


        <!-- Form Name -->
        <legend><center><h2><b>Cadastrar Aula Prática</b></h2></center></legend><br>

        <!-- Text input--> 

        <div class="form-group">
            <label class="col-md-4 control-label">Dia</label>  
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control">
                    <div class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                    </div>
                </div>
            </div>
        </div>
       

        <!-- Text input-->
        <div class="form-group"> 
            <label class="col-md-4 control-label">Horário</label>
            <div class="col-md-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    <select name="horario" class="form-control selectpicker">
                        <option value="1">08:00</option>
                        <option value="2">09:00</option>
                        <option value="3">10:00</option>
                        <option value="4">11:00</option>
                        <option value="5">12:00</option>
                        <option value="6">13:00</option>
                        <option value="7">14:00</option>
                        <option value="8">15:00</option>
                        <option value="9">16:00</option>
                        <option value="10">17:00</option>
                        <option value="11">18:00</option>
                        <option value="12">19:00</option>
                    </select>
                </div>
            </div>
        </div>
        

       
        <div class="form-group"> 
            <label class="col-md-4 control-label">Instrutor</label>
            <div class="col-md-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <select name="instrutor" class="form-control selectpicker">
                        <option value="1">08:00</option>
                        <option value="2">09:00</option>
                        <option value="3">10:00</option>
                        <option value="4">11:00</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="form-group"> 
            <label class="col-md-4 control-label">Carro</label>
            <div class="col-md-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-car"></i></span>
                    <select name="carro" class="form-control selectpicker">
                        <option value="1">08:00</option>
                        <option value="2">09:00</option>
                        <option value="3">10:00</option>
                        <option value="4">11:00</option>
                    </select>
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
