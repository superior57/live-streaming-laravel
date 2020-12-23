<section class="content">
    <h4>
        Awaiting Moderation
    </h4>
    <div class="box">
        <div class="box-body">
            <div id="tableAguardando_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="tableAguardando_length"><label>
                            <select
                                name="table_awaiting_length" aria-controls="tableAguardando"
                                class="form-control input-sm">
                                    <option value="5">
                                        5
                                    </option>
                                    <option value="10">
                                        10
                                    </option>
                                    <option value="25">
                                        25
                                    </option>
                                    <option value="50">
                                        50
                                    </option>
                                    <option value="100">
                                        100
                                    </option>
                            </select>
                                results per page
                            </label></div>
                    </div>
                    <div class="col-sm-6">
                        <div id="tableAguardando_filter" class="dataTables_filter"><label>
                                Search
                                <input type="search" class="form-control input-sm" placeholder=""
                                    aria-controls="tableAguardando">
                            </label></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-striped dataTable" id="tableAguardando" role="grid"
                            aria-describedby="tableAguardando_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="tableAguardando" rowspan="1"
                                        colspan="1" aria-label="Message: Sort columns ascending" style="width: 368px;">
                                        Message
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableAguardando" rowspan="1"
                                        colspan="1" aria-label="User: Sort columns upward" style="width: 298px;">
                                        User
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="tableAguardando" rowspan="1"
                                        colspan="1" aria-label="Sent: Sort columns downward" style="width: 310px;"
                                        aria-sort="ascending">
                                        Sent
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableAguardando" rowspan="1"
                                        colspan="1" aria-label="Actions: Sort columns ascending" style="width: 249px;">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tbody_awaiting_mesages">
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">
                                        Message
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        User
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Sent
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Actions
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="table_awaiting_info" role="status" aria-live="polite">
                            
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="table_awaiting_paginate">
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
<!-- /.content -->

@push('script')
<script>
    $(document).ready(() => {
        if(getGValue('message_awaiting_length')) {            
            $('select[name="table_awaiting_length"]').val(getGValue('message_awaiting_length'));
            // messages_awaiting(getGValue('message_awaiting_length'), getGValue('page_num_awaiting') ? getGValue('page_num_awaiting') : 1);
        } else {
            setGValue('message_awaiting_length', 5);
        }
    });

    $(document).on('change', 'select[name="table_awaiting_length"]', (event) => {
        setGValue('message_awaiting_length', event.target.value);
        setGValue('page_num_awaiting', 1);
        messages_awaiting(getGValue('message_awaiting_length'), 1);
    });

    let interval_awaiting = setInterval(() => {
        messages_awaiting(getGValue('message_awaiting_length'), getGValue('page_num_awaiting') ? getGValue('page_num_awaiting') : 1);
    }, IntervalTime);
</script>
@endpush