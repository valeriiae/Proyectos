<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 1</title>
</head>

<body>
    <h1> Tabla de Datos </h1>

    <?php /*$DatosPersonales = array (
        array('Valeria Lopez','Carolina Ferrer','Eduardo Jameson'),
        array(19946448,18956652,20256652),
        array(04263949294,0416632256,0142236654))*/
    ?>
    <?php $DatosPersonales = array (
        array('Valeria Lopez', '19946448', '04263949294'),
        array('Carolina Ferrer', '18956652', '0416632256'),
        array('Eduardo Jameson', '20256652', '0142236654')
	)
    ?>
    <table>
<thead>
<tr>
<th>Nombre</th>

<th>Cedula</th>

<th>Numero de Telefono</th>
</tr>
</thead>
<tbody>
    <?php foreach ($DatosPersonales as $arr): ?>
    <tr>
        <?php foreach ($arr as $value ): ?>
            <td><?php echo $value ?></td>
        <?php endforeach ?>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<h1>Segundo Array</h1>

    <?php $DatosPersonales2 = [
        "nombre" => 'Valeria Lopez',
        "cedula" => 19946448,
        "telefono" => 04263949294
        ];
    ?>
<table>
<thead>
<tr>
<th>Nombre</th>
<th>Cedula</th>
<th>Numero de Telefono</th>
</tr>
</thead>
<tbody>
    <tr>
        <td><?php echo $DatosPersonales2["nombre"] ?></td>
        <td><?php echo $DatosPersonales2["cedula"] ?></td>
        <td><?php echo $DatosPersonales2["telefono"] ?></td>
    </tr>
</tbody>
</table> 
</body>
</html>