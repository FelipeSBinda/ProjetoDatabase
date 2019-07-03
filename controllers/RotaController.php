<?php
    class RotaController{
        function home(){
            include "views/home.php";
        }
        function curso(){
            include "views/curso.php";
        }
        function cadastroAluno(){
            include "views/formulario.php";
        }
        function cadastroCurso(){
            include "views/formulario.php";
        }
        function cadastroProfessor(){
            include "views/formulario.php";
        }
    }
?>