function setCookie() {
    getname = document.getElementById("name").value;
    value = document.getElementById("value").value;
    if (!getname) {
        alert("Chưa nhập Name");
    }
    else if (!value) {
        alert("Chưa nhập Value");
    }
    else {
        document.cookie = `${getname}=${value}; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/;`;
        document.getElementById("name").value = "";
        document.getElementById("value").value = "";
    }
    showCookie();
}

function check(getname) {
    var count = document.cookie.split("; ");
    for (var i = 0; i < count.length; i++) {
        var cookie = count[i].split("=");
        if (cookie[0] == getname) return 1;
    }
    return 0;
}

function deleteCookie() {
    getname = document.getElementById("name").value;
    value = document.getElementById("value").value;
    if (!getname) {
        alert("Chưa nhập Name")
    }
    else if (check(getname) == 1) {
        document.cookie = `${getname}=; expires=Sun, 29 June 2003 7:30:00 GMT; path=/;`;
        document.getElementById("name").value = "";
        document.getElementById("value").value = "";
    }
    else {
        alert("Không tồn tại Cookie cần xóa");
        document.getElementById("name").value = "";
        document.getElementById("value").value = "";
    }
    showCookie();
}

function displayCookie() {
    if (document.cookie == "") return;
    var cookies = document.cookie.split(';');
    var table = document.querySelector("table");
    for(let i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].trim();
        var row = table.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        cell1.innerHTML = cookie.split('=')[0];
        cell2.innerHTML = cookie.split('=')[1];
    }
}

function showCookie() {
    var table = document.querySelector("table");
    table.innerHTML = "<tr><th>Name</th><th>Value</th></tr>"
    displayCookie();
}