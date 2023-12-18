// JavaScript para manejar el clic en los botones de "Leer más"
document.querySelectorAll(".leer-mas").forEach(function(button) {
    button.addEventListener("click", function () {
        var sectionContainer = button.closest(".info-section-nuevo");
        sectionContainer.querySelector(".contenidoAdicional").style.display = "block";
        button.style.display = "none";
        sectionContainer.querySelector(".ocultar-texto").style.display = "inline-block";
    });
});

// JavaScript para manejar el clic en los botones de "Ocultar texto"
document.querySelectorAll(".ocultar-texto").forEach(function(button) {
    button.addEventListener("click", function () {
        var sectionContainer = button.closest(".info-section-nuevo");
        sectionContainer.querySelector(".contenidoAdicional").style.display = "none";
        sectionContainer.querySelector(".leer-mas").style.display = "inline-block";
        button.style.display = "none";
    });
});






// CSS PARA TARJETAS"

// Agrega un listener para cada botón "Leer más"
document.querySelectorAll('.leer-mas').forEach(function(button) {
    button.addEventListener('click', toggleCardContent);
});

// Agrega un listener para cada botón "Ocultar texto"
document.querySelectorAll('.ocultar-texto').forEach(function(button) {
    button.addEventListener('click', toggleCardContent);
});

// Función para alternar la altura máxima y la visibilidad del contenido detallado
function toggleCardContent(event) {
    // Accede al contenedor de la tarjeta clicada
    var card = event.target.closest('.card-negro');

    // Accede al contenido detallado dentro de la tarjeta
    var details = card.querySelector('.contenidoAdicional');

    // Alterna la visibilidad
    details.style.display = details.style.display === 'none' ? 'block' : 'none';

    // Alterna la visibilidad de los botones "Leer más" y "Ocultar texto"
    card.querySelector('.leer-mas').style.display = card.querySelector('.leer-mas').style.display === 'none' ? 'block' : 'none';
    card.querySelector('.ocultar-texto').style.display = card.querySelector('.ocultar-texto').style.display === 'none' ? 'block' : 'none';

    // Ajusta la altura máxima para expandir o contraer la tarjeta
    card.style.maxHeight = card.style.maxHeight ? '' : '2000px'; // Ajusta la altura máxima según tus necesidades
}


// Si hay un mensaje de error, establecer el foco en el campo de correo electrónico Corre electronico
window.onload = function() {
    var mensajeError = document.getElementById('mensaje-error');
    var emailInput = document.getElementById('email');
    
    if (mensajeError.innerHTML.trim() !== '') {
        // Si hay un mensaje de error, establecer el foco en el campo de correo electrónico
        emailInput.focus();
    }
}