@extends('admin.layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Usuários
    </h1>
    <br>
    <!--<a href="users.create.php" class="btn btn-primary" >Adicionar Úsuario</a>
				<a href="scripts/exportUsers.php" class="btn btn-primary exportar" >Exportar Úsuarios </a>
				<a class="btn btn-primary importar" >Importar Úsuarios </a>-->
</section>
<section class="content">
    <div class="box box-primary box-import" style="display: none;">
        <div class="box-body">
            <div class="row">
                <div class="form">
                    <labe>Arquivo de úsuarios:</labe>
                    <div class="file-input file-input-new">
                        <div class="file-preview ">
                            <div class="close fileinput-remove">×</div>
                            <div class="file-drop-disabled">
                                <div class="file-preview-thumbnails">
                                </div>
                                <div class="clearfix"></div>
                                <div class="file-preview-status text-center text-success"></div>
                                <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="kv-upload-progress hide">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active"
                                    role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                    style="width:0%;">
                                    0%
                                </div>
                            </div>
                        </div>
                        <div class="input-group file-caption-main">
                            <div tabindex="500" class="form-control file-caption  kv-fileinput-caption">
                                <div class="file-caption-name"></div>
                            </div>

                            <div class="input-group-btn">
                                <button type="button" tabindex="500" title="Clear selected files"
                                    class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                        class="glyphicon glyphicon-trash"></i> <span
                                        class="hidden-xs">Remove</span></button>
                                <button type="button" tabindex="500" title="Abort ongoing upload"
                                    class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                        class="glyphicon glyphicon-ban-circle"></i> <span
                                        class="hidden-xs">Cancel</span></button>

                                <div tabindex="500" class="btn btn-primary btn-file"><i
                                        class="glyphicon glyphicon-folder-open"></i>&nbsp; <span
                                        class="hidden-xs">Browse …</span><input id="inputCSV" data-show-upload="false"
                                        data-show-caption="true" type="file" class=""></div>
                            </div>
                        </div>
                    </div>
                    <div id="kvFileinputModal" class="file-zoom-dialog modal fade" tabindex="-1"
                        aria-labelledby="kvFileinputModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="kv-zoom-actions pull-right"><button type="button"
                                            class="btn btn-default btn-header-toggle btn-toggleheader"
                                            title="Toggle header" data-toggle="button" aria-pressed="false"
                                            autocomplete="off"><i
                                                class="glyphicon glyphicon-resize-vertical"></i></button><button
                                            type="button" class="btn btn-default btn-fullscreen"
                                            title="Toggle full screen" data-toggle="button" aria-pressed="false"
                                            autocomplete="off"><i
                                                class="glyphicon glyphicon-fullscreen"></i></button><button
                                            type="button" class="btn btn-default btn-borderless"
                                            title="Toggle borderless mode" data-toggle="button" aria-pressed="false"
                                            autocomplete="off"><i
                                                class="glyphicon glyphicon-resize-full"></i></button><button
                                            type="button" class="btn btn-default btn-close"
                                            title="Close detailed preview" data-dismiss="modal" aria-hidden="true"><i
                                                class="glyphicon glyphicon-remove"></i></button></div>
                                    <h3 class="modal-title">Detailed Preview <small><span
                                                class="kv-zoom-title"></span></small></h3>
                                </div>
                                <div class="modal-body">
                                    <div class="floating-buttons"></div>
                                    <div class="kv-zoom-body file-zoom-content"></div>
                                    <button type="button" class="btn btn-navigate btn-prev"
                                        title="View previous file"><i
                                            class="glyphicon glyphicon-triangle-left"></i></button> <button
                                        type="button" class="btn btn-navigate btn-next" title="View next file"><i
                                            class="glyphicon glyphicon-triangle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button id="continuar" class="btn btn-primary pull-left">Continuar</button>
        </div>
    </div>
    <h4>Usuários</h4>
    <div class="box">
        <div class="box-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                    name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                    class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> resultados por página</label></div>
                    </div>
                    <div class="col-sm-6">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Pesquisar<input
                                    type="search" class="form-control input-sm" placeholder=""
                                    aria-controls="DataTables_Table_0"></label></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table
                            class="users-table table table-bordered table-striped table-responsive no-footer dataTable"
                            id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Nome: Ordenar colunas de forma descendente"
                                        style="width: 140px;" aria-sort="ascending">Nome</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="E-mail: Ordenar colunas de forma ascendente"
                                        style="width: 242px;">E-mail</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Tempo online: Ordenar colunas de forma ascendente"
                                        style="width: 247px;">Tempo online</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Cadastrado em:: Ordenar colunas de forma ascendente"
                                        style="width: 282px;">Cadastrado em:</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr id="4yoOFnkvarKAKJGXntiV" role="row" class="odd">
                                    <td class="sorting_1"></td>
                                    <td>figoimoveis1@gmail.com</td>
                                    <td>0s</td>
                                    <td>12/8/2020, 8:01:27 PM</td>
                                </tr>
                                <tr id="7Ny9sb65LNavgLm6HFEC" role="row" class="even">
                                    <td class="sorting_1"></td>
                                    <td>keilamariano@creci.org.br</td>
                                    <td>0s</td>
                                    <td>12/8/2020, 9:08:13 PM</td>
                                </tr>
                                <tr id="8T8CmNrWzg3Q4mFy2ZMx" role="row" class="odd">
                                    <td class="sorting_1"></td>
                                    <td>nanci.imoveis@yahoo.com</td>
                                    <td>0s</td>
                                    <td>12/8/2020, 10:11:35 PM</td>
                                </tr>
                                <tr id="Ep6Slk1soTTxv6grJ7y0" role="row" class="even">
                                    <td class="sorting_1"></td>
                                    <td>rcd.duran1@gmail.com</td>
                                    <td>0s</td>
                                    <td>12/8/2020, 10:39:41 PM</td>
                                </tr>
                                <tr id="KfcoPgpleHqSLFtCy2ur" role="row" class="odd">
                                    <td class="sorting_1"></td>
                                    <td>adilsonapleal@gmail.com</td>
                                    <td>0s</td>
                                    <td>12/8/2020, 9:48:48 PM</td>
                                </tr>
                                <tr id="LUbb1UP20scsKIFqxp30" role="row" class="even">
                                    <td class="sorting_1"></td>
                                    <td>adilsonapleal@gmail.com</td>
                                    <td>0s</td>
                                    <td>12/8/2020, 9:56:55 PM</td>
                                </tr>
                                <tr id="MS8LnEHLKSvGCZev9Lw5" role="row" class="odd">
                                    <td class="sorting_1"></td>
                                    <td>redacao@tvjota.com.br</td>
                                    <td>0s</td>
                                    <td>12/8/2020, 7:04:24 PM</td>
                                </tr>
                                <tr id="Oqqxy2Hc1kyYk32yUI0K" role="row" class="even">
                                    <td class="sorting_1"></td>
                                    <td>sue.ellen@corretorunido.com.br</td>
                                    <td>0s</td>
                                    <td>12/8/2020, 9:35:20 PM</td>
                                </tr>
                                <tr id="Wcg39ae8NTsIwVfm1AEQ" role="row" class="odd">
                                    <td class="sorting_1"></td>
                                    <td>silva@terra.com</td>
                                    <td>0s</td>
                                    <td>12/11/2020, 3:18:36 AM</td>
                                </tr>
                                <tr id="eRu8zU5LdKOJCli7rZ09" role="row" class="even">
                                    <td class="sorting_1"></td>
                                    <td></td>
                                    <td>0s</td>
                                    <td>12/8/2020, 8:15:05 PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            Mostrando de 1 até 10 de 526 registros</div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="DataTables_Table_0_previous"><a
                                        href="#" aria-controls="DataTables_Table_0" data-dt-idx="0"
                                        tabindex="0">Anterior</a></li>
                                <li class="paginate_button active"><a href="#" aria-controls="DataTables_Table_0"
                                        data-dt-idx="1" tabindex="0">1</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0"
                                        data-dt-idx="2" tabindex="0">2</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0"
                                        data-dt-idx="3" tabindex="0">3</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0"
                                        data-dt-idx="4" tabindex="0">4</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0"
                                        data-dt-idx="5" tabindex="0">5</a></li>
                                <li class="paginate_button disabled" id="DataTables_Table_0_ellipsis"><a href="#"
                                        aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0">…</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0"
                                        data-dt-idx="7" tabindex="0">53</a></li>
                                <li class="paginate_button next" id="DataTables_Table_0_next"><a href="#"
                                        aria-controls="DataTables_Table_0" data-dt-idx="8" tabindex="0">Próximo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</section>
@endsection