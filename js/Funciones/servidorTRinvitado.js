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
		//alert(tabla+id);
		if (tabla=='Escuela'||tabla=="Ubicacion"){
			var nomEscuela="valor="+id+'&campo=cct&nombre';
			$.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=EscuelaG",data: nomEscuela,
	            success: function(data) {
	            	//alert(data);
	            	var escuela="con CCT "+id+" y Nombre "+data;
	            	direccion="/detalles/"+id;
					if (accion=="eli") {
						mensaje="Se Elimino la Escuela "+escuela;
					} else if (accion=="act") {
						mensaje="Se Actualizo la Escuela "+escuela;
					} else {
						mensaje="Se Registro la Escuela "+escuela;
					}
					var dataEscuela= 'valor='+id+'&campo=cct&socket';
			        $.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=EscuelaG",data: dataEscuela,
			            success: function(data) {
							crearTdEscuelaG(id,"Escuela",data,accion);
							obtenerDetalles(id);
							selectorNotificacion(mensaje,usuario,direccion,accion);
					    }
			        });
			    }
	        });
		}
	}
	function obtenerDetalles(id){
		var dataEscuela="valor="+id;
		$.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=Detalles",data: dataEscuela,
            success: function(data) {
            	//alert(data);
            	$("#detalles").html(data);
            	($("#informacion")).addClass('label-warning');
		    }
        });
	}
	function obtenerDatos(id){
		var dataEscuela="valor="+id+'&campo=cct&nombre';
		$.ajax({type: "POST",url: "http://"+window.location.hostname+"/ixtapaluca"+"/php/bsc.php?t=EscuelaG",data: dataEscuela,
            success: function(data) {
            	return data;
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
	function crearTdEscuelaG(id,tabla,tdtabla,accion){
		if ($("#"+tabla+'G'+id).length) {
			if (accion=="eli") {
				($("#"+tabla+'G'+id)).addClass('label-danger');
				($("#"+tabla+'G'+id)).fadeOut(1000);
			}else if(accion=="act") {
				($("#"+tabla+'G'+id)).addClass('label-warning');
				$("#"+tabla+'G'+id).html(tdtabla);
			}
		}else{
			$('<tr id="'+tabla+'G'+id+'"> '+tdtabla+' </tr>').prependTo('#resultado'+tabla+'G');
			if (accion=="act") {
				($("#"+tabla+'G'+id)).addClass('label-warning');
			} else {
				($("#"+tabla+'G'+id)).addClass('label-primary');
			}
		}
	}
	function createNotificacion(mensaje,usuario,direccion,id,tabla,accion){
		//crearTdTabla(id,tabla,accion);
		alertify.set('notifier','position', 'top-right');

		var msg =alertify.notify('<img style="width:70px;" src="http://'+window.location.hostname+"/ixtapaluca"+'/img/logow.ico"><br>'+mensaje).dismissOthers();
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