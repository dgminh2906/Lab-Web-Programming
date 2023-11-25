function createTable() {
  var table = document.getElementById("zone");
  if (table.childNodes.length != 0) {
    alert("Cần Remove table trước khi thực hiện thao tác này");
    return;
  }
  var tagTable = document.createElement("table");
  for (var i = 0; i < 2; i++) {
    var tagRow = document.createElement("tr");
    tagTable.appendChild(tagRow);
    for (var j = 0; j < 2; j++) {
      var tagColumn = document.createElement("td");
      tagColumn.classList.add('p-3');
      tagRow.appendChild(tagColumn);
    }
  }
  table.appendChild(tagTable);
}

function addRow() {
  var table = document.getElementById("zone");
  if (table.childNodes.length == 0) {
    alert("Cần Create table trước khi thực hiện thao tác này");
    return;
  }
  var tagTable = table.firstElementChild;
  var countCol = tagTable.childNodes[0].childNodes.length;
  if (countCol == 0) {
    alert("Cần Create table trước khi thực hiện thao tác này");
    return;
  }
  var tagRow = document.createElement("tr");
  tagTable.appendChild(tagRow);
  for (var j = 0; j < countCol; j++) {
    var tagColumn = document.createElement("td");
    tagColumn.classList.add('p-3');
    tagRow.appendChild(tagColumn);
  }
}

function addCol() {
  var table = document.getElementById("zone");
  if (table.childNodes.length == 0) {
    alert("Cần Create table trước khi thực hiện thao tác này");
    return;
  }
  var tagTable = table.firstElementChild;
  var countRow = tagTable.childNodes.length;
  if (countRow == 0) {
    alert("Cần Create table trước khi thực hiện thao tác này");
    return;
  }
  for (var i = 0; i < countRow; i++) {
    var tagRow = tagTable.childNodes[i];
    var tagColumn = document.createElement("td");
    tagColumn.classList.add('p-3');
    tagRow.appendChild(tagColumn);
  }
}

function remove() {
  var table = document.getElementById("zone");
  if (table.childNodes.length == 0) {
    alert("Cần Create table trước khi thực hiện thao tác này");
    return;
  }
  var tagTable = table.firstElementChild;
  table.removeChild(tagTable);
}

function removeRow() {
  var table = document.getElementById("zone");
  if (table.childNodes.length == 0) {
    alert("Cần Create table trước khi thực hiện thao tác này");
    return;
  }
  var tagTable = table.firstElementChild;
  var countRow = tagTable.childNodes.length;
  var input = document.getElementById("rowinput").value;
  if (!input) {
    alert("Nhập vị trí hàng cần xóa");
    return;
  }
  if (input >= countRow || input < 0) {
    alert("Không tồn tại hàng cần xóa, vui lòng nhập lại");
    return;
  }
  tagTable.removeChild(tagTable.childNodes[input]);
}

function removeCol() {
  var table = document.getElementById("zone");
  if (table.childNodes.length == 0) {
    alert("Cần Create table trước khi thực hiện thao tác này");
    return;
  }
  var tagTable = table.firstElementChild;
  var countRow = tagTable.childNodes.length;
  var countCol = tagTable.childNodes[0].childNodes.length;
  var input = document.getElementById("colinput").value;
  if (!input) {
    alert("Nhập vị trí cột cần xóa");
    return;
  }
  if (input >= countCol || input < 0) {
    alert("Không tồn tại cột cần xóa, vui lòng nhập lại");
    return;
  }
  for (var i = 0; i < countRow; i++) {
    var tagRow = tagTable.childNodes[i];
    tagRow.removeChild(tagRow.childNodes[input]);
  }
}
