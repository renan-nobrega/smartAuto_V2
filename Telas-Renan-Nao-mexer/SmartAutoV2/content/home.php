<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">


        <!-- Form Name -->
        <legend><center><h2><b>Registration Form</b></h2></center></legend><br>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">First Name</label>  
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label" >Last Name</label> 
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                </div>
            </div>
        </div>

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

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Username</label>  
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="user_name" placeholder="Username" class="form-control"  type="text">
                </div>
            </div>
        </div>

   

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>  
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                </div>
            </div>
        </div>




        <!-- Select Basic -->


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
                <button type="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-send"></span></button>
            </div>
        </div>


    </form>
</div>
