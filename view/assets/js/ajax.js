/**
  * Função para criar um objeto XMLHTTPRequest
  */
function xhrequest() {
    try {
        request = new XMLHttpRequest();
    } catch (IECurrent) {
        try {
            request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (IEOld) {
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (falha) {
                request = false;
            }
        }
    }
    return !request ? alert("Your browser does not support Ajax.") : request;
}

function formInsert(id) {
    let req = xhrequest();
    let form = id.elements;
    let str_value = '';
    for (let i = 0; i < form.length; i++) {
        if (form[i]['type'] !== 'button') {
            str_value += form[i]['name'] + '=' + form[i]['value'] + '&'
        }
    }
    str_value = str_value.substring(0,(str_value.length - 1));
    req.open("POST", window.location.href, true);
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    req.send(str_value);
    req.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            id.reset();
            document.getElementById("retr").innerHTML = str_value;
            console.log('deu certo');
        }
    }
}

function formDelete(id) {
    let req = xhrequest();
    req.open("POST", window.location.href, true);
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    req.send('inpdelete='+id);
    req.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            console.log('deu certo');
        }
    }
}