<h1 class="h1 mb-2 text-gray font-weight-bolder">UBAH DATA</h1>

<div class="row">
    <div class="col-md-5">
        <form method="POST" action="<?= BASE_URL ?>/team/prosesubah" class="mb-3">
            <input type="hidden" name="id-team" value="<?= $data['team']['id_team'] ?>">
            <div class="form-group">
                <label for="nama-team">Nama Team</label>
                <input type="text" class="form-control" id="nama-team" name="nama-team" value="<?= $data['team']['team_name'] ?>">
            </div>
            <div class="form-group">
                <label for="deskripsi-team">Deskripsi</label>
                <textarea class="form-control" id="deskripsi-team" rows="3" name="deskripsi-team" value=""><?= $data['team']['description'] ?></textarea>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <label for="negara">Negara</label>
                    <input type="text" class="form-control" id="negara" name="negara" value="<?= $data['team']['negara'] ?>">
                </div>
                <div class="col">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="manager">Manager</label>
                <input type="text" class="form-control" id="manager" name="manager" value="<?= $data['team']['manajer'] ?>">
            </div>
            <div class="form-group">
                <label for="pelatih">Pelatih</label>
                <input type="text" class="form-control" id="pelatih" name="pelatih" value="<?= $data['team']['pelatih'] ?>">
            </div>
            <div class="form-group">
                <label for="Kapten">Kapten</label>
                <input type="text" class="form-control" id="kapten" name="kapten" value="<?= $data['team']['kapten'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>
</div>