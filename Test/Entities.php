<?php
    class MenuPanel{
        function MenuPanel($title, $img, $addr){
            echo "<a href=\"".$addr."\" class=\"wrapper w3-white w3-card w3-hover-green  w3-margin\">
                <img class=\"w3-left w3-image w3-circle\" src=\"".$img."\" width=\"80px\" height=\"80px\"/>
                <div class=\"w3-right \" style=\"margin-top: 5%;\">".$title."</div>
            </a>";          
        }
    }

    class DashboardMenu{
        function DashboardMenu($name, $id, $title){
            echo "<section name=\"".$name."\" id = \"".$id."\" class=\" w3-border w3-border-green recentTutorial\" style=\"margin:1% 1% 3% 1%\">
            <div class=\"w3-panel w3-border-green w3-xlarge tengerine\"><div class=\"w3-border-bottom w3-border-sand \" style=\"text-shadow:1px 1px 0 #444 ;display:inline-block\">".$title."</div></div>
            <div class=\"w3-padding flexContainer\"></div></section>";
        }
    }
?>