const form = document.querySelector(".signup form"),
    continueBtn = form.querySelector(".button input"),
    errorText = form.querySelector(".error-text");


form.onsubmit = (e)=>{
    e.preventDefault(); // preventing form from submiting
}

continueBtn.onclick = ()=>{
    // let's start Ajax
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "php/signup.php");
    xhr.onload = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == "success") {
                    location.href = "users.php";
                }else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }

    // we have to send the form data throgh ajax to php
    let formData = new FormData(form); // creating new FormData Object 
    xhr.send(formData); // sending the form data to php 
}