const form = document.querySelector("form");

form.addEventListener("submit", function(e){
    e.preventDefault();
    const formData = new FormData(form);
    Login(formData);
})

async function Login(formData){
    const req = await fetch("./phpFunctions/LoginAuth.php", {
        method: "POST",
        body: formData
    });
    if(req.ok){
        const json = await req.json();
        console.log(json);
        if(json.status){
            window.location.reload();
        }
    }
}