<br>
<div class="container">
<!--    <form class="well form-horizontal" action="action/cadastro_aluno.php" method="post"  id="contact_form">-->
        <!-- Form Name -->
<!--        <legend><center><h2><b>Agende sua Aula</b></h2></center></legend><br>-->
       
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!--            <div class="blog blog-info">-->
                <!-- HEAD -->
                <div class="blog-header">
                    <h5 class="blog-title">Peneses</h5>
                </div>
<!--                <div class="blog-body" style="overflow: visible;">-->
                    <div class="table-responsive">
                        <?php if($usuario_lote) { ?>
<!--
                        <div class="pull-left">
                            <a href="admin_usuarios_lote_adicionar.php?idMenu=<?php echo $idMenu ?>" role="button" class="btn btn-primary btn-block"><i class="fa fa-user-plus"></i> Usuários em lote</a>
                        </div>
-->
                        <?php } ?>
                        <table id="table"
                               data-toggle="table"
                               data-url="table/agendar.php"
                               data-show-pagination-switch="true"
                               data-show-columns="true"
                               data-pagination="true"
                               data-export-data-type="all"
                               data-export-types = "['excel', 'csv', 'pdf']"
                               data-search="true"
                               data-sortable="true"
                               data-content-type="application/json"
                               data-data-type="json"
                               data-filter-control="true"
                               data-show-export="true">
                            <thead>
                                <tr>
                                    <th data-field="id" data-filter-control="input" data-align="left" data-sortable="true" data-visible="true" data-order="asc" >
                                    </th>
                                    <th data-field="nome" data-filter-control="input" data-align="left" data-sortable="true" data-visible="true" data-order="asc" >
                                    </th>
                                    <th data-field="email" data-filter-control="input" data-align="center" data-sortable="true" data-visible="true" class="col-xs-1">
                                    </th>
                                    <th data-field="cpf" data-filter-control="input" data-align="center" data-sortable="true" data-visible="true" class="col-xs-1">
                                    </th>
                                    <th data-field="tipoUsuario" data-filter-control="select" data-align="center" data-sortable="true" data-visible="true" class="col-xs-1">
                                    </th>
                                    <th data-field="insercao" data-filter-control="input" data-align="center" data-sortable="true" data-visible="true" class="col-xs-1">
                                    </th>
                                    
                                </tr>
                            </thead>
                        </table>
                    </div>
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
<!--    </form>-->
</div>
