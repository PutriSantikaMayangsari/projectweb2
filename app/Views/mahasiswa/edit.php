<div class="p-4">
    <form action="/update/<?= $id ?>" method="post">
        <div class="form-group" p-4>
            <label for="npm">NPM</label>
            <input type="text" name="npm" class="form-control" id="npm" value="<?= $npm ?>" placeholder="Enter npm">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama ?>" placeholder="Enter nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $alamat ?>" placeholder="Enter alamat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
