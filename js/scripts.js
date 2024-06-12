


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



let cart = [];

function showCart() {
    document.getElementById("cartModal").style.display = "block";
}

function closeCart() {
    document.getElementById("cartModal").style.display = "none";
}

function addToCart(item) {
    cart.push(item);
    displayCartItems();
}

function displayCartItems() {
    const cartItemsContainer = document.getElementById("cartItems");
    cartItemsContainer.innerHTML = "";
    cart.forEach((item, index) => {
        const li = document.createElement("li");
        li.innerText = item.name + " - $" + item.price;
        cartItemsContainer.appendChild(li);
    });
}

function showCart() {
    document.getElementById("cartModal").style.display = "block";
}

function closeCart() {
    document.getElementById("cartModal").style.display = "none";
}

function checkout() {
    // Lógica para procesar el checkout del carrito
    // Aquí podrías enviar los datos del carrito al servidor, por ejemplo
    console.log("Checkout realizado");
}

