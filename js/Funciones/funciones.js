function msjEliminar(mensaje,direccion){
    swal({   title: "Eliminar",   text: ""+mensaje+"",
        type: "warning",   showCancelButton: true,
        confirmButtonColor: "#DD6B55", confirmButtonText: "Eliminar",
        cancelButtonText: "Cancelar",   closeOnConfirm: false,
        closeOnCancel: false }).then(function(isConfirm){
            if (isConfirm) {
                window.location=direccion;
            } else {
                swal("Cancelado", "Cancelo la Eliminacion :)", "error");
        } });
}
function eliminarEscuela(cct){
    msjEliminar("Realmente desea eliminar la Escuela con CCT "+cct , "http://"+window.location.hostname+"/ixtapaluca"+"/sql/Escuela/eli/"+cct);
}
function eliminarZona(id,zona){
    msjEliminar("Realmente desea eliminar la Zona "+zona , "http://"+window.location.hostname+"/ixtapaluca"+"/sql/Zona/eli/"+id);
}
function eliminarSupervision(cct){
    msjEliminar("Realmente desea eliminar la Supervision con CCT "+cct , "http://"+window.location.hostname+"/ixtapaluca"+"/sql/Supervision/eli/"+cct);
}
function eliminarPersonal(rfc){
    msjEliminar("Realmente desea eliminar el Empleado con RFC "+rfc , "http://"+window.location.hostname+"/ixtapaluca"+"/sql/Personal/eli/"+rfc);
}
function eliminarPersonalEsc(rfc,cct){
    msjEliminar("Realmente desea eliminar el Empleado con RFC "+rfc , "http://"+window.location.hostname+"/ixtapaluca"+"/sql/PersonalEsc/eli/"+cct+"/"+rfc);
}
function abrirEnPestana(url) {
    var a = document.createElement("a");
    a.target = "_blank";
    a.href = url;
    a.click();
}
$(document).ready(function(){
    document.oncontextmenu = function(){alert("Dejaste de presionar el click izquierdo");}
    //mayusculas campos
    $(".mayusculas").keyup(function() {
         $(this).val($(this).val().toUpperCase());
    });
    $('#floating-panel').hide();
    $('#position-cell').hide();
    $('#links_table').hide();
    $('#pano-cell').hide();
    $('#heading-cell').hide;
    $('#pitch-cell').hide;
    $('#abrirInformacion').hide();
    $('#cerrarInformacion').click( function(){
        $('#informacion').hide();$('#cerrarInformacion').hide();
        $('#abrirInformacion').show();
    });
    $('#abrirInformacion').click( function(){
        $('#informacion').show();$('#abrirInformacion').hide();
        $('#cerrarInformacion').show();
    });
	$('#Nombre').show();$('#CCT').hide();$('#Zona').hide();
	$('#grupo_0').click( function(){
		$('#Nombre').show();$('#CCT').hide();$('#Zona').hide();
	});
	$('#grupo_1').click( function(){
		$('#CCT').show();$('#Nombre').hide();$('#Zona').hide();
	});
	$('#grupo_2').click( function(){
		$('#Nombre').hide();$('#CCT').hide();$('#Zona').show();
	});
    $('#b_nombre_general').keyup(function(){
        var valor = $(this).val();var dataString = 'campo=nombre&valor='+valor;
        $.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=EscuelaG",data: dataString,
            success: function(data) {
              $('#resultadoEscuelaG').fadeIn(1000).html(data);
            }
        });
    });
    $('#b_cct_general').keyup(function(){
        var valor = $(this).val();var dataString = 'campo=cct&valor='+valor;
        $.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=EscuelaG",data: dataString,
            success: function(data) {
              $('#resultadoEscuelaG').fadeIn(1000).html(data);
            }
        });
    });
	$('#b_nombre').keyup(function(){
	    var valor = $(this).val();var dataString = 'campo=nombre&valor='+valor;
	    $.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Escuela",data: dataString,
	        success: function(data) {
	          $('#resultadoEscuela').fadeIn(1000).html(data);
	        }
	    });
	});
    $('#b_cct').keyup(function(){
        var valor = $(this).val();var dataString = 'campo=cct&valor='+valor;
        $.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Escuela",data: dataString,
            success: function(data) {
              $('#resultadoEscuela').fadeIn(1000).html(data);
            }
        });
    });
    $('#b_sede').keyup(function(){
        var valor = $(this).val();var dataString = 'campo=sede&valor='+valor;
        $.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Supervision",data: dataString,
            success: function(data) {
              $('#resultadoSupervision').fadeIn(1000).html(data);
            }
        });
    });
    $('#b_cctsuper').keyup(function(){
        var valor = $(this).val();var dataString = 'campo=cct&valor='+valor;
        $.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Supervision",data: dataString,
            success: function(data) {
              $('#resultadoSupervision').fadeIn(1000).html(data);
            }
        });
    });
    $('#b_rfc').keyup(function(){
        var valor = $(this).val();var dataString = 'campo=rfc&valor='+valor;
        $.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Personal",data: dataString,
            success: function(data) {
              $('#resultadoPersonal').fadeIn(1000).html(data);
            }
        });
    });
    $('#b_zona').keyup(function(){
        var valor = $(this).val();var dataString = 'campo=zona&valor='+valor;
        $.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=ZonaT",data: dataString,
            success: function(data) {
              $('#resultadoZona').fadeIn(1000).html(data);
            }
        });
    });
    $('#b_nombrep').keyup(function(){
        var valor = $(this).val();var dataString = 'campo=nombre&valor='+valor;
        $.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Personal",data: dataString,
            success: function(data) {
              $('#resultadoPersonal').fadeIn(1000).html(data);
            }
        });
    });
    //paneles del formulario Escuela
    $('#lDat').addClass('active');
    $('#panDat').show();$('#panInm').hide();$('#panPer').hide();
    $('#lDir').click( function(){
        $('#lDir').addClass('active');
        $('#lDat').removeClass('active');$('#lInm').removeClass('active');$('#lPer').removeClass('active');
        $('#panDir').show();
        $('#panDat').hide();$('#panInm').hide();$('#panInm').hide();
    });
    $('#lDat').click( function(){
        $('#lDat').addClass('active');
        $('#lDir').removeClass('active');$('#lInm').removeClass('active');$('#lPer').removeClass('active');
        $('#panDat').show();
        $('#panDir').hide();$('#panInm').hide();$('#panInm').hide();
    });
    $('#lInm').click( function(){
        $('#lInm').addClass('active');
        $('#lDir').removeClass('active');$('#lDat').removeClass('active');$('#lPer').removeClass('active');
        $('#panInm').show();
        $('#panDat').hide();$('#panDir').hide();$('#panPer').hide();
    });
    $('#lPer').click(function(){
        $('#lPer').addClass('active');mayuscula("#b_nombre");
        $('#lDir').removeClass('active');$('#lInm').removeClass('active');$('#lDat').removeClass('active');
        $('#panPer').show();
        $('#panDat').hide();$('#panInm').hide();$('#panDir').hide();
    });

    //buscadores
   $('#cp').keyup(function(){
        var codigo = $(this).val();
        var dataString = 'codigo='+ codigo;
        $.ajax({
            type: "POST",
            url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Cp",
            data: dataString,
            success: function(data) {
                $('#codigo').fadeIn(1000).html(data);
                $('#seleccionado').fadeIn(1000);
                $('.suggest-cp').click( function(){
                //Obtenemos la id unica de la sugerencia pulsada
                var id = $(this).attr('id');
                var estado = $(this).attr('data');
                //Editamos el valor del input con data de la sugerencia pulsada
                $('#cp').val($('#'+id).attr('data3'));
                $('#id_asentamiento').val($('#'+id).attr('id'));
      //Hacemos desaparecer el resto de sugerencias
                $('#codigo').fadeOut(1000);
                $('#seleccionado').html('Municipio:'+$('#'+id).attr('data')+ '<br> '+$('#'+id).attr('data2')+'');
                $('#codigo').html('Has seleccionado el '+id+' '+$('#'+id).attr('data')+ ' '+$('#'+id).attr('data2')+'');
                $('#cp').focus();
              });
            }
        });
    });
   $('#cctbuscar').keyup(function(){
        var codigo = $(this).val();
        var dataString = 'cct='+ codigo;
        $.ajax({
            type: "POST",
            url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=CCT",
            data: dataString,
            success: function(data) {
                $('#cctbus').fadeIn(1000).html(data);
                $('#seleccionado').fadeIn(1000);
                $('.suggest-cp').click( function(){
                //Obtenemos la id unica de la sugerencia pulsada
                var id = $(this).attr('id');
                //Editamos el valor del input con data de la sugerencia pulsada
                $('#cctbuscar').val($('#'+id).attr('id'));
      //Hacemos desaparecer el resto de sugerencias
                $('#cctbus').fadeOut(1000);
                $('#seleccionado').html('Has seleccionado el CCT:'+$('#'+id).attr('data')+ '<br> '+$('#'+id).attr('data2')+'');
                $('#cctbus').html('Has seleccionado el '+id);
              });
            }
        });
    });

   $('#zona').keyup(function(){
        var id = $(this).val();
        var dataString = 'id='+ id+"&f=s";
        $.ajax({
            type: "POST",
            url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Zona",
            data: dataString,
            success: function(data) {
                $('#zonas').fadeIn(1000).html(data);
                $('#selec').fadeIn(1000);
                $('.suggest-cp').click( function(){
                //Obtenemos la id unica de la sugerencia pulsada
                var id = $(this).attr('id');
                //Editamos el valor del input con data de la sugerencia pulsada
                $('#zona').val($('#'+id).attr('data'));
                $('#id_zona').val(id);
                //Hacemos desaparecer el resto de sugerencias
                $('#selec').html('Has seleccionado la  Zona:'+$('#'+id).attr('data')+'');
                $('#zonas').fadeOut(1000).empty();;
              });
            }
        });
    });
   $('#zonaBA').keyup(function(){
        var id = $(this).val();
        var dataString = 'id='+ id+"&f=e";
        $.ajax({
            type: "POST",
            url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Zona",
            data: dataString,
            success: function(data) {
                $('#zonas').fadeIn(1000).html(data);
                $('#selec').fadeIn(1000);
                $('.suggest-cp').click( function(){
                //Obtenemos la id unica de la sugerencia pulsada
                var id = $(this).attr('id');
                //Editamos el valor del input con data de la sugerencia pulsada
                $('#zonaBA').val($('#'+id).attr('data'));
                $('#id_zona').val(id);
                //Hacemos desaparecer el resto de sugerencias
                $('#selec').html('Has seleccionado la  Zona:'+$('#'+id).attr('data')+'');
                $('#zonas').fadeOut(1000).empty();;
              });
            }
        });
    });
    $('#funcion').keyup(function(){
        var id = $(this).val();
        var dataString = 'id='+ id;
        $.ajax({
            type: "POST",
            url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Funcion",
            data: dataString,
            success: function(data) {
                $('#funciones').fadeIn(1000).html(data);
                $('#selec').fadeIn(1000);
                $('.suggest-cp').click( function(){
                //Obtenemos la id unica de la sugerencia pulsada
                var id = $(this).attr('id');
                //Editamos el valor del input con data de la sugerencia pulsada
                $('#funcion').val($('#'+id).attr('data'));
                $('#id_funcion').val(id);
                //Hacemos desaparecer el resto de sugerencias
                $('#selec').html('Has seleccionado la  Funcion:'+$('#'+id).attr('data')+'');
                $('#funciones').fadeOut(1000).empty();;
              });
            }
        });
    });

   $('#turno').keyup(function(){
        var id = $(this).val();
        var dataString = 'id='+ id;
        $.ajax({
            type: "POST",
            url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Turno",
            data: dataString,
            success: function(data) {
                $('#turnos').fadeIn(1000).html(data);
                $('#selecTu').fadeIn(1000);
                $('.suggest-turno').click( function(){
                //Obtenemos la id unica de la sugerencia pulsada
                var id = $(this).attr('id');
                //Editamos el valor del input con data de la sugerencia pulsada
                $('#turno').val($('#'+id).attr('data'));
                $('#id_turno').val(id);
                //Hacemos desaparecer el resto de sugerencias
                $('#selecTu').html('Has seleccionado el  Turno:'+$('#'+id).attr('data')+'');
                $('#turnos').fadeOut(1000).empty();
              });
            }
        });
    });

    $('#nivel').keyup(function(){
        var id = $(this).val();
        var dataString = 'id='+ id;
        $.ajax({
            type: "POST",
            url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Nivel",
            data: dataString,
            success: function(data) {
                $('#niveles').fadeIn(1000).html(data);
                $('#selecNi').fadeIn(1000);
                $('.suggest-nivel').click( function(){
                //Obtenemos la id unica de la sugerencia pulsada
                var id = $(this).attr('id');
                //Editamos el valor del input con data de la sugerencia pulsada
                $('#nivel').val($('#'+id).attr('data'));
                $('#id_nivel').val(id);
                //Hacemos desaparecer el resto de sugerencias
                $('#selecNi').html('Has seleccionado el  Nivel:'+$('#'+id).attr('data')+'');
                $('#niveles').fadeOut(1000).empty();
              });
            }
        });
    });
    $("#btnPdf").click(function () {
        var dataString="s="+$(this).attr("tabla");
        $.ajax({
            type: "POST",
            url: "http://"+window.location.hostname+"/ixtapaluca"+"/pdf",
            data: dataString,
            success: function(data) {
                $("#pdf").html(data);
            }
        });
    });
    // .modal-backdrop classes
    $(".modal-transparent").on('show.bs.modal', function () {
      setTimeout( function() {
        $(".modal-backdrop").addClass("modal-backdrop-transparent");
      }, 0);
    });
    $(".modal-transparent").on('hidden.bs.modal', function () {
      $(".modal-backdrop").addClass("modal-backdrop-transparent");
    });
    $(".modal-fullscreen").on('show.bs.modal', function () {
      setTimeout( function() {
        $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
      }, 0);
    });
    $(".modal-fullscreen").on('hidden.bs.modal', function () {
      $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
    });

   $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('a.scroll-top').fadeIn();
            //$('#navegacion').animate($('#navegacion').addClass('navbar-fixed-top'),600);
        } else {
            $('a.scroll-top').fadeOut();
           // $('#navegacion').animate($('#navegacion').removeClass('navbar-fixed-top'),600);
        }
    });
    //Crea la animacion al dar clic sobre el boton
    $('a.scroll-top').click(function() {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });
});

jQuery(document).ready(function(){
    // binds form submission and fields to the validation engine
    jQuery("#formID").validationEngine();
});
function checkHELLO(field, rules, i, options){
    if (field.val() != "HELLO") {
        return options.allrules.validate2fields.alertText;
    }
}
