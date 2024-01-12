
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>To-Do List</title>
</head>

<body>
  <div class="flex">
    <div class="container">
      <div class="con" id="maincon">
        <header>To-Do List</header>
        <form action ="add.php" method ="post">
          <div class="formcon">
            <label for="title">Note Title</label>
            <input type="text" id="title" name="title" placeholder="Enter Note Title">
          </div>
          <div class="formcon">
            <label for="description">Note Description</label>
            <textarea id="description" name="description" placeholder="Enter Note Description"></textarea>
          </div>
          <div class="formcon">
            <button type="submit">Add note</button>
          </div>
        </form>
      </div>
    </div>
    <div class="data">
      <table class="table" id="mytable">
        <thead>
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <script>
function confirmDelete(noteId) {
    var result = confirm("Are you sure you want to delete this note?");
    if (result) {
        window.location.href = "del.php?id=" + noteId;
    }
}
</script>
        <tbody>
        <?php
    require_once "connect.php";
    $sql="SELECT * FROM `notes` ";

    $result =mysqli_query($conn,$sql);
    $sn =0;
    while($row = mysqli_fetch_assoc($result)){
      $sn ++;
      echo " <tr>
      <th scope='row'>$sn</th>
      <td>". $row["title"]."</td>
      <td>" .$row["description"]."</td>
      <td><a href='#' onclick='confirmDelete(" . $row["SN"] . ")'>Delete</a>  <a href='#' onclick='openEditDialog(" . $row["SN"] . ", \"" . $row["title"] . "\", \"" . $row["description"] . "\")'>Edit</a>
      </td>
    </tr>";
               
    }
    ?>
        </tbody>
      </table>
      <div id="editDialog" class="dialog">
    <form id="editForm" action="update.php" method="post">
        <input type="hidden" id="editId" name="id">
        <label for="editTitle">Note Title</label>
        <input type="text" id="editTitle" name="title">

        <label for="editDescription">Note Description</label>
        <textarea id="editDescription" name="description"></textarea>

        <button type="submit">Update note</button>
        <button onclick=" closeEditDialog()">cancel</button>
    </form>
</div>
<script>
    function openEditDialog(id, title, description) {
        document.getElementById('editId').value = id;
        document.getElementById('editTitle').value = title;
        document.getElementById('editDescription').value = description;
        document.getElementById('editDialog').style.display = 'block';
    }
    function closeEditDialog() {
        document.getElementById('editDialog').style.display = 'none';
    }
</script>
    </div>
  </div>
</body>
</html>