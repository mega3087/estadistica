<?php


header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=matricula2022-2023_CEMSAD.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo"<h2>MATRÍCULA PRELIMINAR CEMSADCICLO 2022-2023: &nbsp;&nbsp;".date("d-m-Y H:i:s")."</h2>";
if (isset($_POST['datos_a_enviar']) && $_POST['datos_a_enviar'] != '') echo $_POST['datos_a_enviar'];

?>