function day() {
    var day = document.getElementById("day");
    if (day.childNodes.length > 3) return;
    for (var i = 1; i < 32; i++) {
        var options = document.createElement("option");
        options.value = i;
        options.text = i;
        day.appendChild(options);
    }
}

function month() {
    var month = document.getElementById("month");
    if (month.childNodes.length > 3) return;
    var val = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    for (var i = 1; i < 13; i++) {
        var options = document.createElement("option");
        options.value = i;
        options.text = val[i - 1];
        month.appendChild(options);
    }
}

function year() {
    var year = document.getElementById("year");
    if (year.childNodes.length > 3) return;
    for (var i = 2023; i > 1920; i--) {
        var options = document.createElement("option");
        options.value = i;
        options.text = i;
        year.appendChild(options);
    }
}

function reset() {
    document.getElementById("firstname").value = "";
    document.getElementById("lastname").value = "";
    document.getElementById("email").value = "";
    document.getElementById("password").value = "";
    var day = document.getElementById("day");
    day.innerHTML = "";
    var month = document.getElementById("month");
    month.innerHTML = "";
    var year = document.getElementById("year");
    year.innerHTML = "";
    document.getElementById("male").checked = false;
    document.getElementById("female").checked = false;
    document.getElementById("other").checked = false;
    document.getElementById("country").selectedIndex = 0;
    document.getElementById("about").value = "";
}

function submit() {
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var day = document.getElementById("day");
    var month = document.getElementById("month");
    var year = document.getElementById("year");
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var other = document.getElementById("other");
    var country = document.getElementById("country");

    if (firstname.length < 2 || firstname.length > 30) {
        alert("Chuỗi First phải có từ 2-30 ký tự");
        return;
    }

    if (lastname.length < 2 || lastname.length > 30) {
        alert("Chuỗi Lastname phải có từ 2-30 ký tự");
        return;
    }
    if (!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        alert("Email phải có định dạng: <sth>@<sth>.<sth>")
        return;
    }
    if (password.length < 2 || password.length > 30) {
        alert("Chuỗi Password phải có từ 2-30 ký tự");
        return;
    }
    if (day.options[day.selectedIndex].value == "Day") {
        alert("Cần chọn ngày sinh");
        return;
    }
    if (month.options[month.selectedIndex].value == "Month") {
        alert("Cần chọn tháng sinh");
        return;
    }
    if (year.options[year.selectedIndex].value == "Year") {
        alert("Cần chọn năm sinh");
        return;
    }
    if (male.checked == false && female.checked == false && other.checked == false) {
        alert("Cần chọn giới tính");
        return;
    }
    if (country.options[country.selectedIndex].text == "Country") {
        alert("Cần chọn Country");
        return;
    }
    if (about.length > 10000) {
        alert("About có tối đa 10000 ký tự");
        return;
    }
    alert("Complete!");
}