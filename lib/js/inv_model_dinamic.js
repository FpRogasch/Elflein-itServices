$(document).ready(function(){
  $('#categorieSelect').on('change', function() {
    if ( this.value == 'Mobile'){
      $("#Mobile_modelS").show();
      document.getElementById("mobileModelSelect").setAttribute("name", "activeModel");
      document.getElementById("mobileModelSelect").setAttribute("required");
    }else {
      $("#Mobile_modelS").hide();
      $("#mobileModelSelect").removeAttr('required');
      $("#mobileModelSelect").removeAttr('name');
    }

    if ( this.value == 'Tablet'){
      $("#Tablet_modelS").show();
      document.getElementById("tabletModelSelect").setAttribute("name", "activeModel");
      document.getElementById("tabletModelSelect").setAttribute("required");
    }else {
      $("#Tablet_modelS").hide();
      $("#tabletModelSelect").removeAttr('required');
      $("#tabletModelSelect").removeAttr('name');
    }

    if ( this.value == 'Computer'){
      $("#Computer_modelS").show();
      document.getElementById("computerModelSelect").setAttribute("name", "activeModel");
      document.getElementById("computerModelSelect").setAttribute("required");
    }else {
      $("#Computer_modelS").hide();
      $("#computerModelSelect").removeAttr('required');
      $("#computerModelSelect").removeAttr('name');
    }

    if ( this.value == 'Notebook'){
      $("#Notebook_modelS").show();
      document.getElementById("notebookModelSelect").setAttribute("name", "activeModel");
      document.getElementById("notebookModelSelect").setAttribute("required");
    }else {
      $("#Notebook_modelS").hide();
      $("#notebookModelSelect").removeAttr('required');
      $("#notebookModelSelect").removeAttr('name');
    }
  });
});
