<?php
    
   $mysqli=new mysqli('localhost', 'root', '','f_school');
   session_start();//Для работы глобального массимва $_SESSION пишется вверху
   require_once('php/classes/User.php');
   
//    
//    require_once('php/classes/Blog.php');
    $path = $_SERVER['REQUEST_URI'];
    $method=$_SERVER['REQUEST_METHOD'];
    $content = "";
    if($path=="/login" AND $method=="GET"){
        $content = file_get_contents('view/login.html');
    }else if ($path == "/login" AND $method=="POST"){
        $content=User::handlerLogin();
    }else if($path == "/reg" and $method=="GET") {
        $content = file_get_contents('view/reg.html');
    }else if($path=="/reg" and $method=="POST"){
        $content=User::handlerReg();
    }else if ($path=="/profile"){
        $content = file_get_contents('view/profile.html');;
    }else if ($path=="/getUser"){
        exit(User::getUser());
    }    
    require_once('view/template.php');


    
       //        $content=file_get_contents('view/profile.html');
        //    }else if ($path=="/modul4/getUser"){
        //        exit(User::getUser());

//    
//    $explodePath=(explode('/',$path));
//    //var_dump(explode('/',$path));
//   

//    }else if ($path == "/modul4/login" AND $method=="POST"){
//        $content=User::handlerLogin();
//    } else if ($path =="/modul4/reg" and $method=="GET") {
//        $content=file_get_contents('view/reg.html');
//    }else if ($path=="/modul4/reg" and $method=="POST"){
//        $content=User::handlerReg();
//    }else if ($path=="/modul4/profile"){
//        $content=file_get_contents('view/profile.html');
//    }else if ($path=="/modul4/getUser"){
//        exit(User::getUser());
//    }else if($path == "/modul4/addArticle" and $method=="GET"){
//        $content=file_get_contents('view/addArticle.html');
//    }else if($path == "/modul4/addArticle" and $method=="POST"){
//        $content=Blog::addArticle();
//    }else if($path=='/modul4/blog'){
//        $content=file_get_contents('view/blog.html');
//    }else if($path=='/modul4/getArticles'){
//        exit(Blog::getArticles());
//    }else if($explodePath[2]=='getArticleById'){
//        $articleId=$explodePath[3];
//        exit(Blog::getArticleById($articleId));
//    }else if($explodePath[2]=='blog'){
//        $content=file_get_contents('view/article.html');
//    }
//
//
//
//    require_once('view/template.php');