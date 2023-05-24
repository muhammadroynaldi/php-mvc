<style type="text/css">
  .my-table thead td{

    background-color: DeepSkyBlue;
    vertical-align: middle;
    text-align: center;
  }
  tr{
    background-color: Azure;
  }
</style>
<div class="container-fluid">
<a href="<?=BASEURL?>User/formtambah" class="btn btn-success mb-3">Tambah User</a>
  <table class="table table-bordered my-table bg-light">
    <thead>
      <tr>
        <td rowspan="2" width="20%">Kode User</td>
        <td rowspan="2">Nama</td>
        <td rowspan="2">Username</td>
        <td rowspan="2">Password</td>
        <td colspan="2" width="10%">Opsi</td>
      </tr>
      <tr>
        <td>Edit</td>
        <td>Hapus</td>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 0;
      foreach($data['user'] as $user):
        $no++;
      ?>
      <tr>
        <td style="text-align: center;"><?= $no; ?></td>
        <td style="text-align: center;"><?= $user['nama']; ?></td>
        <td style="text-align: center;"><?= $user['username']; ?></td>
        <td style="text-align: center;"><?= $user['password']; ?></td>
        <td class="text-center"><a href="#"><i class="fa fa-edit" style="color: blue;" onclick="ubahdata('<?= $user['id']; ?>')" data-toggle="modal" data-target="#myModal"></i></a></td>
        <td class="text-center"><a href="" data-toggle="modal" data-target="#myModal" onclick="hapus('<?= $user['id']; ?>')" ><i class="fa fa-trash" style="color: red;"></i></a></td>
        
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<script>
  function ubahdata(x){
    $('.modal-title').html('Ubah Data');
    $('#modal-size').attr('class', 'modal-dialog modal-lg');
    let url = '<?= BASEURL ?>User/ubahmodal';

    $.post(url,
    {
        id : x
    }, function(data, success){
      $('.modal-body').html(data);
    });
  }

  function hapus(a){
    $('.modal-title').html('Hapus Data');
    $('.modal-body').html('Apakah Data Akan Dihapus..!! ');
    $('#modal-size').attr('class', 'modal-dialog modal-sm');
    $('.tombol').html('<a href="<?=BASEURL?>User/hapus/'+ a +'" class="btn btn-secondary" style="background: #0073e6; color: #fff;">Hapus</a>');
    $('#close').html('Batal');
  }
</script>

