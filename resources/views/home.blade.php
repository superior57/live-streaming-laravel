@extends('layouts.master')

@push('style')
<style>
#questions {
    margin-top: 10px;
    border: none;
    background-color: #fff;
    padding: 15px;
    color: #000;
    margin-bottom: 10px;
}

#sendMsg {
    margin-top: 10px;
    height: 32px;
}

#sendMsg textarea {
    resize: none;
    width: 70%;
    border: 0px;
    padding: 5px 10px;
    margin-left: 10%;
    height: 30px;
    float: left;
    background-color: #dad8d9;
    color: #000;
}

#sendMsg span {
    float: left;
    padding: 5px;
    width: 12%;
    height: 30px;
    background-color: #000;
    cursor: pointer;
}

#sendMsg span i {
    font-size: 20px;
    color: #FFF;
}

#msgs {
    height: 250px;
    overflow-y: scroll
}

#topo h4 {
    font-size: 24px;
    margin-top: 0;
    color: #000;
    font-weight: bold;
}

.msg {
    padding: 10px 0;
    margin: 0 10px;
    border-bottom: 1px solid #5c5a5b;
}

.msgDisse,
.msgADisse,
.msgTime {
    font-weight: bold;
    color: #222;
}

.msgDisse b {
    color: #8F4046;
}

.msgADisse b {
    color: #8F4046;
}

.msgTime {
    float: right;
}

.msgContent {
    margin-top: 5px;
}

.msgAnswer {
    margin-left: 25px;
    margin-top: 10px;
}

#texto {
    text-align: center;
}

.content {
    margin-bottom: 20px;
}

.jw-error-msg {
    display: none !important;
}

.alert-info {
    border-radius: 0;
    background-color: #440b6c;
    border: none;
    margin-bottom: 0px;
    color: #fff;
    font-weight: bold;
}



.pre-logo {
    margin-bottom: 20px;
    margin-top: 20px;
}

.texto-topo {
    text-align: right;
}

.texto-topo h1 {
    color: #cf163f;
    font-weight: bold;
    font-size: 2.5rem;
    margin-bottom: 0;
}

.texto-topo h3 {
    color: #820b0f;
    font-size: 2.5rem;
    margin-top: 0;
}



.pessoas {
    min-height: 100vh;
}

#player {
    background-color: #000;
    /* background: url(/img/logo-back.png); */
    /* height: 401px;  */
    width: 100%;
}


@media screen and (min-width: 1400px) {
    .pre-logo {
        margin-top: 50px;
        margin-bottom: 50px;
    }
}

@media screen and (max-width: 1199px) {
    #msgs {
        height: 200px;
    }
}

@media screen and (max-width: 992px) {
    #msg-principal {
        margin-top: 10px;
    }

    .texto-topo {
        text-align: center;
        margin-bottom: 1rem;
    }
}

@media screen and (max-width: 579px) {
    #logoff {
        margin-bottom: 10px;
    }

    .info {
        margin-top: 15px;
    }
}

@media (max-width: 450px) {
    #player {
        height: 200px; 
        width: 100%;
    }
}
</style>
@endpush

@section('content')
<div class="pessoas">
    <div class="container">
        <div class="nav-header">
            <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3 col-sm-offset-2 col-md-offset-0 pre-logo">
                <img class="img-responsive" src="{{ asset('img/logo.png') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 content">
                <div class="row info">
                    <div class="col-xs-12 col-md-8 player">
                        <section id="player_stream">
                            <div id="player">
                                <iframe id="player"
                                    src="https://videos.sproutvideo.com/embed/449cd6bc1918e2cbcd/4286bd09fc1bbbb7"
                                    allowfullscreen="" frameborder="0" height="100%" width="100%"></iframe>
                            </div>
                        </section>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <section>
                            <div class="alert alert-info" id="main_message">{!! $sessions->MAIN_MESSAGE !!}</div>
                        </section>
                        <section id="questions">
                            <div id="topo">
                                <h4>Mensagens!</h4>
                            </div>
                            <div id="msgs">

                            </div>
                            <div id="sendMsg">
                                <textarea id="message" placeholder="Envie sua mensagem..."></textarea>
                                <span id="btn_send_message"><i class="fa fa-send"></i></span>
                            </div>
                        </section>
                        <section>
                            <button id="logoff" class="btn btn-primary w-100 full-width" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                SAIR
                            </button>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>

responsivePlayer();
var msgLocker = 0;

function setLocker(value){
    msgLocker = value;
}

function getLocker(){
    return msgLocker;
}

$(window).on('resize', () => {
    responsivePlayer();
});

$(document).on('click', '#btn_send_message', () => {
    let message = $('#message').val();
    if(message) {
        sendMessage(message);
    }
    
});

function responsivePlayer() {
    let curWidth = $('#player').width();
    $('#player').height(curWidth * 9 / 16);
}



function sendMessage(message) {
    let url = base_url + "send_message";
    setLocker(1);

    $.post({
        url: url,
        dataType: "JSON",
        data: {
            _token: csrf_token,
            message: message
        },
        success: (response) => {
            console.log(response);
            $("#message").val("");
            $("#msgs").append('<div class="msg"><div class="alert alert-success"><p>Mensagem enviada com sucesso!</p></div></div>');
            var objDiv = document.getElementById("msgs");
                objDiv.scrollTop = objDiv.scrollHeight;
            setLocker(0);
        },
        error: (error) => {
            console.log(error.status, error.statusText);
        }
    });   
    
}

</script>
@endpush