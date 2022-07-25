var arr;
function Check() {
	if(document.EditView.servicio_c || document.EditView.cama_c  ) {
		var  cama_c = document.EditView.cama_c.options;
		arr = new Array;
		for(i=0; i< cama_c.length; i++) {
			arr.push( cama_c[i].value,  cama_c[i].text);
		}
	}
	initData();
}

function initData(){
	var current_p= document.EditView.servicio_c  ;
	var code_p = current_p.value;
	var current_v= document.EditView.cama_c;
	var code_v = current_v.value;
	var code_v_idx = 0;
	var select_ticket = document.EditView.cama_c.options;
	select_ticket.length=0;
	var l = 0;
	for(k=0; k<arr.length; k+=2) {
		if(arr[k].substr(0,2) == code_p || arr[k] == '') {
    		select_ticket.length++;
			select_ticket[select_ticket.length-1].value = arr[k];
			select_ticket[select_ticket.length-1].text = arr[k+1];
       		if(code_v == arr[k]){
				code_v_idx = l;
	       }
	       l++;
    	}
	}
	if(code_p == ''){
		select_ticket[select_ticket.length-1].value = '';
		select_ticket[select_ticket.length-1].text = 'Select from Servicio';
	}
	document.EditView.cama_c.selectedIndex = code_v_idx;
}

if (window.addEventListener){
	window.addEventListener("load", Check, false);
} else if (window.attachEvent){
	window.attachEvent("onload", Check);
} else if (document.getElementById){
	window.onload=Check;
}

/*vista creacion rapida*/

var arrc = new Array;
var intro = 0;
function Checkc() {
	if(intro == 0){
		if(document.form_SubpanelQuickCreate_gbi_Anexo9.servicio_c || document.form_SubpanelQuickCreate_gbi_Anexo9.cama_c  ) {
			var  cama_c = document.form_SubpanelQuickCreate_gbi_Anexo9.cama_c.options;
			arrc = new Array;
			for(i=0; i< cama_c.length; i++) {
				arrc.push( cama_c[i].value,  cama_c[i].text);
			}
			intro = 1;
		}
	}
	initDatac();
}


function initDatac(){
	var current_pc = document.form_SubpanelQuickCreate_gbi_Anexo9.servicio_c;
	var code_pc = current_pc.value;
	var current_vc= document.form_SubpanelQuickCreate_gbi_Anexo9.cama_c;
	var code_vc = current_vc.value;
	var code_vc_idx = 0;
	var select_ticketc = document.form_SubpanelQuickCreate_gbi_Anexo9.cama_c.options;
	select_ticketc.length=0;
	var l = 0;
	for(k=0; k<arrc.length; k+=2) {
		if(arrc[k].substr(0,2) == code_pc || arrc[k] == '') {
    		select_ticketc.length++;
			select_ticketc[select_ticketc.length-1].value = arrc[k];
			select_ticketc[select_ticketc.length-1].text = arrc[k+1];
       		if(code_vc == arrc[k]){
				code_vc_idx = l;
	       }
	       l++;
    	}
	}
	if(code_pc == ''){
		select_ticketc[select_ticketc.length-1].value = '';
		select_ticketc[select_ticketc.length-1].text = 'Select from Servicio';
	}
	document.form_SubpanelQuickCreate_gbi_Anexo9.cama_c.selectedIndex = code_vc_idx;
}

if (window.addEventListener) {
	window.addEventListener("load", Checkc, false);
} else if (window.attachEvent) {
	window.attachEvent("onload", Checkc);
} else if (document.getElementById) {
	window.onload=Checkc;
}