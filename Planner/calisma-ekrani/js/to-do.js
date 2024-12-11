// input form kodları //

function todoInputBackgroundFormPopUp()
{
    var todoInputBackgroundFormu = document.getElementById("todo-input-background-formu");
    todoInputBackgroundFormu.style.display = "flex";
}
function todoInputBackgroundFormPopUpKapat()
{
    var todoInputBackgroundFormu = document.getElementById("todo-input-background-formu");
    todoInputBackgroundFormu.style.display = "none";
}

// item ekleme //

const todoInputBox = document.getElementById("todo-input-box");
const todoListContainer = document.getElementById("todo-item-container");

function todoAddTask(){
    if(todoInputBox.value ==='')
    {
        alert("You must write something!");
    }
    else
    {
        let li = document.createElement("li");
        li.innerHTML = todoInputBox.value;
        todoListContainer.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML="\u00d7";
        li.appendChild(span);
    }
    todoInputBox.value = "";
}

todoListContainer.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
    }
}, false);