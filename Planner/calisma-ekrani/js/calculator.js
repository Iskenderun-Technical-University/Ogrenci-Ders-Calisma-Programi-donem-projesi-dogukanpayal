function insert(value) {
    document.getElementById('result').value += value;
}
function clearResult() {
    document.getElementById('result').value = '';
}
function backspace() {
    let result = document.getElementById('result').value;
    document.getElementById('result').value = result.substring(0, result.length - 1);
}
function calculate() {
    let result = document.getElementById('result').value;
    if (result) {
        document.getElementById('result').value = eval(result);
    }
}

function calculatorFormPopUp()
{
    var calculatorFormu = document.getElementById("calculator-form");
    calculatorFormu.style.display = "flex";
    var calculatorUpButtonFormu = document.getElementById("calculator-up-button-form");
    calculatorUpButtonFormu.style.display = "none";
    var calculatorDownButtonFormu = document.getElementById("calculator-down-button-form");
    calculatorDownButtonFormu.style.display = "flex";
}

function calculatorFormPopUpKapat()
{
    var calculatorFormu = document.getElementById("calculator-form");
    calculatorFormu.style.display = "none";
    var calculatorUpButtonFormu = document.getElementById("calculator-up-button-form");
    calculatorUpButtonFormu.style.display = "flex";
    var calculatorDownButtonFormu = document.getElementById("calculator-down-button-form");
    calculatorDownButtonFormu.style.display = "none";
}

