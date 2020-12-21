@extends('admin.layouts.master')

@section('content')<section class="content-header">
    <h1>
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">
                posts
            </font>
        </font>
    </h1>
    <ol class="breadcrumb">
        <li><i class="fa fa-question"></i>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> posts</font>
            </font>
        </li>

    </ol>
</section>
<br>
<div class="automatico"><button style="margin-left: 1%;" class="btn btn-success aproAuto">
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Enable Automatic Approval</font>
        </font>
    </button></div>

<!-- Main content -->
<section class="content">
    <h4>
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Main Message</font>
        </font>
    </h4>
    <div class="box">
        <div class="box-body" id="msgPrincipal">
            <lt-mirror style="display: none;">
                <lt-highlighter contenteditable="false" style="display: none;">
                    <lt-div spellcheck="false" class="lt-highlighter__wrapper"
                        style="width: 705px !important; height: 98px !important; transform: none !important; transform-origin: 353.5px 50px !important; zoom: 1 !important; margin-top: 1px !important; margin-left: 1px !important;">
                        <lt-div class="lt-highlighter__scrollElement"
                            style="top: 0px !important; left: 0px !important; width: 705px !important; height: 98px !important;">
                        </lt-div>
                    </lt-div>
                </lt-highlighter>
                <lt-div spellcheck="false" class="lt-mirror__wrapper notranslate" data-lt-scroll-top="0"
                    data-lt-scroll-left="0" data-lt-scroll-top-scaled="0" data-lt-scroll-left-scaled="0"
                    data-lt-scroll-top-scaled-and-zoomed="0" data-lt-scroll-left-scaled-and-zoomed="0"
                    style="border: 1px solid rgb(118, 118, 118) !important; border-radius: 0px !important; direction: ltr !important; font: 400 14px / 20px &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif !important; font-feature-settings: normal !important; font-kerning: auto !important; hyphens: manual !important; letter-spacing: normal !important; line-break: auto !important; margin: 0px !important; padding: 8px !important; text-align: start !important; text-decoration: none solid rgb(51, 51, 51) !important; text-indent: 0px !important; text-rendering: auto !important; text-transform: none !important; transform: none !important; transform-origin: 353.5px 50px !important; unicode-bidi: normal !important; white-space: pre-wrap !important; word-spacing: 0px !important; overflow-wrap: break-word !important; writing-mode: horizontal-tb !important; zoom: 1 !important; -webkit-locale: auto !important; -webkit-rtl-ordering: logical !important; width: 689px !important; height: 82px !important;">
                    <lt-div class="lt-mirror__canvas"
                        style="margin-top: 0px !important; margin-left: 0px !important; width: 689px !important; height: 82px !important;">
                        Perguntas</lt-div>
                </lt-div>
            </lt-mirror>
            <textarea id="text_main_message" class="textarea" placeholder="Message"
                style="width: 100%; height: 50px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! $sessions->MAIN_MESSAGE !!}</textarea>
            <a href="#" id="btn_update_main_message" class="btn btn-success" style="margin-bottom: 10px">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Update message</font>
                </font>
            </a>
        </div>
        <!-- /.box-body -->
    </div>
</section>
<!-- /.content -->

<!-- Main content -->
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
                                <tr id="QIwctaT8lv3bVpYg0Wfu" role="row" class="odd">
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
                                </tr>
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

<section class="content">
    <h4>
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Approved</font>
        </font>
    </h4>
    <div class="box">
        <div class="box-body">
            <a href="questions_aproved.php" class="btn btn-primary" style="margin-bottom: 10px">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Export Approved Messages</font>
                </font>
            </a>
            <div id="tableAprovadas_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="tableAprovadas_length"><label><select
                                    name="tableAprovadas_length" aria-controls="tableAprovadas"
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
                        <div id="tableAprovadas_filter" class="dataTables_filter"><label>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Search</font>
                                </font><input type="search" class="form-control input-sm" placeholder=""
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
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Message</font>
                                        </font>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableAprovadas" rowspan="1"
                                        colspan="1" aria-label="User: Sort columns upward" style="width: 298px;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">User</font>
                                        </font>
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="tableAprovadas" rowspan="1"
                                        colspan="1" aria-label="Sent: Sort columns ascending" style="width: 310px;"
                                        aria-sort="descending">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Sent</font>
                                        </font>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableAprovadas" rowspan="1"
                                        colspan="1" aria-label="Actions: Sort columns ascending" style="width: 249px;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Actions</font>
                                        </font>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tBodyAprovadas">
                                <tr id="b1xvXFcp2C2KidIpYznc" role="row" class="odd">
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Success to all,</font>
                                        </font>
                                    </td>
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Gustavo Silas Barg</font>
                                        </font>
                                    </td>
                                    <td class="sorting_1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">12/8/2020, 10:35:40 PM</font>
                                        </font>
                                    </td>
                                    <td><button type="button" data-id="b1xvXFcp2C2KidIpYznc"
                                            class="btn btn-danger reprovar btn-sm">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Disapprove</font>
                                            </font>
                                        </button><button type="button" data-id="b1xvXFcp2C2KidIpYznc"
                                            class="btn btn-info responder btn-sm" style="margin-left: 10px">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Answer</font>
                                            </font>
                                        </button></td>
                                </tr>
                                <tr id="ZZJSpvxuvtqbk0Rp2p3R" role="row" class="even">
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Let's work on this fantastic project
                                            </font>
                                        </font>
                                    </td>
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Mariana Saggiorato</font>
                                        </font>
                                    </td>
                                    <td class="sorting_1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">12/8/2020, 10:35:20 PM</font>
                                        </font>
                                    </td>
                                    <td><button type="button" data-id="ZZJSpvxuvtqbk0Rp2p3R"
                                            class="btn btn-danger reprovar btn-sm">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Disapprove</font>
                                            </font>
                                        </button><button type="button" data-id="ZZJSpvxuvtqbk0Rp2p3R"
                                            class="btn btn-info responder btn-sm" style="margin-left: 10px">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Answer</font>
                                            </font>
                                        </button></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="tableAprovadas_info" role="status" aria-live="polite">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Showing 1 to 10 of 422 entries</font>
                            </font>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="tableAprovadas_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="tableAprovadas_previous"><a href="#"
                                        aria-controls="tableAprovadas" data-dt-idx="0" tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Previous</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button active"><a href="#" aria-controls="tableAprovadas"
                                        data-dt-idx="1" tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">1</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button "><a href="#" aria-controls="tableAprovadas" data-dt-idx="2"
                                        tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">two</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button "><a href="#" aria-controls="tableAprovadas" data-dt-idx="3"
                                        tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">3</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button "><a href="#" aria-controls="tableAprovadas" data-dt-idx="4"
                                        tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">4</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button "><a href="#" aria-controls="tableAprovadas" data-dt-idx="5"
                                        tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">5</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button disabled" id="tableAprovadas_ellipsis"><a href="#"
                                        aria-controls="tableAprovadas" data-dt-idx="6" tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">…</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button "><a href="#" aria-controls="tableAprovadas" data-dt-idx="7"
                                        tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">43</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button next" id="tableAprovadas_next"><a href="#"
                                        aria-controls="tableAprovadas" data-dt-idx="8" tabindex="0">
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

