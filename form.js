console.log("JS Loaded");
document.querySelector("form").addEventListener("submit",function(e){

    let fname = document.querySelector("input[name='first_name']").value;
    let lname = document.querySelector("input[name='last_name']").value;
    let email = document.querySelector("input[name='email']").value;
    let password = document.querySelector("input[name='password']").value;
    let city = document.querySelector("input[name='city']").value;

    if(fname==="" || lname==="" || email==="" || city===""){
        e.preventDefault();
        showPopup("Please enter all required details!");
        return;
    }

    if(!email.includes("@") || !email.includes(".")){
        e.preventDefault();
        showPopup("Enter a valid email!");
        return;
    }

    if(password.length < 6){
        e.preventDefault();
        showPopup("PAssword much be atleast 6 characters!");
        return;
    }

    let gender = document.querySelector("input[name='gender']:checked")
    if(!gender){
        e.preventDefault();
        showPopup("Please select your gender");
        return;
    }

    let dept = document.querySelectorAll("input[name='dept[]']:checked");
    if(dept.length === 0){
        e.preventDefault();
        showPopup("Select atleast one department");
        return;
    }
})  

function showPopup(message) {
    let popup = document.getElementById("popup");

    popup.innerText = message;
    popup.classList.add("show");

    setTimeout(() => {
        popup.classList.remove("show");
    }, 3000);
}

showPopup("Registration Successful!", true);