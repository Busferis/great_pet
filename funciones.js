
document.addEventListener("DOMContentLoaded", () => {

	document.querySelector("#btnSubmit").addEventListener("click", element => {
		event.preventDefault();
		let destinatario = document.querySelector("#txtDestinatario").value
		let motivo = "Hello";
		let contenido = "Hola, por favor visita nuestra página web: <a href='https://www.mattprofe.com.ar/alumno/great_pet/login.php?verify=123ABCxyz456DEFuvw789'>https://www.example.com</a>";

		sendMail(destinatario, motivo, contenido).then( resultado => {
           console.log(resultado)
           document.querySelector("form").submit();
       })
	})

})


// Función asíncrona para el envio de email
async function sendMail(destinatario, motivo, contenido){

	let form = new FormData()

	form.append("destinatario", destinatario)
	form.append("motivo", motivo)
	form.append("contenido", contenido)
	form.append("send", "mail")

	options = {method: 'POST',
				body: form}

	const response = await fetch("sendmail.php", options)
	const data = await response.json()

	return data
}