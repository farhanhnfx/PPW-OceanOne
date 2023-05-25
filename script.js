function calculateItems(elementId) {
    var tr = document.getElementById(elementId);
    var val = tr.getElementsByTagName("input")[0];
    var res = tr.getElementsByTagName("span")[0];
    val.value = absVal(val.value);
    res.parentElement.style.textAlign = "center";
    if (val.value > 0) {
        res.textContent = val.value*365;
    }
    else {
        res.textContent = null;
    }
    updateTotal();
}
function updateTotal() {
    var res = 0;
    for (let i = 1; i <= 10; i++) {
        var itemVal = document.getElementById("item" + i).getElementsByTagName("span")[0];
        res += Number( itemVal.textContent);
    }
    document.getElementById("result").textContent = res;
}
function absVal(val) {
    if (val < 0) {
        val *= -1;
    }
    return val;
}