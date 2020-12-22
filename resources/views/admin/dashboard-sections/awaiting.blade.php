<section class="content">
    <h4>
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Awaiting Moderation</font>
        </font>
    </h4>
    <div class="box">
        <div class="box-body">
            <div id="tableAguardando_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="tableAguardando_length"><label><select
                                    name="tableAguardando_length" aria-controls="tableAguardando"
                                    class="form-control input-sm">
                                    <option value="10">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">10</font>
                                        </font>
                                    </option>
                                    <option value="25">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">25</font>
                                        </font>
                                    </option>
                                    <option value="50">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">50</font>
                                        </font>
                                    </option>
                                    <option value="100">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">100</font>
                                        </font>
                                    </option>
                                </select>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"> results per page</font>
                                </font>
                            </label></div>
                    </div>
                    <div class="col-sm-6">
                        <div id="tableAguardando_filter" class="dataTables_filter"><label>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Search</font>
                                </font><input type="search" class="form-control input-sm" placeholder=""
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
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Message</font>
                                        </font>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableAguardando" rowspan="1"
                                        colspan="1" aria-label="User: Sort columns upward" style="width: 298px;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">User</font>
                                        </font>
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="tableAguardando" rowspan="1"
                                        colspan="1" aria-label="Sent: Sort columns downward" style="width: 310px;"
                                        aria-sort="ascending">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Sent</font>
                                        </font>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableAguardando" rowspan="1"
                                        colspan="1" aria-label="Actions: Sort columns ascending" style="width: 249px;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Actions</font>
                                        </font>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tBodyAguardando">
                                @foreach($messages_awaiting as $key => $message)
                                @php
                                    $user = App\User::find($message->U_ID);
                                @endphp
                                <tr id="tr_awaitingMsg_{!! $message->M_CODE !!}" role="row" class="odd">
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{!! $message->MESSAGE !!}</font>
                                        </font>
                                    </td>
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{!! $user->f_name." ".$user->l_name  !!}</font>
                                        </font>
                                    </td>
                                    <td class="sorting_1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{!! $message->created_at !!}</font>
                                        </font>
                                    </td>
                                    <td><button type="button" data-id="{!! $message->M_CODE !!}"
                                            class="btn btn-success approve btn-sm">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">To approve</font>
                                            </font>
                                        </button><button type="button" data-id="QIwctaT8lv3bVpYg0Wfu"
                                            class="btn btn-danger reprovar btn-sm">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Disapprove</font>
                                            </font>
                                        </button><button type="button" data-id="QIwctaT8lv3bVpYg0Wfu"
                                            class="btn btn-info responder btn-sm" style="margin-left: 10px">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Answer</font>
                                            </font>
                                        </button></td>
                                </tr>
                                @endforeach
                                <!-- <tr id="QIwctaT8lv3bVpYg0Wfu" role="row" class="odd">
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">covered spaces, all</font>
                                        </font>
                                    </td>
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Ricardo Benassi</font>
                                        </font>
                                    </td>
                                    <td class="sorting_1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">12/8/2020, 10:34:10 PM</font>
                                        </font>
                                    </td>
                                    <td><button type="button" data-id="QIwctaT8lv3bVpYg0Wfu"
                                            class="btn btn-success aprovar btn-sm">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">To approve</font>
                                            </font>
                                        </button><button type="button" data-id="QIwctaT8lv3bVpYg0Wfu"
                                            class="btn btn-danger reprovar btn-sm">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Disapprove</font>
                                            </font>
                                        </button><button type="button" data-id="QIwctaT8lv3bVpYg0Wfu"
                                            class="btn btn-info responder btn-sm" style="margin-left: 10px">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Answer</font>
                                            </font>
                                        </button></td>
                                </tr>
                                <tr id="Qm0WKNkeKg34lpxcvJxI" role="row" class="even">
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">What will be the finish of the apt?
                                            </font>
                                        </font>
                                    </td>
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Priscilla Macedo</font>
                                        </font>
                                    </td>
                                    <td class="sorting_1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">12/8/2020, 10:34:23 PM</font>
                                        </font>
                                    </td>
                                    <td><button type="button" data-id="Qm0WKNkeKg34lpxcvJxI"
                                            class="btn btn-success aprovar btn-sm">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">To approve</font>
                                            </font>
                                        </button><button type="button" data-id="Qm0WKNkeKg34lpxcvJxI"
                                            class="btn btn-danger reprovar btn-sm">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Disapprove</font>
                                            </font>
                                        </button><button type="button" data-id="Qm0WKNkeKg34lpxcvJxI"
                                            class="btn btn-info responder btn-sm" style="margin-left: 10px">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Answer</font>
                                            </font>
                                        </button></td>
                                </tr> -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Message</font>
                                        </font>
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">User</font>
                                        </font>
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Sent</font>
                                        </font>
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Actions</font>
                                        </font>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="tableAguardando_info" role="status" aria-live="polite">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Showing 1 to 10 of 21 entries</font>
                            </font>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="tableAguardando_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="tableAguardando_previous"><a href="#"
                                        aria-controls="tableAguardando" data-dt-idx="0" tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Previous</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button active"><a href="#" aria-controls="tableAguardando"
                                        data-dt-idx="1" tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">1</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button "><a href="#" aria-controls="tableAguardando" data-dt-idx="2"
                                        tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">two</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button "><a href="#" aria-controls="tableAguardando" data-dt-idx="3"
                                        tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">3</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button next" id="tableAguardando_next"><a href="#"
                                        aria-controls="tableAguardando" data-dt-idx="4" tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Next</font>
                                        </font>
                                    </a></li>
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