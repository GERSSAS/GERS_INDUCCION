const btnSub = document.getElementById("loginForm");
btnSub.addEventListener('submit', function (e) {
    e.preventDefault();
    let userData = new FormData(document.forms.namedItem("loginData"));
    userData.append("login", "login");

    fetch('../sesion/sesionValidate.php', {
        method: 'POST',
        body: userData
    })
    .then(res => res.json())
    .then(response => {
        if (response.status === "success") {
            window.location.replace(response.redirect);
        } else if (response.status === "error") {
            var valHtml = `<div class="text-center alert alert-danger" role="alert">${response.message}</div>`;
            document.getElementById("alert").innerHTML = valHtml;
            setTimeout(() => {
                document.getElementById("alert").innerHTML = ``;
            }, 2500);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        var valHtml = `<div class="text-center alert alert-danger" role="alert">Error de comunicación con el servidor</div>`;
        document.getElementById("alert").innerHTML = valHtml;
        setTimeout(() => {
            document.getElementById("alert").innerHTML = ``;
        }, 2500);
    });
});
const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});