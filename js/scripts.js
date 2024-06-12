


function redirectTopage() {
    window.location.href = 'fotoxv.php';
    

}


function redirectTope() {
    window.location.href = 'fotoboda.php';
}


function redirectTopagge(){
    window.location.href = 'fotoarti.php';
}


function redirect(sectionId) {
    window.location.href = '#' + sectionId;
}


document.getElementById("sectionID").onclick = function () {
    window.location.href = '#' + sectionId;
};

function redirectEvent(){
    window.location.href = 'fotoevent.php'

}


function handleSubmit(event) {
    event.preventDefault(); 
    alert("Gracias por tu preferencia. Habrá alguien que se ponga de acuerdo contigo.");
    document.getElementById('contactForm').submit(); // Enviar el formulario después de la alerta
}