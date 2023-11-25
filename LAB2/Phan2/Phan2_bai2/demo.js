function cal(){
    var input1_s = document.getElementById("input1").value;
    if (!input1_s){
        alert ("Cần nhập giá trị của số thứ 1");
        return;
    }
    var input1 = parseInt(input1_s);

    var input2_s = document.getElementById("input2").value;
    if (!input2_s){
        alert ("Cần nhập giá trị của số thứ 2");
        return;
    }
    var input2 = parseInt(input2_s);
    
    add = document.getElementById("add");
    sub = document.getElementById("sub");
    mul = document.getElementById("mul");
    div = document.getElementById("div");
    exp = document.getElementById("exp");

    var res="";
    if (add.checked == true){
        var temp = input1 + input2
        res = input1_s + " + " + input2_s + " = " + temp.toString();
    }
    else if (sub.checked == true){
        var temp = input1 - input2
        res = input1_s + " - " + input2_s + " = " + temp.toString();
    }
    else if (mul.checked == true){
        var temp = input1 * input2
        res = input1_s + " * " + input2_s + " = " + temp.toString();
    }
    else if (div.checked == true){
        if (input2 == 0){
            alert("Cần nhập lại giá trị của số thứ 2");
            return;
        }
        var temp = input1 / input2
        res = input1_s + " / " + input2_s + " = " + temp.toString();
    }
    else if (exp.checked == true){
        var temp = input1 ** input2
        res = input1_s + " ^ " + input2_s + " = " + temp.toString();
    }
    else{
        alert("Cần lựa chọn phép tính");
        return;
    }
    document.getElementById("result").innerHTML = res;
}