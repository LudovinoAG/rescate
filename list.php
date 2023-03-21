<?php
$serverName = "989J4V1\SQLAGENTS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"datatmk");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$count = 0;
if( $conn ) {
    $sql = "SELECT * FROM registros";
    $stmt = sqlsrv_query($conn, $sql);
    echo "<table class='table table-condensed'>
    <thead>
        <h6>LISTADO DE ORDENES</h6>
        <hr/>
        <tr>
            <th>#</th>
            <th>OS</th>
            <th>Cliente</th>
            <th>BAN</th>
            <th>MAC</th>
            <th>Resolución</th>
            <th>Comentario</th>
            <th>Trabajada por</th>
            <th>Fecha orden</th>
        </tr>
    </thead><tbody>";
    while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) ) {
        $count++;
        //$fecha = $row['fecha_orden'];
        echo "<tr>
                <td>".$count. "</td>
                <td>".$row['os']. "</td>
                <td>".$row['cliente']. "</td>
                <td>".$row['ban']. "</td>
                <td>".$row['mac']. "</td>
                <td>".$row['resolucion']. "</td>
                <td>".$row['Estado_1']. "</td>
                <td>".$row['agente']. "</td>
                <td>" .$row['fecha_orden']. "</td>
            </tr>";

    }

    echo "<tbody></table>";


}else{
    echo "Conexión no se pudo establecer.<br />";
    die( print_r( sqlsrv_errors(), true));
}
?>