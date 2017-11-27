function showMenu(){
    var menu = window.document.getElementById("menus"),homem = window.document.getElementById("home"),homen = window.document.getElementById("homen");
    
    if(menu.className.indexOf("w3-show")==-1){
        menu.className+=" w3-show ";
    }
    else{
        menu.className = menu.className.replace("w3-show","");
    }
}

var flag = false,flag2=false; //validation variable for form submittion

function validate_user(){ //For validate the user existance in database
    unameF = document.getElementById('username2');
    uname = unameF.value;
    if(uname!=""&&flag){
        var user = new XMLHttpRequest();
        user.onreadystatechange = function(){
          if(this.readyState==4 && this.status==200){
            var span = window.document.createElement("span");
            var attr = window.document.createAttribute("class"),attr2 = window.document.createAttribute("id");
            attr.value = "w3-tiny w3-margin-top w3-animate-zoom";
            attr2.value = "unamec";
            var result = this.responseText;
            if(result=="true"){
                flag2 = false;
                attr.value+=" w3-text-red";
                span.appendChild(window.document.createTextNode("*Usename already exists"))
            }   
            else{
                flag2 = true;
                attr.value+=" w3-text-green";
                span.appendChild(window.document.createTextNode("*Usename available"))    
            } 
            span.setAttributeNodeNS(attr);
            span.setAttributeNodeNS(attr2);
            unameF.parentNode.appendChild(span);
          }
        };
        user.open("GET","./_backEnd/validateUser.php?q="+uname,true);
        user.send();
        
    }
    
}

window.onkeyup = function(event){
    var ele = event.target;
    if(ele==window.document.getElementById('first-name1') || ele==window.document.getElementById('last-name1')){
        var msg = (ele==window.document.getElementById('first-name1'))?"msg1":"msg2";
        if(/^[a-zA-Z]*$/.test(ele.value)){
            if(window.document.getElementById(msg)!=null){ele.parentNode.removeChild(window.document.getElementById(msg));}
            ele.style.borderBottomColor = 'green';
            flag = true;
        }
        else{
            flag = false;
            if(window.document.getElementById(msg)==null){
                var elem = window.document.createElement("p"), attr1 = window.document.createAttribute("id"), attr2 = window.document.createAttribute("class");
                attr1.value = msg;
                attr2.value = "w3-tiny w3-margin-top w3-text-red w3-animate-zoom";
                elem.setAttributeNode(attr1);
                elem.setAttributeNode(attr2);
                elem.appendChild(window.document.createTextNode("*Only letters are allowed"));
                ele.style.borderBottomColor = 'red';
                ele.parentNode.appendChild(elem);
            }
        }
    }
    else if(ele==window.document.getElementById('username2')){
        var msg = "msg3";
        if(window.document.getElementById("unamec")!=null){ele.parentNode.removeChild(window.document.getElementById("unamec"));}
        if(/^[a-zA-Z0-9]*[@]?[_]?[a-zA-Z0-9]*$/.test(ele.value)){
            if(window.document.getElementById(msg)!=null){ele.parentNode.removeChild(window.document.getElementById(msg));}
            ele.style.borderBottomColor = 'green';
            flag = true;
        }
        else{
            flag = false;
            if(window.document.getElementById(msg)==null){
                var elem = window.document.createElement("p"), attr1 = window.document.createAttribute("id"), attr2 = window.document.createAttribute("class");
                attr1.value = msg;
                attr2.value = "w3-tiny w3-margin-top w3-text-red w3-animate-zoom";
                elem.setAttributeNode(attr1);
                elem.setAttributeNode(attr2);
                elem.appendChild(window.document.createTextNode("*Only letters, digits, @ and _ are allowed"));
                ele.style.borderBottomColor = 'red';
                ele.parentNode.appendChild(elem);
            }
        }
        if(flag){
            validate_user();
        }
    }
    else if(ele==window.document.getElementById("pswd2")){
        var msg = "msg4";
        if((/^[a-zA-Z0-9]*[A-Z]+[a-zA-Z0-9]*[!`~+*/-@%$#&]+[a-zA-Z0-9]+$/.test(ele.value))&&(ele.value.search(window.document.getElementById('cpswd2').value)!=-1 || window.document.getElementById('cpswd2').value.length==0)&&ele.value.length>=8){
            if(window.document.getElementById(msg)!=null){ele.parentNode.removeChild(window.document.getElementById(msg));}
            ele.style.borderBottomColor = 'green';
            flag = true;
        }
        else if((/^[a-zA-Z0-9]*[A-Z]+[a-zA-Z0-9]*[!`~+*/-@%$#&]+[a-zA-Z0-9]+$/.test(ele.value)==false)){
            flag = false;
            if(window.document.getElementById(msg)!=null){ele.parentNode.removeChild(window.document.getElementById(msg));}
            var elem = window.document.createElement("p"), attr1 = window.document.createAttribute("id"), attr2 = window.document.createAttribute("class");
            attr1.value = msg;
            attr2.value = "w3-tiny w3-margin-top w3-text-red w3-animate-zoom";
            elem.setAttributeNode(attr1);
            elem.setAttributeNode(attr2);
            elem.appendChild(window.document.createTextNode("*Password must have one upper letter, one special character, one numeric value eg: Axyz@1234"));
            ele.style.borderBottomColor = 'red';
            ele.parentNode.appendChild(elem);
        }
        else if(ele.value.length<8){
            flag = false;
            if(window.document.getElementById(msg)!=null){ele.parentNode.removeChild(window.document.getElementById(msg));}
            var elem = window.document.createElement("p"), attr1 = window.document.createAttribute("id"), attr2 = window.document.createAttribute("class");
            attr1.value = msg;
            attr2.value = "w3-tiny w3-margin-top w3-text-red w3-animate-zoom";
            elem.setAttributeNode(attr1);
            elem.setAttributeNode(attr2);
            elem.appendChild(window.document.createTextNode("*Password is too short"));
            ele.style.borderBottomColor = 'red';
            ele.parentNode.appendChild(elem);
        }
        else{
            flag = false;
            if(window.document.getElementById(msg)!=null){ele.parentNode.removeChild(window.document.getElementById(msg));}
            var elem = window.document.createElement("p"), attr1 = window.document.createAttribute("id"), attr2 = window.document.createAttribute("class");
            attr1.value = msg;
            attr2.value = "w3-tiny w3-margin-top w3-text-red w3-animate-zoom";
            elem.setAttributeNode(attr1);
            elem.setAttributeNode(attr2);
            elem.appendChild(window.document.createTextNode("*Password does not match"));
            ele.style.borderBottomColor = 'red';
            ele.parentNode.appendChild(elem);
        }
    }
    else if(ele==window.document.getElementById("cpswd2")){
        var msg = "msg5";
        if(ele.value.search(window.document.getElementById('pswd2').value)!=-1){
            if(window.document.getElementById(msg)!=null){ele.parentNode.removeChild(window.document.getElementById(msg));}
            ele.style.borderBottomColor = 'green';
            flag = true;
        }
        else{
            flag = false;
            if(window.document.getElementById(msg)==null){
                var elem = window.document.createElement("p"), attr1 = window.document.createAttribute("id"), attr2 = window.document.createAttribute("class");
                attr1.value = msg;
                attr2.value = "w3-tiny w3-margin-top w3-text-red w3-animate-zoom";
                elem.setAttributeNode(attr1);
                elem.setAttributeNode(attr2);
                elem.appendChild(window.document.createTextNode("*Password does not match"));
                ele.style.borderBottomColor = 'red';
                ele.parentNode.appendChild(elem);
            }
        }   

    }
    else{
        
    }
}