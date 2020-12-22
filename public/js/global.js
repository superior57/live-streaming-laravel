$(document).on('change', '#theme_color', (event) => {
    let value = event.target.value;
    updateSession({
        BTN_BACKGROUND_COLOR: value
    });
    
})

$(document).on('click', '.approve', (event) => {
    let M_ID = event;
    console.log(M_ID);
});

function getSessions(callback) {
    let url = base_url + "get_session";
    let data = {
        "_token": "{{ csrf_token() }}",
    };

    $.get({
        url: url,
        dataType: 'JSON',
        data: data,
        success: (response) => {
            callback(response);
        },
        error: (error) => {
            console.log(error.status, error.statusText);
        }    
    });
}

function displayUpdateSession() {
    getSessions(function(response) {
        let sessions = response;
        console.log(sessions.MAIN_MESSAGE);
        $('#main_message').text(sessions.MAIN_MESSAGE);
        console.log(sessions.BTN_BACKGROUND_COLOR);
        $('#logoff').attr('style',`background-color: #${sessions.BTN_BACKGROUND_COLOR} !important`);
        $('#main_message').attr('style', `background-color: #${sessions.BTN_BACKGROUND_COLOR} !important`);
        $('#btnLogin').attr('style', `background-color: #${sessions.BTN_BACKGROUND_COLOR} !important`);        
    });
}

function updateSession(data) {
    let url = base_url + "update_session";
    data._token =  csrf_token;

    $.post({
        url: url,
        dataType: 'JSON',
        data: data,
        success: (response) => {
            console.log(response);
        },
        error: (error) => {
            console.log(error.status, error.statusText);
        }    
    });
}