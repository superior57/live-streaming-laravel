<section class="content">
    <h4>
        Approved
    </h4>
    <div class="box">
        <div class="box-body">
            <a href="questions_aproved.php" class="btn btn-primary" style="margin-bottom: 10px">
                Export Approved Messages
            </a>
            <div id="tableAprovadas_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="table_approved_length"><label>
                            <select
                                name="table_approved_length" aria-controls="tableAprovadas"
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
                        <div id="tableAprovadas_filter" class="dataTables_filter"><label>
                                Search
                                <input type="search" class="form-control input-sm" placeholder=""
                                    aria-controls="tableAprovadas">
                            </label></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-striped dataTable" id="tableAprovadas" role="grid"
                            aria-describedby="tableAprovadas_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="tableAprovadas" rowspan="1"
                                        colspan="1" aria-label="Message: Sort columns ascending" style="width: 368px;">
                                        Message
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableAprovadas" rowspan="1"
                                        colspan="1" aria-label="User: Sort columns upward" style="width: 298px;">
                                        User
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="tableAprovadas" rowspan="1"
                                        colspan="1" aria-label="Sent: Sort columns ascending" style="width: 310px;"
                                        aria-sort="descending">
                                        Sent
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableAprovadas" rowspan="1"
                                        colspan="1" aria-label="Actions: Sort columns ascending" style="width: 249px;">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tbody_approved_messages">
                                
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="table_approved_info" role="status" aria-live="polite">
                            
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="table_approved_paginate">
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

@push('script')
<script>
    $(document).ready(() => {
        if(getGValue('message_approved_length')) {
            $('select[name="table_approved_length"]').val(getGValue('message_approved_length'));
            // messages_approved(getGValue('message_approved_length'), getGValue('page_num_approved') ? getGValue('page_num_approved') : 1);
        } else {
            setGValue('message_approved_length', 5);
        }
    });

    $(document).on('change', 'select[name="table_approved_length"]', (event) => {
        setGValue('message_approved_length', event.target.value);
        setGValue('page_num_approved', 1);
        messages_approved(getGValue('message_approved_length'), 1);
    });

    let interval_approved = setInterval(() => {
        messages_approved(getGValue('message_approved_length'), getGValue('page_num_approved') ? getGValue('page_num_approved') : 1);
    }, IntervalTime);
</script>
@endpush