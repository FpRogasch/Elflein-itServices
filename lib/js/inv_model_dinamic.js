$(document).ready(function(){
  $('#categorieSelect').on('change', function() {
    if ( this.value == 'Mobile'){
      $("#Mobile_modelS").show();
    }else {
      $("#Mobile_modelS").hide();
      $("#mobileModelSelect").removeAttr('required');
    }

    if ( this.value == 'Tablet'){
      $("#Tablet_modelS").show();
    }else {
      $("#Tablet_modelS").hide();
      $("#tabletModelSelect").removeAttr('required');
    }

    if ( this.value == 'Computer'){
      $("#Computer_modelS").show();
    }else {
      $("#Computer_modelS").hide();
      $("#computerModelSelect").removeAttr('required');
    }

    if ( this.value == 'Notebook'){
      $("#Notebook_modelS").show();
    }else {
      $("#Notebook_modelS").hide();
      $("#notebookModelSelect").removeAttr('required');
    }
  });
});
