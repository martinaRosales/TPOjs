const form = document.getElementById("formulario");
const envio = document.getElementById("envio");

const messages = {
  legajo: "Ingrese un legajo válido (3 letras (MAYUS) seguidas de 7 números)",
  apellido: "Ingrese su apellido",
  nombre: "Ingrese su nombre",
  fechaNacimiento: "Ingrese su fecha de nacimiento",
  paisOrigen: "Seleccione su país de origen",
  graduacion: "Seleccione su grado de educación",
  clasificacion: "Seleccione su clasificación (Enteros o Decimales unicamente ente 1 y 900)",
  email: "Ingrese un correo electrónico válido",
  genero: "Seleccione su género",
};

function validarCampo(valor, campo) {
  if (valor.trim() === "") {
    envio.textContent = `El campo ${campo} es requerido`;
    envio.style.display = "block";
    return false;
  }
  return true;
}

function validarLegajo(legajo) {
  const regexLegajo = /^[A-Z]{3}\d{7}$/;
  if (!regexLegajo.test(legajo)) {
    envio.textContent = messages.legajo;
    envio.style.display = "block";
    envio.classList.add("is-invalid");
    return false;
  }
  return true;
}

function validarEmail(email) {
  const regexEmail = /^\S+@\S+\.\S+$/;
  if (!regexEmail.test(email)) {
    envio.textContent = messages.email;
    envio.style.display = "block";
    envio.classList.add("is-invalid");
    return false;
  }
  return true;
}

// La edad del competidor debe ser de 6 años o más.
function validarEdad(fecha){
  const fechaNac = new Date(fecha); //se crea la clase de fecha con el valor pasado por parametro 
  const anioNac = fechaNac.getFullYear(); //se obtiene el año de la fecha pasada por input 
  const fechaActual = new Date(); //se obtiene la clase date para saber el año actual
  const anioActual = fechaActual.getFullYear(); // devuelve el año actual  
  const edad = anioActual - anioNac;   
  if (edad < 6) {
    envio.textContent = messages.fechaNacimiento;
    envio.style.display = "block";
    envio.classList.add("is-invalid");
    return false;
  } 
  return true; 
}

// Validar que el ranking sea un número entre 0 y 900 pudiendo ser decimal de una posición
function validarClasificacion(clasificacion) {
  if (isNaN(clasificacion) || clasificacion < 1 || clasificacion > 900) {
    envio.textContent = messages.clasificacion;
    envio.style.display = "block";
    envio.classList.add("is-invalid");
    return false;
  }
  return true; 
}

function validarFormulario() {
  const legajo = document.getElementById("legajo").value;
  const apellido = document.getElementById("apellido").value;
  const nombre = document.getElementById("nombre").value;
  const fechaNacimiento = document.getElementById("fecha-nacimiento").value;
  const paisOrigen = document.getElementById("pais").value;
  const graduacion = document.getElementById("graduacion").value;
  const clasificacion = document.getElementById("clasificacion").value;
  const email = document.getElementById("email").value;
  const genero = document.querySelector('input[name="genero"]:checked');

  if (
    !validarCampo(legajo, "legajo") ||
    !validarCampo(apellido, "apellido") ||
    !validarCampo(nombre, "nombre") ||
    !validarCampo(fechaNacimiento, "fecha de nacimiento") ||
    !validarCampo(paisOrigen, "país de origen") ||
    !validarCampo(graduacion, "grado de educación") ||
    !validarCampo(clasificacion, "clasificación") ||
    !validarCampo(email, "correo electrónico") ||
    !genero
  ) {
    return false;
  }

  if (
    !validarLegajo(legajo) || 
    !validarEmail(email) ||
    !validarEdad(fechaNacimiento) ||
    !validarClasificacion(clasificacion)
    ) {
    return false;
  }


  envio.textContent= "";
  envio.style.display = "none";
  envio.classList.remove("is-invalid");
  return true;
  }
  
  form.addEventListener("submit", (e) => {
  e.preventDefault();
  if (validarFormulario()) {
  alert("Formulario enviado exitosamente");
  form.reset();
  }
  });
