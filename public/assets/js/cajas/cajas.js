$(document).ready(function () {

    $('#pdfCaja').click(function (e) {
        e.preventDefault();
        let id = $('#pdfCaja').attr('data-id');


        
         $.get('/cajas/pdf/' + id,
            function (data, textStatus, jqXHR) {
                    if(data){
                        $("#lectorPdf").attr('src','http://localhost/sistemaCajas/public/assets/documents/cajas/' + data)
                    }        
            }   
        );


    });

});