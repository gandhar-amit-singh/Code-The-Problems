function showMenu(){
    var menu = document.getElementById("menus"),homem = document.getElementById("home"),homen = document.getElementById("homen");
    
    if(menu.className.indexOf("w3-show")==-1){
        menu.className+=" w3-show ";
    }
    else{
        menu.className = menu.className.replace("w3-show","");
    }
}