<?php include("./partials/menu.php"); ?>

<div class="main">
  <div class="wrapper">
    <h1>Manage food</h1><br/><br/>

    <!-- button to add admin -->
    <a href="#" class="btn-primary">Add Food</a><br/><br/><br/>

    <table class="tbl-full">
      <thead>
        <tr>
          <th>S.N.</th>
          <th>Full Name</th>
          <th>Username</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>John Doe</td>
          <td>johndoe23</td>
          <td>
            <a href="#" class="btn-secondary">Update Admin</a>
            <a href="#" class="btn-danger">Delete Admin</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php include("./partials/footer.php") ?>