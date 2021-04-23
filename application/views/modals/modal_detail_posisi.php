<div class="col-md-12 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"><i class="fa fa-location-arrow"></i> 
List of Employees </h3>

  <div class="box box-body">
      <table id="tabel-detail" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>No Telp</th>
            <th>Gender</th>
            <th>Position</th>
          </tr>
        </thead>
        <tbody id="data-pegawai">
          <?php
            foreach ($dataPosisi as $pegawai) {
              ?>
              <tr>
                <td style="min-width:230px;"><?php echo $pegawai->pegawai; ?></td>
                <td><?php echo $pegawai->telp; ?></td>
                <td><?php echo $pegawai->kelamin; ?></td>
                <td><?php echo $pegawai->posisi; ?></td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
  </div>

  <div class="text-right">
    <button class="btn btn-danger" data-dismiss="modal"> Close</button>
  </div>
</div>