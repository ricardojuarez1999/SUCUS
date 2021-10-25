const form = document.getElementById('formLogin')
let errorCredentials = document.getElementById('error-credentials');

form.addEventListener('submit',async (e)=> {
    let email = document.getElementById('email')
    let password = document.getElementById('password')
    e.preventDefault()
    if(password.value != "" && email.value != ""){
        const aux = {
            email: email.value,
            password: password.value
        }
        const response = await fetch('http://127.0.0.1:8000/api/auth/login', {
            method: 'POST',
            headers: {
                "Content-Type" : "application/json"
            },
            body: JSON.stringify(aux)
        })
        if (response.status == 200){
            const data = await response.json();
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
        console.log("hola");
        if (response.status == 500) {
            let testSonCredentials = !!document.getElementById('son-error-credentials2');
            if(!testSonCredentials){
                errorCredentials.innerHTML = '<h2 id="son-error-credentials2">Credenciales invalidas <h2>'
            }
        }
    }else {
        let testSonCredentials = !!document.getElementById('son-error-credentials2');
        if(!testSonCredentials){
            errorCredentials.innerHTML = '<h2 id="son-error-credentials2">Credenciales invalidas <h2>'
        }
    }

})

