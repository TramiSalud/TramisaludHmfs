/*SUGAR.util.doWhen("typeof(check_form) != 'undefined' && typeof check_form == 'function'", function() {
	check_form = _.wrap(check_form, function(originalCheckFormFunction, originalCheckFormFunctionArg) {
		isCustomValid =  (
				validardocumento('name','El número de documento no es valido')	
				);
		if(isCustomValid) {
		    // If custom validation is positive, calling original Sugar validation
		    return originalCheckFormFunction(originalCheckFormFunctionArg);
		} else {
		    return true;
		}
	    });
    });*/
    
function invocar() {
    var callback = {
        success: function(o) {
        	if(o.responseText == 'true'){
        		//alert ("La cuenta ya existe");
				YAHOO.SUGAR.MessageBox.show({msg: 'El Paciente ya se encuentra Registrado', title: 'Tramisald CRM'} );
        		document.getElementById("SAVE_HEADER").setAttribute("disabled", "disabled"); 
        		document.getElementById("SAVE_FOOTER").setAttribute("disabled", "disabled");
        	
        	} else {
        		document.getElementById("SAVE_HEADER").removeAttribute("disabled"); 
        		document.getElementById("SAVE_FOOTER").removeAttribute("disabled"); 
        		
        	}
        	//checkValidate('EditView', 'documento_identidad_c');
        	//alert( o.responseText);
            //document.getElementById("div_info").innerHTML = o.responseText;
        }
    }
	var connectionObject = YAHOO.util.Connect.asyncRequest("GET", window.location.protocol + "//" + window.location.host+"/tramisaludhmfs/index.php?entryPoint=SLA&account_id="+ document.getElementById('name').value, callback);	
	
	
}

function validardocumento(obj,message) {
 
	var nrodoc=document.getElementById(obj).value;
	if (isNaN(nrodoc)){
		//alert(message);
		YAHOO.SUGAR.MessageBox.show({msg: message, title: 'Tramisalud  CRM'} );
		return false;
	}
	return true;
} 



function ValidarNumeroDocumento()
{
	var documento;
	var confirmacion;

	documento = document.getElementById('name').value;
	confirmacion = document.getElementById('confirmaciondocumento_c').value;
	
	if(documento != confirmacion)
	{
		alert("Los números de documentos no coincien. Verifiquelos por favor.");
	}
}
