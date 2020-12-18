window.addEventListener("load", showWhatIsSaved)
let postButton = document.getElementById("postBtn").addEventListener("click", postDate)
let deleteButton = document.getElementById("deleteBtn").addEventListener("click", deleteDate)
let updateButton = document.getElementById("updateBtn").addEventListener("click", updateDate)
async function showWhatIsSaved(){
    let starsignTitle = document.getElementById("horoscopeTitle")
    const response = await makeRequest("viewHoroscope.php", "GET")
    if(!response){
        console.log(response)
        let deleteButton = document.getElementById("deleteBtn")
        deleteButton.style.display = "none"
        let updateButton = document.getElementById("updateBtn")
        updateButton.style.display = "none"
        return
    }else if(response == "error"){
        console.log("ERROR Not a valid date...deleted")
        deleteDate()
        return
    }
    starsignTitle.innerText = response
    let postButton = document.getElementById("postBtn")
    postButton.style.display = "none"
}
async function postDate(){
    let dateOfBirth = document.getElementById("birthDate").value;
    if(!dateOfBirth.length || dateOfBirth.length != 4){
        console.log("Not valid date!");
        return
    };
    const body = new FormData();
    body.set("date", dateOfBirth);
    const repsonse = await makeRequest('addHoroscope.php', 'POST', body);
    console.log(repsonse)
    let inputField = document.getElementById("birthDate")
    inputField.value = null; 
    let postButton = document.getElementById("postBtn")
    postButton.style.display = "none"
    let deleteButton = document.getElementById("deleteBtn")
    deleteButton.style.display = "block"
    let updateButton = document.getElementById("updateBtn")
    updateButton.style.display = "block"   
    showWhatIsSaved()
}
async function deleteDate(){
    let starsignTitle = document.getElementById("horoscopeTitle")
    starsignTitle.innerText = " ";
    let inputField = document.getElementById("birthDate")
    inputField.value = null;
    const response = await makeRequest("deleteHoroscope.php", "DELETE")
    console.log(response)
    let postButton = document.getElementById("postBtn")
    postButton.style.display = "block"
    let deleteButton = document.getElementById("deleteBtn")
    deleteButton.style.display = "none"
    let updateButton = document.getElementById("updateBtn")
    updateButton.style.display = "none" 
}
async function updateDate(){
    let dateOfBirth = document.getElementById("birthDate").value;
    if(!dateOfBirth.length || dateOfBirth.length != 4){
        console.log("Not valid date!")
        return
    }
    const body = new FormData();
    body.set("date", dateOfBirth)
    const response = await makeRequest("updateHoroscope.php", "POST", body)
    if(!response){
        console.log(response)
        return
    }
    console.log(response)
    let inputField = document.getElementById("birthDate")
    inputField.value = null;
    showWhatIsSaved()
}
async function makeRequest(path, method, body){
    try{
        const response = await fetch(path, {method, body});
        return response.json();
    }catch(err){
        console.log("Could not send request...")
    }
}












