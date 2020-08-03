<? 
  require_once "../../../config/koneksi.php";
  $query = "SELECT * FROM tb_posts";
  $sql = mysqli_query($koneksi, $query);
  $no = 1;
  
  $dataSum = mysqli_num_rows($sql);
?>

<? while ( $data = mysqli_fetch_assoc($sql) ) : ?>

  <tr>
    <th scope="row"><? echo $no++; ?></th>
    <td><? echo $data['judul']; ?></td>
    <td>
      <? 
        if ($data['published'] == "yes" ) {
          echo '
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
            </svg>';
        } else {
          echo '
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
              <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
            </svg>';
        }
      ?>
    </td>
    <td><? echo $data['created_at']; ?></td>
    <td><? echo $data['updated_at']; ?></td>
    <td>
      <a href="edit-post.php?id=<? echo $data['id']; ?>" class="btn btn-info btn-sm" role="button">Edit</a>
      <a href="proses-delete-post.php?id=<? echo $data['id']; ?>" class="btn btn-danger btn-sm" role="button" onclick='return confirm("Yakin Hapus?")'>Delete</a>
    </td>
  </tr>

<? endwhile; ?>