<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container border border-primary m-2 p-2 mx-auto col-sm-6">
        <h1>Formulario de registro</h1>
        <form id="formulario" onsubmit="return validarFormulario()">
            <div class="row mb-3">
                <label for="legajo" class="col-sm-4 col-form-label">Legajo</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="legajo" name="legajo"  placeholder="Ej: ABC1234567">
                    <span id="legajo-error" style="display:none;">El legajo debe tener 9 caracteres, los primeros 3 letras y los restantes números (Ej: ABC1234567)</span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="apellido" class="col-sm-4 col-form-label">Apellido</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="apellido" name="apellido">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
            </div>
            <div class="row mb-3">
                <label for="fecha-nacimiento" class="col-sm-4 col-form-label">Fecha de nacimiento</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="fecha-nacimiento" name="fecha-nacimiento">
                </div>
            </div>
            <div class="row mb-3">
                <label for="pais" class="col-sm-4 col-form-label">País de origen</label>
                <div class="col-sm-8">
                    <select class="form-select" id="pais" name="pais">
                        <option value="">Seleccione un país</option>
                        <option value="Rusia">Rusia</option>
                        <option value="Ucrania">Ucrania</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="Canada">Canadá</option>
                        <option value="Perú">Perú</option>
                        <option value="Chile">Chile</option>
                        <option value="Argentina">Argentina</option>
                        <option value="México">México</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Uruguay">Uruguay</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="graduacion" class="col-sm-4 col-form-label">Graduación</label>
                <div class="col-sm-8">
                    <select class="form-select" id="graduacion" name="graduacion">
                        <option value="">Seleccione una graduación</option>
                        <option value="1ro GUP">1ro GUP</option>
                        <option value="2do GUP">2do GUP</option>
                        <option value="3ro GUP">3ro GUP</option>
                        <option value="4to GUP">4to GUP</option>
                        <option value="5to GUP">5to GUP</option>
                        <option value="6to GUP">6to GUP</option>
                        <option value="7mo GUP">7mo GUP</option>
                        <option value="8vo GUP">8vo GUP</option>
                        <option value="9no GUP">9no GUP</option>
                        <option value="10mo GUP">10mo GUP</option>
                        <option value="1er DAN">1er DAN</option>
                        <option value="2do DAN">2do DAN</option>
                        <option value="3er DAN">3er DAN</option>
                        <option value="4to DAN">4to DAN</option>
                        <option value="5to DAN">5to DAN</option>
                        <option value="6to DAN">6to DAN</option>
                        <option value="7mo DAN">7mo DAN</option>
                        <option value="8vo DAN">8vo DAN</option>
                        <option value="9no DAN">9no DAN</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="clasificacion" class="col-sm-4 col-form-label">Clasificación general de nacimiento</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="clasificacion" name="clasificacion" min="1" max="100" placeholder="Ingrese su posición en el ranking nacional">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-4 col-form-label">Email de contacto</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="genero" class="col-sm-4 col-form-label">Género</label>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" id="femenino" value="F">
                        <label class="form-check-label" for="femenino">
                            Femenino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" id="masculino" value="M">
                        <label class="form-check-label" for="masculino">
                            Masculino
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <div id="envio" class="alert alert-danger mt-3" style="display:none;" role="alert"></div>
    </div>

    <script src="JS/validarForm2.js"></script>
    <script src="Public/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   
</body>

</html>