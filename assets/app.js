window.onload = async function ()
{
    let taskList = await searchTasks();
    mountTasksList(tasksList);
}

function mountTasksList(tasks)
{
    let list = document.querySelector('.container ul');

    list.innerText = '';

    tasks.forEach(function(task){
        let button = document.createElement('button');
        button.setAttribute('value',task.id);
        button.classList.add('button-remove')
        button.innerText = "Remover";
        button.addEventListener('click', async function(){

            removeTask(task.id);

            let tasksList = await searchTasks();

            mountTasksList(tasksList);
        });

        const span = document.createElement('span');
        span.classList.add('task-description');
        span.innerText = task.description;

        const checkbox = document.createElement('input');
        checkbox.setAttribute('type', 'checkbox');
        checkbox.setAttribute('value', task.id);
        checkbox.classList.add('check-done');
        checkbox.addEventListener('click', function(){
            markToFinished(task.id);
        })
    

        const div = document.createElement('div');
        div.appendChild(checkbox);
        div.appendChild(span);
        div.appendChild(button);
        let li = document.createElement('li');
        li.appendChild(div);
        /* li.innerText = task.description; */
        /* li.classList.add('item-done') */
        
        list.appendChild(li);
    })
}

async function searchTasks()
{
    return await fetch ('/../src/app/list.php')
    .then(resp=>resp.json())
    .then(response=>response)
}

function submitForm()
{
    const form = document.querySelector('form');
    form.addEventListener('submit', async function(event) {
        event.preventDefault();

        const task = document.querySelector('form input');

        await insertTask(task.value);

        let tasksList = await searchTasks();

        mountTasksList(tasksList)
    })
}

function insertTask(task)
{
    const form = new FormData();
    form.append('task', task);

    return fetch('/../src/app/create.php', {
        method: 'POST',
        body: form
    }).then(resp=>resp.json())
    .then(response=>response);
}

function removeTask(id)
{
    removeTaskAjax(id);
}

function removeTaskAjax(id)
{
    return fetch ('/../src/app/remove.php', {
        method: 'POST',
        body: form
    }).then(resp=>resp.json())
    .then(response=>response);
}