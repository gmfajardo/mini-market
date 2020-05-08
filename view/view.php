
                      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <table  >
        row
            <thead>
                <tr>
                    <td>Usuario</td>
                    <td>Contraseña</td>
                    <td>Nombre</td>
                </tr>
            </thead>

            <tbody>
            <tr>
                    <td>bria</td>
                    <td>tumadrina</td>
                    <td>qloq</td>
                </tr>

                <?php 
                
                foreach ($usuarios as $user){
                echo "<tr>";
                        echo "<td>". $user['username']."</td>";
                        echo "<td>". $user['password']."</td>";
                        echo "<td>". $user['nombre']."</td>";
                        echo "</tr>";
                    }
                
                ?>
            </tbody>

        </table>


</body>
</html>