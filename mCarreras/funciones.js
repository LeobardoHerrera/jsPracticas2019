function llenar_lista(){
     // console.log("Se ha llenado lista");
    preCarga(1000,4);
    $.ajax({
        url:"llenarLista.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#lista").html(respuesta);
            $("#lista").slideDown("fast");
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    }); 
}

function ver_alta(){
    preCarga(800,4);
    $("#lista").slideUp('low');
    $("#alta").slideDown('low');
    $("#nombre").focus();
}

function ver_lista(){
    $("#alta").slideUp('low');
    $("#lista").slideDown('low');
}

$('#btnLista').on('click',function(){
    llenar_lista();
    ver_lista();
});

$("#frmAlta").submit(function(e){
  
    var nombre      = $("#nombre").val();
    var abreviatura = $("#abreviatura").val();

        $.ajax({
            url:"guardar.php",
            type:"POST",
            dateType:"html",
            data:{
                    'nombre':nombre,
                    'abreviatura':abreviatura
                 },
            success:function(respuesta){
              
            alertify.set('notifier','position', 'bottom-right');
            alertify.success('Se ha guardado el registro' );
            $("#frmAlta")[0].reset();
            $("#nombre").focus();
            // llenarLista();
            },
            error:function(xhr,status){
                alert(xhr);
            },
        });
        e.preventDefault();
        return false;
});


$("#frmActualiza").submit(function(e){
    //SEGUN MI CUADRO DE TEXTO
  
    var nombre      = $("#nombreE").val();
    var abreviatura = $("#abreviaturaE").val();
    
    var id_carrera  = $("#idE").val();

    //VARIABLES DE AJA
        $.ajax({
            url:"actualizar.php",
            type:"POST",
            dateType:"html",
            data:{
                // 'ID':nombre en la BD
                    'nombre':nombre,
                    'abreviatura':abreviatura,
                    'id':id_carrera
                 },
            success:function(respuesta){
              
            alertify.set('notifier','position', 'bottom-right');
            alertify.success('Se ha actualizado el registro' );
            $("#frmActualiza")[0].reset();
            $("#modalEditar").modal("hide");
            llenar_lista();
            //$("#nombre").focus();
            
            },
            error:function(xhr,status){
                alert(xhr);
            },
        });
        e.preventDefault();
        return false;
});

function abrirModalEditar(nombre,abreviatura,id){

    $("#frmActualiza")[0].reset();
    $("#nombreE").val(nombre);
    $("#abreviaturaE").val(abreviatura);
    $("#idE").val(id);

    $(".select2").select2();

    $("#modalEditar").modal("show");

     $('#modalEditar').on('shown.bs.modal', function () {
         $('#nombreE').focus();
     });   
}
function status(consecutivo,id){
 //console.log(consecutivo);
    var nomToggle = "#interruptor"+consecutivo;
    var nomBoton  = "#boton"+consecutivo;
    var numero    = "#tConsecutivo"+consecutivo;
    var carrera    = "#tCarrera"+consecutivo;
    var abreviatura    = "#tAbreviatura"+consecutivo;
   

    if ($(nomToggle).is(':checked')) {
     //console.log("activado");
     var valor =0;
     alertify.success('Registro habilitado' );
     $(nomBoton).removeAttr("disabled");
     $(numero).removeClass("desabilita");
     $(carrera).removeClass("desabilita");
     $(abreviatura).removeClass("desabilita");
     }else{
     console.log("desactivado");
     var valor=1;
     alertify.error('Registro deshabilitado');
     $(nomBoton).attr("disabled","disabled");
     $(numero).addClass("desabilita");
     $(carrera).addClass("desabilita");
     $(abreviatura).addClass("desabilita");
     
    }
   // console.log(consecutivo+'|'+valor);
    $.ajax({
            url:"status.php",
            type:"POST",
            dateType:"html",
            data:{
                // VARIABLES DE AJAX'ID':nombre en la BD
                    'valor':valor,
                    'id':id
                 },
            success:function(respuesta){
              
            alertify.set('notifier','position', 'bottom-right');
            
            },
            error:function(xhr,status){
                alert(xhr);
            },
        });
}