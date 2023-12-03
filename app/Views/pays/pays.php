<?php
   include('../app/Views/header.php');

?>

<div class="row">
   <div class="container">
      <a href="">Pays</a>
      <a href="">Aeroports</a>
      <h1>Pays</h1>
      <table class="table table-bordered table-striped">
         <thead>
             <tr>
                 <td>Nom Pays</td>
                 <td>ACTIONS</td>
             </tr>
         </thead>
         <tbody>
            <?php
               foreach($pays as $pay){
                  echo '<tr>';
                  echo '<td>',$pay['nompays'],'</td>';
                  echo '<td>';
                  $url = '.?controller=Pays&action=edit';
                  $label = '<i class="fas fa-pen"></i>';
                  $type = 'info';
                  include('../app/Views/compnents/bouton.php');

                  $url = '.?controller=Pay&action=edit';
                  $label = '<i class="fas fa-trash"></i>';
                  $type = 'danger';
                  include('../app/Views/compnents/bouton.php');
                  echo '</td>';
                  echo '</tr>';
               }
            ?>
         </tbody>
      </table>
   </div>
</div>
<?php
   include('../app/Views/footer.php');
?>

