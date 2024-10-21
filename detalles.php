<?php
    include("src/con_db.php");

    echo "<a href='items'>Volver a items</a>";
    if (isset($_GET['id'])) {
    $id = intval($_GET['id']);  // Asegurar que el ID sea un número entero
    
    // Consulta para obtener los detalles del ítem seleccionado
    $sql = "SELECT t.ID, t.Breakspeed, t.Damage, t.Recipe, 
                   tt.Type_Name, tm.Material_Name, tm.Durability
            FROM tools t
            JOIN tool_type tt ON t.ID_Tool_Type = tt.ID
            JOIN tool_material tm ON t.ID_Material = tm.ID
            WHERE t.ID = $id";
    
    $result = $conexion->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Mostrar los detalles del ítem
        echo "<h1>Detalles del ítem</h1>";
        echo "<p>ID: " . $row['ID'] . "</p>";
        echo "<p>Type: " . $row['Type_Name'] . "</p>";
        echo "<p>Material: " . $row['Material_Name'] . "</p>";
        echo "<p>Breakspeed: " . $row['Breakspeed'] . "</p>";
        echo "<p>Damage: " . $row['Damage'] . "</p>";
        echo "<p>Durability: " . $row['Durability'] . "</p>";
        echo "<p>Recipe: " . $row['Recipe'] . "</p>";
    } else {
        echo "<p>No se encontró el ítem.</p>";
    }
} else {
    echo "<p>No se especificó ningún ítem.</p>";
}
?>