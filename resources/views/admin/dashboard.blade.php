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

<!-- Awaiting table -->
@include('admin.dashboard-sections.awaiting')
@include('admin.dashboard-sections.approved')
@include('admin.dashboard-sections.disapproved')


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