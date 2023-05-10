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