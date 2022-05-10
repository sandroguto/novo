$(".erros").hide();
$("#step2").hide();

$('#foto').change(function () {
    $(".erros").hide();
    var arr = this.value.split(".");
    var ext = arr[arr.length-1];
    var siz = this.files[0].size;
      if(ext!='jpg' && ext!='jpeg' && ext!='JPG' && ext!='JPEG'){
        $("#erro_format").show();
        this.value = '';
      }
      if(siz>500000){
        $("#erro_size").show();
        this.value = '';
      }

  });

  $(document).ready(function() {
    $('#tabela_usuarios').DataTable();
  } );

  $(".step2").click(function() {
    $( "#step2" ).toggle();
  });