 <?php
 	include"header.php";
 	include "koneksi.php";
?>
<main>
		
		<!--BANNER-->
		<section class="banner">
        <div class="container">
            <div class="row justify-content-center align-items-center pad-tab" data-aos="fade-up">
                <div class="banner-text col-sm-12 col-md-6">
                    <h2 class="text-main secondary-col">Konfirmasi Pembayaran</h2>
                    <h2 style=" width: 100%; border-bottom: 4px solid #5F9EA0"></h2>
            <form name="konfirmasi" action="proses/konfirmasi.php" method="post"  enctype="multipart/form-data">
            <table class="table">
            <tbody>
            <h7 style="color: #5F9EA0">
                Pastikan ID Order Benar , Jika salah data tidak akan tersimpan </h7>
            <tr><th scope="col" colspan="3">Upload Bukti Pembayaran</th></tr>
            <tr><td>ID Order</td>
                <td><input type="text" class="form-control" name="id_order" placeholder="ID Order" required></td></tr>
             <tr><td>Jenis Pembayaran</td>
                <td><select name=jenisbayar id="jenisbayar " class="form-control">
                    <option value="DP">DP</option>
                    <option value="Lunas">Lunas</option>
                    </select></td></tr>
             <tr><td>BANK Tujuan</td>
                <td><select name=bank_tujuan id="bank_tujuan" class="form-control">
                    <option value="BNI">BNI</option>
                    <option value="BNI">BRI</option>
                    <option value="BNI">BCA</option>
                    </select></td></tr>
            <tr><td>BANK Anda</td>
                <td><select name=bank_anda id="bank_anda" class="form-control">
                    <option value="BNI">BNI</option>
                    <option value="BNI">BRI</option>
                    <option value="BNI">BCA</option>
                    </select></td></tr>
            <tr><td>Nama Pemilik Rekening</td>
                <td><input type="text" placeholder="Nama Pemilik Rekening" class="form-control" name="nama_rek" required>
            <tr><td>Bukti Transfer</td>
                <td><input type="file" name="bukti_tf"  required><br>
                    <h7 style="color: #5F9EA0"><b>.png | .jpg | .jpeg </b></h7></td></tr>
            <tr><td>Nominal</td>
                <td><input type="text"  placeholder="Nominal Transfer (Contoh:100000)" class="form-control" name="nominal" required>
            <tr><td>Tanggal Transfer</td>
                <td><input type="date" class="form-control" name="tgl_tf"  required>
                </td></tr>
            <tr><td>Tanggal dan Waktu Konfirmasi</td>
                <td><input type="datetime-local" class="form-control" name="datetime_konfir"  required></td></tr>
            <tr><td>
                <button type="submit" name="simpan" class="btn btn-success">Submit</button>
                </td></tr>
        </tbody></table>
        </div></div></div>

        </section>
 <?php  	include "footer.php"; ?>