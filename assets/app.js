
function submitForm(){    
const form = document.querySelector('submitForm');
    form.addEventListener('insertTask', function(event){
        event.preventDefault();
        const task = document.querySelector('form input');
        insertTask(task.value)
    })
};


function insertTask(form){
    return fetch('/../src/app/create.php', {
        method: 'POST',
        body: form
    }).then(resp => resp.json())
    .then(response => response);
}
