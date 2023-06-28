<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
include_once 'modelo/user.php';
include_once 'modelo/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    header( 'location: vista/home.php');

}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){

        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        header( 'location: vista/home.php');
    }else{

        header( 'location: vista/login.html');
        
    }
}else{
    
    header( 'location: vista/login.html');
}
?>

</body>
</html>
