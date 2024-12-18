<?php 
$user_name = $_POST["username"];
$password = $_POST["password"];
$password_correct ="12345";
$user_name_correct= "monicacastro";
function acomodarstring ($string){
    $string = strtolower(trim($string));
    $string = preg_replace('/\s+/', '', $string);
    return $string;
}
$user_name = acomodarstring($user_name);
acomodarstring($password);
if($user_name == $user_name_correct && $password == $password_correct){
    header('location:catalogo.php');
    exit;
}
elseif ($user_name === $user_name_correct) {
    echo "La contraseña es incorrecta";
} else {
    echo "Las credenciales son incorrectas, por favor vuelva a intentarlo";
}
?>