<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>items</title>
</head>

<body>
    <a href="home">Volver</a>
    <h2>Items:</h2>
    <?php
    include("src/con_db.php");
    
    $sql = "SELECT t.ID, t.Breakspeed, t.Damage, t.Recipe, 
               tt.Type_Name, tm.Material_Name, tm.Durability
        FROM tools t
        JOIN tool_type tt ON t.ID_Tool_Type = tt.ID
        JOIN tool_material tm ON t.ID_Material = tm.ID";

    $result = $conexion->query($sql);
    
    echo "<table border='1'>";
    if ($result->num_rows > 0) {

        echo "<tr><th>ID</th><th>Type</th><th>Material</th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['Type_Name'] . "</td>";
            echo "<td>" . $row['Material_Name'] . "</td>";
            echo "<td><a href='detalles?id=" . $row['ID'] . "'>Ver Detalles</a></td>";
            echo "</tr>";
        
        } 
        echo "</table>";
    } else {
        echo "No se encontraron herramientas.";
    }

?>
</body>

</html>