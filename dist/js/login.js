const form = document.querySelector("form");

form.addEventListener("submit", function(e){
    e.preventDefault();
    const formData = new FormData(form);
    Login(formData);
    // if(formData.get("login").trim() && formData.get("password").trim()){
    //     Login(formData);
    // }
})

async function Login(formData){
    const req = await fetch("./phpFunctions/LoginAuth.php", {
        method: "POST",
        body: formData
    });
}