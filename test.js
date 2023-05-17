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
    var row = document.createElement("div");
    var col = document.createElement("div");
    var table = document.createElement("table");
    row.className = "row justify-content-center";
    col.className = "col-md-5";
    output.innerHTML = '<h3 style="text-align: center;">Thanks for your response. Your data recorded as:</h3>';
    table.innerHTML = '<tr><td>Nama</td><td>:&emsp;</td><td> ' + nama + '</td></tr>';
    table.innerHTML += '<tr><td>Email</td><td>:&emsp;</td><td> ' + email + '</td></tr>';
    table.innerHTML += '<tr><td>Message&emsp;</td><td>:&emsp;</td><td> ' + msg + '</td></tr>';
    col.appendChild(table);
    row.appendChild(col);
    output.appendChild(row);
}