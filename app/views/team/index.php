<!-- Page Heading -->
<h1 class="h1 mb-2 text-gray font-weight-bolder">TEAM DATA</h1>

<?= Flasher::flash() ?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Tambah data </button>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>Nama Team</th>
                        <th>Description</th>
                        <th>Negara</th>
                        <th>Status</th>
                        <th>Manager</th>
                        <th>Pelatih</th>
                        <th>Kapten</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['team'] as $team) : ?>
                        <tr>
                            <td class="text-center">
                                <a href="<?= BASE_URL ?>/team/ubah/<?= $team['id_team'] ?>" class="btn btn-success mb-1">Edit</a>
                                <a href="<?= BASE_URL ?>/team/hapus/<?= $team['id_team'] ?>" class="btn btn-danger mb-1">Hapus</a>
                            </td>
                            <td><?= $team['team_name'] ?></td>
                            <td><?= $team['description'] ?></td>
                            <td><?= $team['negara'] ?></td>
                            <td><?= $team['status'] ?></td>
                            <td><?= $team['manajer'] ?></td>
                            <td><?= $team['pelatih'] ?></td>
                            <td><?= $team['kapten'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah data team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL ?>/team/tambah" method="POST">
                    <div class="form-group">
                        <label for="nama-team">Nama Team</label>
                        <input type="text" class="form-control" id="nama-team" name="nama-team">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi-team">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi-team" rows="3" name="deskripsi-team"></textarea>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="negara">Negara</label>
                            <input type="text" class="form-control" id="negara" name="negara">
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
                        <input type="text" class="form-control" id="manager" name="manager">
                    </div>
                    <div class="form-group">
                        <label for="pelatih">Pelatih</label>
                        <input type="text" class="form-control" id="pelatih" name="pelatih">
                    </div>
                    <div class="form-group">
                        <label for="kapten">Kapten</label>
                        <input type="text" class="form-control" id="kapten" name="kapten">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>