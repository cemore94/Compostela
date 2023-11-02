$(document).ready( ()=>{
    var ChangeGrey = (moveX, gray, colors)=>{
        //let ancho = parseInt($(".dynamic-gray").css("width")); aqui debe ir el ancho del componente
        moveX = parseInt(moveX);
        //let ancho = 900;
        let ancho = parseInt($(".dynamic-gray").css("width"));
        //console.log({'a': moveX, 'b': ancho});
            let colorfull = parseFloat((moveX+25)/ancho*100);
        let blackwhite = parseFloat((ancho-(moveX+25))/ancho*100);
        
        if(blackwhite < 50){
            blackwhite = 101 - blackwhite; //normalmente es 100, pero lo hago por efectos de 1 pixel en el desplazamiento hacia la derecha
        }
        gray.css("clip-path", "polygon(0 0, "+blackwhite+"% 0, "+blackwhite+"% 100%, 0% 100%)");
        colors.css("clip-path", "polygon(100% 0, "+colorfull+"% 0, "+colorfull+"% 100%, 100% 100%)");
    }
    
    function mousemove(event) {
        if(event.target.className == "colorfull" || event.target.className == "blackwhite"){
            let desplazamiento = event.offsetX - 25; 
            if(desplazamiento < 0) desplazamiento = -25;
            desplazamiento += "px";
            $(".boton-movil").css("left", desplazamiento);  
            ChangeGrey(desplazamiento, $(".blackwhite"), $(".colorfull"));
      }
    }
    
    $(".boton-movil").click((evt)=>{
        $(".dynamic-gray").on('mousemove', mousemove);
    });
} );