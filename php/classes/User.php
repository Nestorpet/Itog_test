<?php
class User{
    public static function handlerReg(){
        global $mysqli;
//        print_r($_POST);
//        if ($_POST['Otm']="Отмена"){
//            return "";
//        }
        $email = $_POST['email'];
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $result=$mysqli->query("SELECT * FROM users WHERE email='$email'");
        //var_dump($result); num_rows всплывает из масcива!!!!
        if ($result->num_rows){
            return "Такой пользователь уже существует";
        }else{
            $mysqli->query("INSERT INTO users (name, lastname, email, pass)
                VALUES ('$name', '$lastname', '$email', '$pass')");
            return "Успешно зарегистрирован";
        }
    }

    public static function handlerLogin(){
        //print_r($_POST);
        global $mysqli;
//        if ($_POST['Otm']="Отмена"){
//            return "";
//        }
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $result=$mysqli->query("SELECT * FROM users WHERE email='$email'");
        $row=$result->fetch_assoc();
        if (password_verify($pass,$row['pass'])){
            $_SESSION['name']=$row['name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['lastname']=$row['lastname'];
            $_SESSION['id']=$row['id'];
            header('location: /profile');
        }else{
            return "Логин или пароль введен неправильно";
        }
    }

    public static function getUser(){
        $name=$_SESSION['name'];
        $lastname=$_SESSION['lastname'];
        $email=$_SESSION['email'];
        $id=$_SESSION['id'];
        //print_r($_SESSION);
        $user=[
            'name'=>$name,
            'lastname'=>$lastname,
            'id'=>$id,
            'email'=>$email
        ];
        //print_r($user);
        return json_encode($user);

}
    

        



}