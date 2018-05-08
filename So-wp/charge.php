$( '.cmd' ).click(function() { 
  var doc = new jsPDF('portrait','mm','a4'); 
    var name = $('#first_name').val();
    var email = $('#email').val();
    var jour = $('#Jour').val();
    var heure = $('#Heures').val();
    var lieux = $('#lieux').val();


var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
     doc.text(29, 30, name);
    doc.text(29, 40, email);
    doc.text(29, 50, jour);
    doc.text(170, 30, heure);
    doc.text(170, 40, lieux);
  
};
    
   
      
      


    

$('#cmd').click(function () {   
  
    doc.fromHTML($('#content').html(), 29, 50, {
        'width': 100,
            'elementHandlers': specialElementHandlers
    });
  
    doc.save('sample-file.pdf');
});
});