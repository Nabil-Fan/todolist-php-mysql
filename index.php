<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>To do list</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<main>
  <nav class="navbar">
    <span class="navbar-brand">To Do List</span>
  </nav>

  <div class="container">
    <div class="form-card">
      <h3 class="card-title">Add Task</h3>
      <form action="insert.php" method="POST">
        <label for="deskripsi" class="form-label">Description</label>
        <input type="text" id="deskripsi" name="deskripsi" class="input-text" placeholder="Type a task">
        <button type="submit" class="btn-submit">Add Task</button>
      </form>
    </div>

    <div class="table-card">
      <h3 class="card-title">Task List</h3>
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Task</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'config/database.php';
          $query = "SELECT * FROM todolist";
          $result = mysqli_query($koneksi, $query);
          $no = 1;
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $no++ . "</td>";
              echo "<td>" . $row['deskripsi'] . "</td>";
              echo "<td><a href='delete.php?id=" . $row['id'] . "' class='btn-delete'>Delete</a></td>";
              echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<script src="script.js"></script>
</body>
</html>
