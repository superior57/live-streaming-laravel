window.IntervalTime = 1000;

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

$(document).on('click', '.paginate_button_awaiting', (event) => {
    let page_num = $(event.target).attr('data-dt-idx');
    let per_page = getGValue('message_awaiting_length');
    setGValue('page_num_awaiting', page_num);
    messages_awaiting(per_page, page_num);
});

$(document).on('click', '.paginate_button_approved', (event) => {
    let page_num = $(event.target).attr('data-dt-idx');
    let per_page = getGValue('message_approved_length');
    setGValue('page_num_approved', page_num);
    messages_approved(per_page, page_num);
});

$(document).on('click', '.paginate_button_disapproved', (event) => {
    let page_num = $(event.target).attr('data-dt-idx');
    let per_page = getGValue('message_disapproved_length');
    setGValue('page_num_disapproved', page_num);
    messages_disapproved(per_page, page_num);
});

$(document).on('click', '#modal', (event) => {
    if(event.target.id == 'modal') {
        $('#txt_answer').val("");
        $('#modal').hide();
    }
});

function setGValue(key, value) {
    localStorage.setItem(key, value);
}

function getGValue(key) {
    return localStorage.getItem(key);    
}

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

function messages_awaiting(per_page, page_num) {
    getMessages('awaiting', per_page, page_num, (response) => {
        let table_body_id = "tbody_awaiting_mesages";
        let page = response.messages;
        let data = page.data;
        // console.log("page", page);

        const table = $(`#${table_body_id}`);
        table.empty();
        let el_tbody = data.map((d) => {
            let user = d.user;
            table.append(`
                <tr id="tr_awaitingMsg_${d.M_CODE}" role="row" class="odd">
                    <td>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">${d.MESSAGE}</font>
                        </font>
                    </td>
                    <td>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">${user.f_name} ${user.l_name}</font>
                        </font>
                    </td>
                    <td class="sorting_1">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">${d.created_at}</font>
                        </font>
                    </td>
                    <td><button type="button" data-id="${d.M_CODE}"
                            class="btn btn-success approve btn-sm" onclick="messageToApprove(${d.M_CODE})">
                            To approve
                        </button>
                        <button type="button" data-id="${d.M_CODE}"
                            class="btn btn-danger reprovar btn-sm" onclick="messageToDisapprove(${d.M_CODE})">
                            Disapprove
                        </button>
                        <button type="button" data-id="${d.M_CODE}"
                            class="btn btn-info responder btn-sm" style="margin-left: 10px" onclick="openModal(${d.M_CODE})">
                            Answer
                        </button></td>
                </tr>
            `)
        }); 

        displayPaginationBar('table_awaiting_paginate', page.current_page, page.last_page, 'awaiting');
        $('#table_awaiting_info').text(`Showing ${page.current_page} to ${page.per_page} of ${page.total} entries`);
    });
}

function messages_approved(per_page, page_num) {
    getMessages('approved', per_page, page_num, (response) => {
        let table_body_id = "tbody_approved_messages";
        let page = response.messages;
        let data = page.data;
        // console.log("page", page);

        const table = $(`#${table_body_id}`);
        table.empty();
        let el_tbody = data.map((d) => {
            let user = d.user;
            table.append(`
                <tr id="tr_awaitingMsg_${d.M_CODE}" role="row" class="odd">
                    <td>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">${d.MESSAGE}</font>
                        </font>
                    </td>
                    <td>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">${user.f_name} ${user.l_name}</font>
                        </font>
                    </td>
                    <td class="sorting_1">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">${d.created_at}</font>
                        </font>
                    </td>
                    <td><button type="button" data-id="${d.M_CODE}"
                            class="btn btn-danger reprovar btn-sm" onclick="messageToDisapprove(${d.M_CODE})">
                            Disapprove
                        </button><button type="button" data-id="${d.M_CODE}"
                            class="btn btn-info responder btn-sm" style="margin-left: 10px" onclick="openModal(${d.M_CODE})">
                            Answer
                        </button></td>
                </tr>
            `)
        }); 
        displayPaginationBar('table_approved_paginate', page.current_page, page.last_page, 'approved');
        $('#table_approved_info').text(`Showing ${page.current_page} to ${page.per_page} of ${page.total} entries`);
    });
}