<section class="content">
    <h4>
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Disapproved</font>
        </font>
    </h4>
    <div class="box">
        <div class="box-body">
            <a href="questions_reproved.php" class="btn btn-primary" style="margin-bottom: 10px">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Exporting Disapproved Messages</font>
                </font>
            </a>
            <div id="tableReprovadas_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="tableReprovadas_length"><label><select
                                    name="tableReprovadas_length" aria-controls="tableReprovadas"
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
                        <div id="tableReprovadas_filter" class="dataTables_filter"><label>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Search</font>
                                </font><input type="search" class="form-control input-sm" placeholder=""
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
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Message</font>
                                        </font>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableReprovadas" rowspan="1"
                                        colspan="1" aria-label="User: Sort columns upward" style="width: 298px;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">User</font>
                                        </font>
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="tableReprovadas" rowspan="1"
                                        colspan="1" aria-label="Sent: Sort columns ascending" style="width: 310px;"
                                        aria-sort="descending">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Sent</font>
                                        </font>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="tableReprovadas" rowspan="1"
                                        colspan="1" aria-label="Actions: Sort columns ascending" style="width: 249px;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Actions</font>
                                        </font>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tBodyReprovadas">

                                <tr id="Nq48jQ7h8QTUBqBlKKtE" role="row" class="odd">
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Will there be room for electric car?
                                            </font>
                                        </font>
                                    </td>
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Eliane Benedita Gomes Dos Santos
                                            </font>
                                        </font>
                                    </td>
                                    <td class="sorting_1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">12/8/2020, 10:33:13 PM</font>
                                        </font>
                                    </td>
                                    <td><button type="button" data-id="Nq48jQ7h8QTUBqBlKKtE"
                                            class="btn btn-success aprovar btn-sm">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">To approve</font>
                                            </font>
                                        </button><button type="button" data-id="Nq48jQ7h8QTUBqBlKKtE"
                                            class="btn btn-info responder btn-sm" style="margin-left: 10px">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Answer</font>
                                            </font>
                                        </button></td>
                                </tr>
                                <tr id="BnVsCq3D84hriEPYzN7D" role="row" class="even">
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">What is Silvia's number?
                                            </font>
                                        </font>
                                    </td>
                                    <td>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Gilmar Santana Santos</font>
                                        </font>
                                    </td>
                                    <td class="sorting_1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">12/8/2020, 10:18:39 PM</font>
                                        </font>
                                    </td>
                                    <td><button type="button" data-id="BnVsCq3D84hriEPYzN7D"
                                            class="btn btn-success aprovar btn-sm">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">To approve</font>
                                            </font>
                                        </button><button type="button" data-id="BnVsCq3D84hriEPYzN7D"
                                            class="btn btn-info responder btn-sm" style="margin-left: 10px">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Answer</font>
                                            </font>
                                        </button></td>
                                </tr>
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
                        <div class="dataTables_info" id="tableReprovadas_info" role="status" aria-live="polite">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Showing 1 to 5 of 5 entries</font>
                            </font>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="tableReprovadas_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="tableReprovadas_previous"><a href="#"
                                        aria-controls="tableReprovadas" data-dt-idx="0" tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Previous</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button active"><a href="#" aria-controls="tableReprovadas"
                                        data-dt-idx="1" tabindex="0">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">1</font>
                                        </font>
                                    </a></li>
                                <li class="paginate_button next disabled" id="tableReprovadas_next"><a href="#"
                                        aria-controls="tableReprovadas" data-dt-idx="2" tabindex="0">
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
@endsection

@push('script')
<script>
    $(document).on('click', '#btn_update_main_message', () => {
        let main_message = $('#text_main_message').val();
        let data = {
            MAIN_MESSAGE: main_message
        };
        updateSession(data);
    });

    
</script>
@endpush