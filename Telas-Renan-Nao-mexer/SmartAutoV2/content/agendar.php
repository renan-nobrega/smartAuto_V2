<br>
<div class="container">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--            <div class="blog blog-info">-->
            <!-- HEAD -->
            <div class="blog-header">
                <h5 class="blog-title">Aulas Disponíveis para Agendamento</h5>
            </div>
            <!--                <div class="blog-body" style="overflow: visible;">-->
            <div class="table-responsive">
                <?php if($usuario_lote) { ?>

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
                            <th data-field="instrutor" data-filter-control="input" data-align="center" data-sortable="true" data-visible="true" data-order="asc">Instrutor
                            </th>
                            <th data-field="dia" data-filter-control="input" data-align="center" data-sortable="true" data-visible="true" data-order="asc">Dia
                            </th>
                            <th data-field="horario" data-filter-control="input" data-align="center" data-sortable="true" data-visible="true" class="col-xs-1">Horário
                            </th>
                            <th data-field="btn_reservar" data-filter-control="input" data-align="center" data-sortable="true" data-visible="true" class="col-xs-1">Reservar Aula
                            </th>                                 

                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
