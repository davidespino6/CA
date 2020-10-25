<?php include 'include/header.php'; ?>

   <h1 class="capitals">Capitals of some countries</h1>

   <table class="content-table">
      
      <thead>
      <tr>
         <th id="country">Country</th>
         <th id="capital">Capital</th>
      </tr>
      </thead>

      <tbody>
      <?php require_once 'requires/db.php' ?>
      </tbody>
   </table>

<?php include 'include/footer.php'; ?>