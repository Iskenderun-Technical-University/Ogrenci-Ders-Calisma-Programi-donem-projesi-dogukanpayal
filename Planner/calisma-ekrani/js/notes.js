
//up- down pop up kodları //

function notEkleButtonPopUp()
{
  var notEkleFormu = document.getElementById("notes-container-form");
  notEkleFormu.style.display = "flex";
  var notesUpButtonFormu = document.getElementById("notes-up-button-form");
  notesUpButtonFormu.style.display = "none";
  var notesDownButtonFormu = document.getElementById("notes-down-button-form");
  notesDownButtonFormu.style.display = "flex";
}

function notEkleButtonPopUpKapat()
{
  var notEkleFormu = document.getElementById("notes-container-form");
  notEkleFormu.style.display = "none";
  var notesUpButtonFormu = document.getElementById("notes-up-button-form");
  notesUpButtonFormu.style.display = "flex";
  var notesDownButtonFormu = document.getElementById("notes-down-button-form");
  notesDownButtonFormu.style.display = "none";
}


function notesFormPopUp()
{
    var notEkleFormu = document.getElementById("notes-form");
    notEkleFormu.style.display = "flex";
    var notesUpButtonFormu = document.getElementById("notes-up-button-form");
    notesUpButtonFormu.style.display = "none";
    var notesDownButtonFormu = document.getElementById("notes-down-button-form");
    notesDownButtonFormu.style.display = "flex";
}

function notesFormPopUpKapat()
{
    var notEkleFormu = document.getElementById("notes-form");
    notEkleFormu.style.display = "none";
    var notesUpButtonFormu = document.getElementById("notes-up-button-form");
    notesUpButtonFormu.style.display = "flex";
    var notesDownButtonFormu = document.getElementById("notes-down-button-form");
    notesDownButtonFormu.style.display = "none";
}

function notesInputFormPopUp()
{
    var notesInputFormu = document.getElementById("notes-form");
    notesInputFormu.style.display = "flex";
}

function notesInputFormPopUpKapat()
{
    var notesInputFormu = document.getElementById("notes-form");
    notesInputFormu.style.display = "none";
}