<?php
    class RotaController{
        function home(){
            include "views/home.php";
        }
        function curso(){
            include "views/curso.php";
        }
        function alunos(){
            include "views/alunos.php";
        }
        function professor(){
            include "views/professor.php";
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