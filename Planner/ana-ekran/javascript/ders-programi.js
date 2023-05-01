//input background //
function inputBackgroundFormPopUp()
{
    var inputBackgroundFormu = document.getElementById("input-background-formu");
    inputBackgroundFormu.style.display = "flex";
}
function inputBackgroundFormPopUpKapat()
{
    var inputBackgroundFormu = document.getElementById("input-background-formu");
    inputBackgroundFormu.style.display = "none";
}

function daySelectorFormPopUp(){
    var daySelectorFormu = document.getElementById("day-selector-background-formu");
    daySelectorFormu.style.display = "flex";
}

function daySelectorFormPopUpKapat(){
    var daySelectorFormu = document.getElementById("day-selector-background-formu");
    daySelectorFormu.style.display = "none";
}

// Form Kapatma //
window.onclick = function(event)
{
    var inputBackgroundFormu = document.getElementById("input-background-formu");
    if (event.target == inputBackgroundFormu) {
        inputBackgroundFormPopUpKapat();
        daySelectorFormPopUpKapat();
      }
}

// item ekleme //

// !! Pazartesi !! //
const inputBoxPazartesi = document.getElementById("input-box");
const listContainerPazartesi = document.getElementById("pazartesi-item-container");

function addTaskPazartesi(){
    if(inputBoxPazartesi.value ==='')
    {
        alert("You must write something!");
    }
    else
    {
        let li = document.createElement("li");
        li.innerHTML = inputBoxPazartesi.value;
        listContainerPazartesi.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML="\u00d7";
        li.appendChild(span);
    }
    inputBoxPazartesi.value = "";
}

listContainerPazartesi.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
    }
}, false);


// !! Salı !! //

const inputBoxSali = document.getElementById("input-box");
const listContainerSali = document.getElementById("sali-item-container");

function addTaskSali(){
    if(inputBoxSali.value ==='')
    {
        alert("You must write something!");
    }
    else
    {
        let li = document.createElement("li");
        li.innerHTML = inputBoxSali.value;
        listContainerSali.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML="\u00d7";
        li.appendChild(span);
    }
    inputBoxSali.value = "";
}

listContainerSali.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
    }
}, false);

// !! Çarşamba !! //

const inputBoxCarsamba = document.getElementById("input-box");
const listContainerCarsamba = document.getElementById("carsamba-item-container");

function addTaskCarsamba(){
    if(inputBoxCarsamba.value ==='')
    {
        alert("You must write something!");
    }
    else
    {
        let li = document.createElement("li");
        li.innerHTML = inputBoxCarsamba.value;
        listContainerCarsamba.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML="\u00d7";
        li.appendChild(span);
    }
    inputBoxCarsamba.value = "";
}

listContainerCarsamba.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
    }
}, false);

// !! Perşembe !! //

const inputBoxPersembe = document.getElementById("input-box");
const listContainerPersembe = document.getElementById("persembe-item-container");

function addTaskPersembe(){
    if(inputBoxPersembe.value ==='')
    {
        alert("You must write something!");
    }
    else
    {
        let li = document.createElement("li");
        li.innerHTML = inputBoxPersembe.value;
        listContainerPersembe.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML="\u00d7";
        li.appendChild(span);
    }
    inputBoxPersembe.value = "";
}

listContainerPersembe.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
    }
}, false);

// !! Cuma !! //

const inputBoxCuma = document.getElementById("input-box");
const listContainerCuma = document.getElementById("cuma-item-container");

function addTaskCuma(){
    if(inputBoxCuma.value ==='')
    {
        alert("You must write something!");
    }
    else
    {
        let li = document.createElement("li");
        li.innerHTML = inputBoxCuma.value;
        listContainerCuma.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML="\u00d7";
        li.appendChild(span);
    }
    inputBoxCuma.value = "";
}

listContainerCuma.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
    }
}, false);

// !! Cumartesi !! //

const inputBoxCumartesi = document.getElementById("input-box");
const listContainerCumartesi = document.getElementById("cumartesi-item-container");

function addTaskCumartesi(){
    if(inputBoxCumartesi.value ==='')
    {
        alert("You must write something!");
    }
    else
    {
        let li = document.createElement("li");
        li.innerHTML = inputBoxCumartesi.value;
        listContainerCumartesi.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML="\u00d7";
        li.appendChild(span);
    }
    inputBoxCumartesi.value = "";
}

listContainerCumartesi.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
    }
}, false);

// !! Pazar !! //

const inputBoxPazar = document.getElementById("input-box");
const listContainerPazar = document.getElementById("pazar-item-container");

function addTaskPazar(){
    if(inputBoxPazar.value ==='')
    {
        alert("You must write something!");
    }
    else
    {
        let li = document.createElement("li");
        li.innerHTML = inputBoxPazar.value;
        listContainerPazar.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML="\u00d7";
        li.appendChild(span);
    }
    inputBoxPazar.value = "";
}

listContainerPazar.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
    }
}, false);