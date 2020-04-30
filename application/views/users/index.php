<main role="main" class="flex-shrink-0">
  <div class="container">
      <h1>List of User</h1>
      <table class="table table-striped table-hover">
          <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach ($users as $user): ?>
                  <tr>
                  <th scope="row"><?php echo $user["id"]; ?></th>
                  <td><?php echo $user["first_name"]; ?></td>
                  <td><?php echo $user["last_name"]; ?></td>
                  <td>
                      <a href="#"><button class="btn btn-primary btn-sm">View</button></a>
                      <a href="<?php echo site_url("users/update/$user[id]"); ?>"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                      <a onclick="return confirm('Are you sure to delete this user?')" href="<?php echo site_url("users/delete/$user[id]"); ?>"><button class="btn btn-sm">Delete</button></a>
                  </td>
                  </tr>
              <?php endforeach; ?>
             <!--
              <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>
                  <a href="#"><button class="btn btn-primary btn-sm">View</button></a>
                  <a href="#"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                  <button class="btn btn-sm">Delete</button>
              </td>
              </tr>
              <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>
                  <a href="#"><button class="btn btn-primary btn-sm">View</button></a>
                  <a href="#"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                  <button class="btn btn-sm">Delete</button>
              </td>
              </tr>
              <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>
                  <a href="#"><button class="btn btn-primary btn-sm">View</button></a>
                  <a href="#"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                  <button class="btn btn-sm">Delete</button>
              </td>
              </tr>
            -->
          </tbody>
      </table>
  </div>
</main>