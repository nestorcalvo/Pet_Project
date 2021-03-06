<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Datos personales</h2>
    <div class="form">
        <form action="form2.php" method="post" id="adopt_animals" >
            <br>
            <label>Nombre: </label>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <br>
            <label>Correo: </label>
            <input type="email" name="correo" placeholder="ejemplo@correo.com" required>
            <br>

            <label>Numero de celular: </label>
            <input type="number" name="celular" placeholder="3000000001" required>
            <br>
            <label>Ingrese sus ingresos mensuales (en USD): </label>
            <input type="number" name="ingresos" placeholder="1500" required>
            <br>
            <label>Cuanto tiempo del dia suele estar en casa (en horas): </label>
            <input type="number" name="tiempo" placeholder="15" required>
            <br>

            <label>Cuantas personas viven en su residencia (sin contarlo a usted): </label>
            <input type="number" name="familia" placeholder="3" required>
            <br>

            <label for="size">Usted puede considerar que el tamaño de su hogar seria: </label>
            <select id="size" name="size" form="adopt_animals">
                <option value="Pequeña">Pequeña</option>
                <option value="Mediana">Mediana</option>
                <option value="Grande">Grande</option>
            </select>
            <br>

            <label>Explique las razones de porque desea adoptar: </label>
            <br>
            <input type="text" name="razon" placeholder="Desde hace muchos años quiero tener una para que me haga compañia" required
                   size="50" style="height: 200px">
            <br>
            <br>
            <input type="submit" value="Enviar">
        </form>
        <br>
        <br>
        <br>
        <a href="index.php">
            <input type="button" value="Volver">
        </a>
    </div>
</body>
</html>