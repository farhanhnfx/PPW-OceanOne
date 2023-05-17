function edit_content() {
    var content_align = document.getElementById('s2-align-content');
    var content_kickstart = document.getElementById("s2-kickstart-content");
    var textarea = document.createElement("textarea");
    textarea.id = "edit-text";
    var button = document.createElement("button");
    button.innerHTML = "Replace Content";
    button.className = "normal-button";
    textarea.rows = 3;
    textarea.cols = 50;
    textarea.appendChild(document.createTextNode(content_kickstart.innerText))
    // console.log(content_kickstart);
    content_align.innerText = "";
    content_align.appendChild(textarea);
    content_align.appendChild(button);
    button.addEventListener("click", function() {replace_button()});
}
function replace_button() {
    var textarea = document.getElementById("edit-text");
    var content_align = document.getElementById('s2-align-content');
    content_align.innerHTML = textarea.value;
    textarea.remove();
}
function send_response() {
    var nama = document.getElementById("form-name").value;
    var email = document.getElementById('form-email').value;
    var msg = document.getElementById('form-msg').value;
    var output = document.getElementById('response-output');
    output.innerHTML = '<h3>Thanks for your response. Your data recorded as:</h3>';
    output.innerHTML += '<p>Nama&emsp;&ensp;&nbsp;: ' + nama;
    output.innerHTML += '<p>Email&emsp;&emsp;&nbsp;: ' + email;
    output.innerHTML += '<p>Message&ensp;: ' + msg;
}