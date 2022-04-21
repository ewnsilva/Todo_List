/* window.onload = async function ()
{
    let taskList = await searchTask();
    mountTasksList(taskList);
} */

function mountTasksList(tasks){
    let list = document.querySelector('.container ul');
    tasks.forEach(function(task){
        let li = document.createAttribute('li');
        li.value = task.name;
        li.classList.add('item-done');
        list.appendChild(li);
    })
}

async function searchTask(){
    return await fetch('/src/app/list.php')
    .then(resp=>resp.json())
    .then(response=>response);
}

function submitForm(){
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event){
        event.preventDefault();
        const task = document.querySelector('form input');

    })
}

function insertTask(form){

    const form = new FormData();
    form.append('tasks', task);

    return fetch('/src/app/create.php', {
        method: 'POST',
        body: form
    }).then(resp => resp.json())
        .then(response => response);
}