function messages_disapproved(per_page, page_num) {
    getMessages('disapproved', per_page, page_num, (response) => {
        let table_body_id = "tbody_disapproved_messages";
        let page = response.messages;
        let data = page.data;
        // console.log("page", page);

        const table = $(`#${table_body_id}`);
        table.empty();
        let el_tbody = data.map((d) => {
            let user = d.user;
            table.append(`
                <tr id="tr_awaitingMsg_${d.M_CODE}" role="row" class="odd">
                    <td>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">${d.MESSAGE}</font>
                        </font>
                    </td>
                    <td>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">${user.f_name} ${user.l_name}</font>
                        </font>
                    </td>
                    <td class="sorting_1">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">${d.created_at}</font>
                        </font>
                    </td>
                    <td><button type="button" data-id="${d.M_CODE}"
                            class="btn btn-success aprovar btn-sm" onclick="messageToApprove(${d.M_CODE})">
                            To approve
                        </button><button type="button" data-id="${d.M_CODE}"
                            class="btn btn-info responder btn-sm" style="margin-left: 10px" onclick="openModal(${d.M_CODE})">
                            Answer
                        </button></td>
                </tr>
            `)
        }); 

        displayPaginationBar('table_disapproved_paginate', page.current_page, page.last_page, 'disapproved');
        $('#table_disapproved_info').text(`Showing ${page.current_page} to ${page.per_page} of ${page.total} entries`);
    });
}

function getMessages(status, per_page, page_num, callback) {
    let url = base_url + `get_message/${status}/${per_page}/${page_num}`;

    $.get({
        url: url,
        dataType: "JSON",
        data: {
            _token: csrf_token
        },
        success: (response) => {
            callback(response);
        },
        error: (error) => {
            console.log(error.status, error.statusText);
        }
    });
}

function getUsers(per_page, page_num, callback) {

    let url = base_url + `get_users/${per_page}/${page_num}`;

    $.get({
        url: url,
        dataType: "JSON",
        data: {
            _token: csrf_token
        },
        success: (response) => {
            callback(response);
        },
        error: (error) => {
            console.log(error.status, error.statusText);
        }
    });
}

function displayPaginationBar(wrap_id, cur_page, last_page, set_class_name) {
    const pagination = $(`#${wrap_id}`).find('.pagination')[0];
    let element = '';
    let cur_paginate = parseInt(cur_page / 5);
    let start = cur_paginate * 5,
        end = (start + 5) > last_page ? last_page : (start + 5);

    element += `
        <li class="paginate_button_${set_class_name} previous ${cur_page == 1 ? 'disabled' : ''}" id="table_awaiting_previous"><a
            aria-controls="tableAguardando" data-dt-idx="${(cur_page - 1) < 0 ? '' : (cur_page - 1)}" tabindex="0">
            Previous
        </a></li>
    `
    if(last_page > 5) {
        for ( var i = start; i <= end; i ++ ) {
            if(i != 0) {
                element += `
                <li class="paginate_button_${set_class_name} ${i == cur_page ? 'active' : ''}">
                    <a aria-controls="tableAguardando" data-dt-idx="${i}" tabindex="0">
                        ${i}
                    </a>
                </li>
                `
            }            
        } 
        if(end != last_page) {
            element += `
                <li class="paginate_button_${set_class_name} disabled">
                    <a aria-controls="tableAguardando" data-dt-idx="" tabindex="0">
                        ...
                    </a>
                </li>
                <li class="paginate_button_${set_class_name}">
                    <a aria-controls="tableAguardando" data-dt-idx="{!! $last_page !!}" tabindex="0">
                        ${last_page}
                    </a>
                </li>
            `    
        }       
    } else {
        for ( var i = start + 1; i <= last_page; i ++ )  {
            element += `
                <li class="paginate_button_${set_class_name} ${i == cur_page ? 'active' : ''}">
                    <a aria-controls="tableAguardando" data-dt-idx="${i}" tabindex="0">
                        ${i}
                    </a>
                </li>
            `
        }
    }

    if(cur_page <= last_page-1) {
        element += `
            <li class="paginate_button_${set_class_name} next ${cur_page == last_page ? 'disabled' : ''}" id="table_awaiting_next">
                <a aria-controls="tableAguardando" data-dt-idx="${cur_page <= last_page ? cur_page + 1 : ''}" tabindex="0" role="button">
                    Next
                </a>
            </li>
        `
    }
    
    $(pagination).empty();
    $(pagination).append(element);
}

