// Code goes here

$(document).ready(function(){
    
$('.next').click(function(){
  var nextId = $(this).parents('.tab-pane').next().attr("id");
  $('[href="#'+nextId+'"]').tab('show');
  $('.formwizardpopup .modal-content').removeClass('banner');      
  return false;
  
})
$('.back').click(function(){
    var prevId = $(this).parents('.tab-pane').prev().attr("id");
    if(prevId == "step1"){  
        $('.formwizardpopup .modal-content').addClass('banner');
    }
    
    $('[href="#'+prevId+'"]').tab('show'); 
    
  return false;
})
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  //update progress
  var step = $(e.target).data('step');
  var percent = ((parseInt(step) / 6) * 100).toFixed(2);
  
  $('.progress-bar').css({width: percent + '%'});
  $('.progress-bar-info').text("" + percent + "% complete");
  
  //e.relatedTarget // previous tab
  
})
$('.first').click(function(){
  $('#myWizard a:first').tab('show')
})    
}); 
        
