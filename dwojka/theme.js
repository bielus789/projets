$(document).ready(function(){
      $.ajax({url: "http://test.projets.pl/rekrutacja/php/data.json", success: function(result){
        var data = JSON.parse(result);
    }});
})