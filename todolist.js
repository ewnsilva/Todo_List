const idendifyButton = document.getElementById("identifyButton")
const taskValue = document.getElementById("inputText")
const divTasks = document.getElementById("tasks")
idendifyButton.addEventListener("click", newTask)

function newTask () {
    console.log(taskValue.value)

    const div = document.createElement("div")

    const inputCheckBox = document.createElement("input")
    inputCheckBox.type = "checkbox"

    const p = document.createElement("p")
    p.innerText = taskValue.value

    const inputModifyButton = document.createElement("button")
    inputModifyButton.id = "modifyButton"
    inputModifyButton.classList.add("tasks__modify")
    inputModifyButton.innerText = "modificar"

    
    const inputDeleteButton = document.createElement("button")
    inputDeleteButton.id = "deleteButton"
    inputDeleteButton.classList.add("task__delete")
    inputDeleteButton.innerText = "excluir"
    inputDeleteButton.addEventListener("click", deleteTask)



    div.appendChild(inputCheckBox)
    div.appendChild(p)
    div.appendChild(inputModifyButton)
    div.appendChild(inputDeleteButton)
    divTasks.appendChild(div)
    
}

function deleteTask (e) {
    const div = e.target.parentNode
    div.innerHTML = ""
}