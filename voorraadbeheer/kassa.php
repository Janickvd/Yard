<?php
include ("inc/header.php");
include ('kassa2.php');
?>

<head>
<link rel="stylesheet" type="text/css" href="css/kassa.css">
</head>

<div id="kassa2">
          <script type="text/javascript">
               var focused;
               function showKeypad(x, y, tBox){
                     var keypad = document.getElementById("keypad");
                     if(x != null && y != null){
                         keypad.style.marginLeft = x + "vw";              
                         keypad.style.marginTop = y + "vh";            
                     }
                     keypad.style.display = "block";
                     window.focused = document.getElementById(tBox);
                 }

                 function hideKeyPad(){
                      var keypad = document.getElementById("keypad");
                      keypad.style.display = "none";
                 }

                function SendInputs(input){
                      if(focused){
                            if(input != "CE"){
                                 var oldText = focused.value;
                                 oldText += input;
                                 focused.value = oldText;
                             }else
                             {
                                  focused.value = "";
                             }
                       }
                }
        </script>
    </head>
<body>
<div id="keypad">
    <input type="button" class="keypads" value="1" onclick="SendInputs('1')">
    <input type="button" class="keypads" value="2" onclick="SendInputs('2')">
    <input type="button" class="keypads" value="3" onclick="SendInputs('3')"><br>
    <input type="button" class="keypads" value="4" onclick="SendInputs('4')">
    <input type="button" class="keypads" value="5" onclick="SendInputs('5')">
    <input type="button" class="keypads" value="6" onclick="SendInputs('6')"><br>
    <input type="button" class="keypads" value="7" onclick="SendInputs('7')">
    <input type="button" class="keypads" value="8" onclick="SendInputs('8')">
    <input type="button" class="keypads" value="9" onclick="SendInputs('9')"><br>
    <input type="button" class="keypads" value="CE" style="color:red;" onclick="SendInputs('CE')">
    <input type="button" class="keypads" value="0" onclick="SendInputs('0')">
    <input type="button" class="keypads" value="X" style="color:red;">
</div>
</body>