<?php
session_start();
if(isset($_SESSION['menssagem'])):?>
 <script>
   //por causo do onload a mensagem so carrega depois da pagina ter cido carregada
  window.onload = function(){
    M.toast({html: '<?php echo $_SESSION['menssagem'];?>'});
   
  }
  </script>
  <?php
endif;
session_unset();
?>