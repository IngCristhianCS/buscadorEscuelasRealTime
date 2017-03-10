$(document).ready(function(){
	var notification;
	var wsUri = "ws:"+window.location.hostname+":12345";
	websocket = new WebSocket(wsUri);
	var myip ;

	websocket.onopen = function(ev) {
		console.log('Connectado !!!');
	};
	websocket.onerror	= function(ev){
		console.log('Error Occurred '+ev.data);
	};

	websocket.onclose 	= function(ev){
		console.log('Connection Closed');
	};

    websocket.onmessage = function(ev) {
    	var msg = JSON.parse(ev.data);
		var mensaje = msg.mensaje;
		var usuario = msg.usuario;
		var direccion = msg.direccion;
		var id = msg.id;
		var tabla = msg.tabla;
		var tdtabla = msg.tdtabla;
		var accion = msg.accion;

		if(!usuario){
			usuario ='system' ;
		}else{
			createMessage (mensaje,usuario,direccion,id,tabla,accion);
		}
	};


	function createMessage (mensaje,usuario,direccion,id,tabla,accion) {
		var dataString = 'valor='+id+"&tabla="+tabla;
        $.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Administrador",data: dataString,
            success: function(data) {
				crearTdTabla(id,tabla,data,accion);
				if (tabla=='Escuela'||tabla=="Ubicacion") {
					obtenerDetalles(id);
				}
				selectorNotificacion(mensaje,usuario,direccion,accion);
		    }
        });
	}
	function crearTdTabla(id,tabla,tdtabla,accion){
		if ($("#"+tabla+id).length) {
			if (accion=="eli") {
				($("#"+tabla+id)).addClass('label-danger');
				($("#"+tabla+id)).fadeOut(1000);
			}else if(accion=="act") {
				($("#"+tabla+id)).addClass('label-warning');
				$("#"+tabla+id).html(tdtabla);
			}
		}else{
			$('<tr id="'+tabla+id+'"> '+tdtabla+' </tr>').prependTo('#resultado'+tabla);
			if (accion=="act") {
				($("#"+tabla+id)).addClass('label-warning');
			} else {
				($("#"+tabla+id)).addClass('label-primary');
			}
		}
	}
	function obtenerDetalles(id){
		var dataEscuela="valor="+id;
		$.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Detalles",data: dataEscuela,
            success: function(data) {
            	$("#detalles").html(data);
            	($("#informacion")).addClass('label-warning');
		    }
        });
	}
	function selectorNotificacion(mensaje,usuario,direccion,accion){
		if (Notification) {
            if (Notification.permission !== "granted") {
                Notification.requestPermission();
            }else{
            	return notificationHTML(mensaje,usuario,direccion,accion);
            }
        }else{
        	return createNotificacion(mensaje,usuario,direccion,accion);
        }
        return createNotificacion(mensaje,usuario,direccion,accion);
	}
	function createNotificacion(mensaje,usuario,direccion,id,tabla,accion){
		//crearTdTabla(id,tabla,accion);
		alertify.set('notifier','position', 'top-right');

		var msg =alertify.notify('<img style="width:70px;" src="http://'+window.location.hostname+"/ixtapaluca"+'/img/logow.ico">'+usuario+'<br>'+mensaje).dismissOthers();
		 msg.callback = function (isClicked) {
         if(isClicked){
            redirigir(direccion);
         }
         else{
         	console.log('dismissed');
         }
 		};
 	}
	function notificationHTML(mensaje,usuario,direccion,id,tabla,accion){
		//crearTdTabla(id,tabla,accion);
		var title = "Educacion Ixtapaluca"
        var extra = {

            icon: "http://"+window.location.hostname+"/ixtapaluca"+"/img/logow.ico",
            body: usuario+'\n '+mensaje,
            dir: 'auto',
			lang: 'ES',
			tag: id,
            vibrate: [200, 100, 200]

        };
        var noti = new Notification( title, extra);

	    noti.onshow=function(){
	    	console.log('Notificación: show')
	    }
	    noti.onclick=function(){
	    	redirigir(direccion);
	    	noti.close();
	    }
	    noti.onerror=function(){
	    	console.log('Notificación: error')
	    }
	    noti.onclose=function(){
	    	console.log('Notificación: close')
	    }
	    setTimeout(function() {noti.close()}, 10000);
	}
	function redirigir(direccion){
		window.location.href=direccion
	}
});
