
document.addEventListener("DOMContentLoaded", () => {

	document.querySelector("#btnSubmit").addEventListener("click", element => {
		event.preventDefault();
		let destinatario = document.querySelector("#txtDestinatario").value
		let motivo = "Confirmación de Registro en Great Pet";
		let contenido = "Le damos la bienvenida a Great Pet. Para completar el proceso de registro, por favor confirme su cuenta haciendo clic en el siguiente enlace:<br><br><a href='https://mattprofe.com.ar/alumno/great_pet/confirmar_usuario.php?verify=123ABCxyz456DEFuvw789'>Confirmar cuenta</a>.<br><br>Si no ha solicitado este registro, por favor ignore este mensaje.<br><br>Atentamente,<br>El Equipo de Great Pet.";

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