<!DOCTYPE html>

<html lang="en" >
<head><meta charset="UTF-8">
<title>KP Kelompok 22-Teknik Informatika 2021 (INVOICE ORDER)</title>
<link rel="stylesheet" href="css.css">
</head>
<body>
<div id="page-wrap">
<textarea id="header">INVOICE ORDER</textarea>
  <div id="identity">

   <h1>CV.Permata Rimba</h1>
   <br><br>
   <div style="clear:both">
     IMAGE PRODUK
   </div>
   <div id="customer">
    <table id="meta">
     <tr><td class="meta-head">Invoice Order</td>
         <td><textarea>1A2CBS</textarea></td>
     </tr>
     
     <tr><td class="meta-head">Date Order</td>
         <td><textarea id="date">October 05, 2018</textarea></td>
     </tr>
     
     <tr><td class="meta-head">Total Pembayaran</td>
        <td><div class="due">$1500000</div></td>
     </tr>

    </table>
    </div>

   <table id="items">
    <tr>
     <th>Produk</th>
     <th>Deskripsi</th>
     <th>Harga Produk</th>
     <th>Quantity</th>
     <th>Total Pembayaran</th>
    </tr>

    <tr class="item-row">
     <td class="item-name">
      <textarea>Building Maintenance Management</textarea><a class="delete" href="javascript:;" title="Remove row"></a></td>

     <td class="description"><textarea>Very useful building repair application hehehe tetet...</textarea></td>
     <td><textarea class="cost">$1000.00</textarea></td>
     <td><textarea class="qty">1</textarea></td>
     <td><span class="price">$1000.00</span></td>
    </tr>

    
    <tr id="hiderow">
     <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
    </tr>

    <tr>
     <td colspan="2" class="blank"> </td>
     <td colspan="2" class="total-line">Sub Total</td>
     <td class="total-value"><div id="subtotal">$1700.00</div></td>
    </tr>
    
    <tr>
     <td colspan="2" class="blank"> </td>
     <td colspan="2" class="total-line">Total Pembayaran</td>
     <td class="total-value"><div id="total">$1700.00</div></td>
    </tr>
    
    <tr>
     <td colspan="2" class="blank"> </td>
     <td colspan="2" class="total-line">Jenis Pembayaran</td>
     <td class="total-value"><textarea id="paid">$100.00</textarea></td>
    </tr>

    <tr>
     <td colspan="2" class="blank"> </td>
     <td colspan="2" class="total-line">Jumlah yang dibayarkan</td>
     <td class="total-value"><textarea id="paid">$100.00</textarea></td>
    </tr>

    <tr>
     <td colspan="2" class="blank"> </td>
     <td colspan="2" class="total-line balance">Sisa Pembayaran</td>
     <td class="total-value balance"><div class="due">$1600.00</div></td>
    </tr>
   </table>
   <br><br><br><br>
   <div id="terms">
    <h5>Kelompok KP 22 - CV.Permata Rimba</h5>
    <textarea  >Informasi Terkait Orderan akan dikabarkan lewat Email</textarea>
   </div>
  </div>
 </body>
 </html>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script  src="js/index.js"></script>
</body></html>