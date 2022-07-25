$(document).ready(function() {
    PNotify.prototype.options.styling = "jqueryui";
    notificar();
    setInterval(notificar, 30000);
});

function notificar(){
    $.ajax({
        url: "index.php",
        data: 'entryPoint=gethabeas',
        type: "GET",
        dataType : "json",
        success: function(data) {
            //$('.confirmacion-message').html(data.mensaje);
            //alert(data.type);
            if(data.type != 'undefined'){
                //alert('si');

                for(var i=0;i<data.length;i++){

                    //// and here you can get your values //
                    var db_data = data[i];
                    (new PNotify({
                        title: "<strong>Habeas Data</strong>",
                        text: "El registro "+db_data.name+" tiene mas de 10 dias en proceso\nPaciente: "+db_data.cedula+"\n\n<a href='"+window.location.protocol+"//" + window.location.hostname+window.location.pathname+"?module=tms_habeasdata&offset=2&stamp=1478276044044683500&return_module=tms_habeasdata&action=DetailView&record="+db_data.id+"' target='_blank'><strong>Ver mas</strong></a>",
                        icon: 'ui-icon ui-icon-info',
                        type: 'info',
                        hide: false,
                        buttons: {
                            closer: true,
                            sticker: true
                        }
                    }));

                }
            }
        },

        error: function( xhr, status, errorThrown ) {
            //alert( "Lo sentimos, existe un problema!");
            console.log( "Error: " + errorThrown );
            console.log( "Status: " + status );
            console.dir( xhr );
        },
        complete: function( xhr, status) {

        }
    })
}