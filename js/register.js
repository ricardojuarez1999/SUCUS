const formRegister = document.getElementById('formRegister')

formRegister.addEventListener('submit', async e => {
    e.preventDefault();
    let useridentity = document.getElementById('useridentity').value
    let name = document.getElementById('nameUser').value
    let email = document.getElementById('emailUser').value
    let password = document.getElementById('passwordUser').value
    let dob = document.getElementById('dobUser').value
    let response

    if(useridentity && name && email && password && dob){
        response = await fetch('http://127.0.0.1:8000/api/auth/register', {
            method: 'POST',
            headers: {
                "Content-Type" : "application/json"
            },
            body: JSON.stringify({
                useridentity,
                email,
                password,
                name,
                dob: `${dob} 00:00:00`
            })
        })
        if(response.status == 200){
            const data = await response.json();
            const aux = {
                email,
                password
            }
            const responseLogin = await fetch('http://127.0.0.1:8000/api/auth/login', {
                method: 'POST',
                headers: {
                    "Content-Type" : "application/json"
                },
                body: JSON.stringify(aux)
            })

            if (responseLogin.status == 200){

                const data = await responseLogin.json();
                const token = data.access_token
                $.ajax({
                    type: "POST",
                    url: '../sucus_pg/php/session/session.php',
                    data: `token=${token}`,
                    success: function(data)
                    {
                        window.location = '../sucus_pg/index.php'
                    }
                });
            }
        }
        if(response.status == 500){
            const data = await response.json();
            const errorCredentialsFormUser = document.getElementById('error-credentials-form-user')

            let testSonCredentials = !!document.getElementById('son-error-credentials-form-user');
            if(!testSonCredentials){
                errorCredentialsFormUser.innerHTML = `<h2 id="son-error-credentials-form-user">${data.msg}<h2>`
            }
        }
    }else {
        console.log("No se llenaron todos los campos")
    }
    limpiar()
})

function limpiar (){
    document.getElementById('useridentity').value = ""
    document.getElementById('nameUser').value = ""
    document.getElementById('emailUser').value = ""
    document.getElementById('passwordUser').value = ""
    document.getElementById('dobUser').value = ""
}
