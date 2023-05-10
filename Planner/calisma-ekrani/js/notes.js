const form = document.getElementById('form');
const titleInput = document.getElementById('title');
const noteInput = document.getElementById('input');
const list = document.getElementById('list');

let notes = [];

function renderNotes() {
  list.innerHTML = '';
  for (let i = 0; i < notes.length; i++) {
    const note = notes[i];
    const li = document.createElement('li');
    const title = document.createElement('h3');
    const span = document.createElement('span');
    const button = document.createElement('button');
    title.innerText = note.title;
    span.innerText = note.note;
    button.innerText = 'X';
    button.addEventListener('click', () => {
      notes.splice(i, 1);
      renderNotes();
    });
    li.appendChild(title);
    li.appendChild(span);
    li.appendChild(button);
    list.appendChild(li);
  }
}

form.addEventListener('submit', (event) => {
  event.preventDefault();
  const title = titleInput.value.trim();
  const note = noteInput.value.trim();
  if (title !== '' && note !== '') {
    const newNote = { title, note };
    notes.push(newNote);
    titleInput.value = '';
    noteInput.value = '';
    renderNotes();
  }
});

// up- down pop up kodları //

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