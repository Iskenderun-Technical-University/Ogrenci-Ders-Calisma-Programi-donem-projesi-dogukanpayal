//input background //
function inputBackgroundFormPopUp()
{
    var inputBackgroundFormu = document.getElementById("goals-input-background-formu");
    inputBackgroundFormu.style.display = "flex";
}
function inputBackgroundFormPopUpKapat()
{
    var inputBackgroundFormu = document.getElementById("goals-input-background-formu");
    inputBackgroundFormu.style.display = "none";
}

function goalSelectorFormPopUp(){
    var goalSelectorFormu = document.getElementById("goal-selector-background-formu");
    goalSelectorFormu.style.display = "flex";
}

function goalSelectorFormPopUpKapat(){
    var goalSelectorFormu = document.getElementById("goal-selector-background-formu");
    goalSelectorFormu.style.display = "none";
}


// item ekleme //

// !! Haftalik !! //

const inputBoxHaftalik = document.getElementById("goal-input-box");
const listContainerHaftalik = document.getElementById("haftalik-item-container");

function addTaskHaftalik(){
    if(inputBoxHaftalik.value ==='')
    {
        alert("You must write something!");
    }
    else
    {
        let li = document.createElement("li");
        li.innerHTML = inputBoxHaftalik.value;
        listContainerHaftalik.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML="\u00d7";
        li.appendChild(span);
    }
    inputBoxHaftalik.value = "";
}

listContainerHaftalik.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
    }
}, false);

// !! Aylik !! //

const inputBoxAylik = document.getElementById("goal-input-box");
const listContainerAylik = document.getElementById("aylik-item-container");

function addTaskAylik(){
    if(inputBoxAylik.value ==='')
    {
        alert("You must write something!");
    }
    else
    {
        let li = document.createElement("li");
        li.innerHTML = inputBoxAylik.value;
        listContainerAylik.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML="\u00d7";
        li.appendChild(span);
    }
    inputBoxAylik.value = "";
}

listContainerAylik.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
    }
}, false);

// !! Yillik !! //

const inputBoxYillik = document.getElementById("goal-input-box");
const listContainerYillik = document.getElementById("yillik-item-container");

function addTaskYillik(){
    if(inputBoxYillik.value ==='')
    {
        alert("You must write something!");
    }
    else
    {
        let li = document.createElement("li");
        li.innerHTML = inputBoxYillik.value;
        listContainerYillik.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML="\u00d7";
        li.appendChild(span);
    }
    inputBoxYillik.value = "";
}

listContainerYillik.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
    }
}, false);
