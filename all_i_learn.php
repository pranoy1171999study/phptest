<!Doctype html>
<html lang='eng'>
<head style="padding-left:0p;":>
    <meta charset="UTF-8">
    <title>
        <?php
        echo "Head";
        ?>
    </title>
    <h1 style="text-align:center;">PHP<h1>
</head>
    <body style="padding-left:20px;">
        <h2> General syntex:</h2>
        <div>
            <?php
                $str1="<?php";
                $str2="<br><br><br>";
                $str3="?>";
                echo htmlentities($str1).$str2.htmlentities($str3);
            ?>
        </div>

        <div>
            <h2>Comments</h2>
                <div># or // (for single line)<br>/* */ for multiple lines</div>
        </div>

        <div>
            <h2>Print</h2>
                <div>echo $var;  or echo "text";</div>
        </div>

        <div>
            <h2>Variables</h2>
            <div>$var_name</div>
            <h2>Constant Variables</h2>
            <div>define(name,value,case_insensitivity);   <br>by default case_insensitivity is false if we left it empty</div>
            <h3>Rules to write a variable</h3>
            <ul>
                <li>Start with $</li>
                <li>Can't start with a number</li>
                <li>Must start with _ or letter</li>
                <li>No spaces allows between var name</li>
                <li>numbers need not quote ex, $a=25;</li>
                <li>PHP variables name are case sencetive by default</li>
            </ul>
        </div>
        <div>
            <h2>Datatypes</h2>
            <?php include 'php/datatype.php'; ?>
        </div>
        <div>
            <h2>Operators</h2>
            <?php include 'php/tables.php'; ?>
        </div>
        <div>
            <h2>Conditional Statements</h2>
            <?php include 'php/conditional_statements.php'; ?>
        </div>
        <div>
            <h2>Loop Statements</h2>
            <?php include 'php/loops.php'; ?>
        </div>
        <div>
            <h2>array</h2>
            <?php include 'php/array.php'; ?>
        </div>
        <div>
            <h2>Super Global Variables</h2>
            <?php include 'php/super_global_vars.php'; ?>
        </div>
    </body>
</head>