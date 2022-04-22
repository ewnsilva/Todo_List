const form = document.getElementById('submitForm');
console.log(form)
form.addEventListener('submit', function(event){
    event.preventDefault();
    const task = document.querySelector('#submit');
    insertTask({task: task.value})
    })


async function insertTask(form){
    return fetch('/../src/app/create.php', {
        method: 'POST',
        body: form
    }).then(resp => resp.json())
    .then(response => response);
}
