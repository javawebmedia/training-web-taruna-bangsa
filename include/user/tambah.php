<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Baru
</button>

<form action="user.php" method="post" accept-charset="utf-8">

  <input type="hidden" name="id_user" value="0">
  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="form-floating mb-3">
          <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
          <label for="nama">Nama Lengkap</label>
        </div>

        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control" id="email" placeholder="Nama">
          <label for="email">Email Pengguna</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" name="username" class="form-control" id="username" placeholder="Username">
          <label for="username">Username</label>
        </div>

        <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>

        <div class="form-floating mb-3">
          <select name="akses_level" id="akses_level" class="form-control">
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
          <label for="akses_level">Level Hak Akses</label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" value="tambah" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</form>
<!-- end form -->
