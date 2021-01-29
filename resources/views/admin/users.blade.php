@extends('admin.layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Usuários
    </h1>
    <br>
</section>
<section class="content">
    <form action="{{ url('/userfile_upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="">
                <label for="user_list">Upload CSV file</label>
                <input type="file" id="user_list" name="user_list" accept=".csv">
            </div>
            <input type="submit" class="btn btn-primary" value="submit">
        </div>
    </form>
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
    var checkss = setInterval(() => {
        checkSS();
    }, IntervalTime);
</script>
@endpush