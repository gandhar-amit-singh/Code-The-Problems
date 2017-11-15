function showMenu(){
    var menu = document.getElementById("menus"),homem = document.getElementById("home"),homen = document.getElementById("homen");
    
    if(menu.className.indexOf("w3-show")==-1){
        menu.className+=" w3-show ";
        homem.setAttribute("style","padding-top:6%");
        homen.setAttribute("style","padding-top:6%");
        homem.className = homem.className.replace("w3-padding-16","");
        homen.className = homen.className.replace("w3-padding-16","");
    }
    else{
        homem.setAttribute("style","padding-top:0");
        homen.setAttribute("style","padding-rop:0");
        menu.className = menu.className.replace("w3-show","");
        homem.className+=" w3-padding-16";
        homen.className+=" w3-padding-16";
    }
}