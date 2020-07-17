window.onload = function() {

    document.getElementById("link_um").onclick = function() {
        
        requisitar("video.html");
        return false;


    }  

    function mostrar(ajax) {
        var r= document.getElementById('alvo_estudos');
        var html = new HTML(ajax.resposeText);
        r.appendChild(document.createTextNode(html.url));

    }

    function requisitar(url) {
        var ajax = iniciaAjax();
        ajax.onreadstatechange = function(){
            if(ajax.readyState == 4){
              //alert("ajax.resposeText");
              //r.appendChild(document.createTextNode(ajax.resposeText);
                mostrar(ajax);

            }
        
        }
   
        ajax.open("POST", url);
        ajax.send(null);
    }

    function iniciaAjax() {
        var ajax = null;
        if(window.XMLHttpRequest){
          var ajax = new XMLHttpRequest();
        } else if(window.ActiveXObject) {
            try{
               ajax = new ActiveXObject("Msxml2.XMLHTTP");
            } catch(e) {
              ajax = new ActiveXObject("Microsoft.XMLHTTP");  
            }
            
        }

        return ajax;

    }


}
