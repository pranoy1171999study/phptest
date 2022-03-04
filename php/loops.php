
<style>

li{
    margin-left:10px;
}
div{
    margin-left:20px;
}
._box{
    
    border:3px solid #2b005c;
    padding:15px;
    width:40%;
    border-radius:10px;
    background:#e0ffa6;
}

</style>



<?php
$a='$array';
$k='$key';
$v='$value';
 echo "<ul>
 
        <li><h2>While Loop</h2>
        <div class='_box'>while(condition)<br>
            {<br>
                &nbsp;&nbsp;&nbsp;//codes<br>
                &nbsp;&nbsp;&nbsp;//cheek condition then work ....<br>
        }<br></div>
        </li>
        <li><h2>Do While Loop</h2>
        <div class='_box'>do<br>
            {<br>
                &nbsp;&nbsp;&nbsp;//codes<br>
                &nbsp;&nbsp;&nbsp;//work once then cheek condition ....<br>
            }while(condition)<br>
            
        </li>
        <li><h2>For Loop</h2>
        <div class='_box'>for( initialize ; condition ; increment or decrement)<br>
            {<br>
                &nbsp;&nbsp;&nbsp;//codes<br>&nbsp;
            }<br>
            </div>
        </li>
        <li><h2>For Each Loop</h2>
        <div class='_box'>foreach( $a as $k) or ( $a as $k=>$v)~for associative array<br>
            {<br>
                &nbsp;&nbsp;&nbsp;//codes<br>
            }<br>
            </div>
        </li>
      </ul>";
?>