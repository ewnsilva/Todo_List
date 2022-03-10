const idendifyButton = document.getElementById("identifyButton")
const taskValue = document.getElementById("inputText")
const divTasks = document.getElementById("tasks")
idendifyButton.addEventListener("click", newTask)

function newTask () {
    console.log(taskValue.value)

    divTasks.style.border = "2px solid black"

    const div = document.createElement("div")

    const inputCheckBox = document.createElement("input")
    inputCheckBox.type = "checkbox"

    const p = document.createElement("p")
    p.innerText = taskValue.value
    document.getElementById("inputText").value = ""

    const inputDeleteButton = document.createElement("button")
    inputDeleteButton.id = "deleteButton"
    inputDeleteButton.classList.add("task__delete")
    inputDeleteButton.innerText = "Excluir"
    inputDeleteButton.addEventListener("click", deleteTask)

    /*const inputModifyButton = document.createElement("button")
    inputModifyButton.id = "modifyButton"
    inputModifyButton.classList.add("tasks__modify")
    inputModifyButton.innerText = "modificar"
    inputModifyButton.addEventListener("click", modifyTask)*/


    div.appendChild(inputCheckBox)
    div.appendChild(p)
    /*div.appendChild(inputModifyButton)*/
    div.appendChild(inputDeleteButton)
    divTasks.appendChild(div)
    
}

function deleteTask (e) {
    const div = e.target.parentNode
    div.innerHTML = ""
}

/*  function modifyTask () {
    
}  */