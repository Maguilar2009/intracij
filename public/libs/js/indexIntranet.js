(function($) {

    var opcion;               
    var imgOpcion;

    $("ul#accordionSidebar li").on({
        mouseenter: function(){
            opcion = $(this);               
            imgOpcion = opcion.attr("data-img");
            
            opcion.find('img').attr("src","imgs/sidebar/sidebar" + imgOpcion + "Activo.jpg");  
            
            opcion.click(function(event){
                opcion.off('mouseleave');
                
                restablecerIconos(imgOpcion);
            });
        },

        mouseleave: function(){
            opcion.find('img').attr("src","imgs/sidebar/sidebar" + imgOpcion + "Inactivo.jpg");            
        }       
    });   
    
})(jQuery); 