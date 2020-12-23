@extends('admin.layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Usuários
    </h1>
    <br>
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
                        <div class="dataTables_length" id="table_user_length"><label><select
                                    name="table_user_length" aria-controls="DataTables_Table_0"
                                    class="form-control input-sm">
                                    <option value="5">5</option>
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
                            <tbody id="tbody_users">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="table_user_info" role="status" aria-live="polite">
                            </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="table_user_paginate">
                            <ul class="pagination">
                                
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

@push('script')
<script>
    $(document).ready(() => {
        if(getGValue('table_user_length')) {
            $('select[name="table_user_length"]').val(getGValue('table_user_length'));
            displayUsers(getGValue('table_user_length'), 1);
        } else {
            setGValue('table_user_length', 5);
        }
    });

    $(document).on('change', 'select[name="table_user_length"]', (event) => {
        setGValue('table_user_length', event.target.value);
        displayUsers(getGValue('table_user_length'), 1);
    });
</script>
@endpush