function displayUsers(per_page, page_num) {
    const table = $('#tbody_users');
    getUsers(per_page, page_num, (response) => {
        let page = response.user_list;
        let data = page.data;
        console.log("page", page);
        table.empty();

        data.map((user) => {           
            table.append(`
                <tr id="${user.id}" role="row" class="odd">
                    <td class="sorting_1">${user.f_name} ${user.l_name}</td>
                    <td>${user.email}</td>
                    <td>0s</td>
                    <td>${user.created_at}</td>
                </tr>
            `);
        }); 

        displayPaginationBar('table_user_paginate', page.current_page, page.last_page, 'user');
        $('#table_user_info').text(`Showing ${page.current_page} to ${page.per_page} of ${page.total} entries`);
    });
}

function messageToApprove(message_id) {
    let url = base_url + `message_to_approve/${message_id}`;
    $.post({
        url: url,
        dataType: "JSON",
        data: {
            _token: csrf_token
        },
        success: (response) => {
            console.log(response);
            // $(`#tr_awaitingMsg_${message_id}`).hide();
        },
        error: (error) => console.log(error.status, error.statusText)
    });
}

function messageToDisapprove(message_id) {
    let url = base_url + `message_to_disapprove/${message_id}`;
    $.post({
        url: url,
        dataType: "JSON",
        data: {
            _token: csrf_token
        },
        success: (response) => {
            console.log(response);
            // $(`#tr_awaitingMsg_${message_id}`).hide();
        },
        error: (error) => console.log(error.status, error.statusText)
    });
}

function openModal(message_id) {    
    $('#message_id').val(message_id);
    getMessageDetail(message_id, (response) => {
        let message = response.message;
        $('#txt_answer').val(message.ANSWER);
    })
    $('#modal').show();
}

function closeModal() {
    $('#modal').hide();
}

function submitAnswer() {
    let message_id = $('#message_id').val();
    if(message_id) {
        let url = base_url + `message_answer/${message_id}`;
        let txt_answer = $('#txt_answer').val();
        $.post({
            url: url,
            dataType: "JSON",
            data: {
                _token: csrf_token,
                answer: txt_answer
            },
            success: (response) => {
                console.log(response);
                $('#txt_answer').val("")
                closeModal();
            },
            error: (error) => console.log(error.status, error.statusText)
        });
    }
}

function getMessageDetail(message_id, callback) {
    let url = base_url + `get_message_detail/${message_id}`;
    $.get({
        url: url,
        dataType: "JSON",
        data: {
            _token: csrf_token
        },
        success: (response) => callback(response),
        error: (error) => console.log(error.status, error.statusText)
    });
}

function displayApprovedMessage() {
    getMessages('approved', 0, 0, (response) => {
        console.log(response);
        let wrap_message = $('#wrap_message');
        let messages = response.messages;
        wrap_message.empty();
        
        messages.map((message) => {
            let user = message.user;
            let answer_user = message.answer_user;
            wrap_message.append(`
                <div class="msg" id="${message.M_CODE}">
                    <div class="msgTopo"><span class="msgDisse">
                            <b> ${user.f_name} ${user.l_name} </b>
                            said:
                        </span><span class="msgTime">${message.created_at}</span></div>
                    <div class="msgContent">
                        ${message.MESSAGE}
                    </div>

                    ${
                        message.answer_user ? `
                            <div class="msgAnswer" data-id="cb1V5WKMvXnuBttmlKpW">
                                <div class="msgTopo"><span class="msgADisse">
                                        <b>${answer_user.f_name} ${answer_user.l_name}</b> said:</span>
                                    <span class="msgTime">${message.updated_at}</span>
                                </div>
                                <div class="msgContent">${message.ANSWER}</div>
                            </div>
                        ` : ``
                    }
                </div>
            `)
        })
    });
}