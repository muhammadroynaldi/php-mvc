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
<a href="<?=BASEURL?>Barang/formtambah" class="btn btn-success mb-3">Tambah Data</a>
  <table class="table table-bordered my-table bg-light">
    <thead>
      <tr>
        <td rowspan="2" width="20%">Kode Barang</td>
        <td rowspan="2">Nama</td>
        <td rowspan="2">Harga</td>
        <td rowspan="2">Stok</td>
        <td rowspan="2">Foto</td>
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
      foreach($data['barang'] as $barang):
        $no++;
      ?>
      <tr>
        <td style="text-align: center;"><?= $no; ?></td>
        <td style="text-align: center;"><?= $barang['nama']; ?></td>
        <td style="text-align: center;"><?= $barang['harga']; ?></td>
        <td style="text-align: center;"><?= $barang['stok']; ?></td>
        <td style="text-align: center;"><img src="<?=BASEURL?>assets/image/<?=$barang['gambar']?>" width='200px' height='150px'></td>
        <td class="text-center"><a href="#"><i class="fa fa-edit" style="color: blue;" onclick="ubahdata('<?= $barang['id']; ?>')" data-toggle="modal" data-target="#myModal"></i></a></td>
        <td class="text-center"><a href="" data-toggle="modal" data-target="#myModal" onclick="hapus('<?= $barang['id']; ?>')" ><i class="fa fa-trash" style="color: red;"></i></a></td>
        
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<script>
  function ubahdata(x){
    $('.modal-title').html('Ubah Data');
    $('#modal-size').attr('class', 'modal-dialog modal-lg');
    let url = '<?= BASEURL ?>Barang/ubahmodal';

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
    $('.tombol').html('<a href="<?=BASEURL?>Barang/hapus/'+ a +'" class="btn btn-secondary" style="background: #0073e6; color: #fff;">Hapus</a>');
    $('#close').html('Batal');
  }
</script>

