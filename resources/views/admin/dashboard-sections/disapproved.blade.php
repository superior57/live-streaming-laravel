<section class="content">
    <h4>
        Disapproved
    </h4>
    <div class="box">
        <div class="box-body">
            <a href="questions_reproved.php" class="btn btn-primary" style="margin-bottom: 10px">
                Exporting Disapproved Messages
            </a>
            <div id="tableReprovadas_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="table_disapproved_length"><label>
                            <select
                                name="table_disapproved_length" aria-controls="tableReprovadas"
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
                        <div id="tableReprovadas_filter" class="dataTables_filter"><label>
                                Search
                                <input type="search" class="form-control input-sm" placeholder=""
                                    aria-controls="tableReprovadas">
                            </label></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-striped dataTable" id="tableReprovadas" role="grid"
                            aria-describedby="tableReprovadas_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="tableReprovadas" rowspan="1"
                                        colspan="1" aria-label="Message: Sort columns ascending" style="width: 368px;">
                                        Message
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableReprovadas" rowspan="1"
                                        colspan="1" aria-label="User: Sort columns upward" style="width: 298px;">
                                        User
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="tableReprovadas" rowspan="1"
                                        colspan="1" aria-label="Sent: Sort columns ascending" style="width: 310px;"
                                        aria-sort="descending">
                                        Sent
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableReprovadas" rowspan="1"
                                        colspan="1" aria-label="Actions: Sort columns ascending" style="width: 249px;">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tbody_disapproved_messages">

                                
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
                        <div class="dataTables_info" id="table_disapproved_info" role="status" aria-live="polite">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="table_disapproved_paginate">
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
        if(getGValue('message_disapproved_length')) {
            $('select[name="table_disapproved_length"]').val(getGValue('message_disapproved_length'));
            // messages_disapproved(getGValue('message_disapproved_length'), getGValue('page_num_disapproved') ? getGValue('page_num_disapproved') : 1);
        } else {
            setGValue('message_disapproved_length', 5);
        }
    });

    $(document).on('change', 'select[name="table_disapproved_length"]', (event) => {
        setGValue('message_disapproved_length', event.target.value);
        setGValue('page_num_disapproved', 1);
        messages_disapproved(getGValue('message_disapproved_length'), 1);
    });

    let interval_disapproved = setInterval(() => {
        messages_disapproved(getGValue('message_disapproved_length'), getGValue('page_num_disapproved') ? getGValue('page_num_disapproved') : 1);
    }, IntervalTime);
</script>
@endpush