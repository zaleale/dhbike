<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Laporan Data Penjualan</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
</table>

<table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>LAPORAN PENJUALAN BARANG</h4></center><br/></td>
</tr>
                       
</table>
 
<table border="0" align="center" style="width:900px;border:none;">
        <tr>
            <th style="text-align:left"></th>
        </tr>
</table>

<table border="1" align="center" style="width:900px;margin-bottom:20px;">
<thead>
    <tr>
        <th style="width:50px;">No</th>
        <th style="text-align: left">No Faktur</th>
        <th style="text-align: left;">Tanggal</th>
        <th style="text-align: left">Kode Barang</th>
        <th style="text-align: left">Nama Barang</th>
        <th style="text-align: left;">Satuan</th>
        <th style="text-align: left;">Harga Jual</th>
        <th>Qty</th>
        <th style="text-align: center">Diskon</th>
        <th style="text-align: center">Total</th>
    </tr>
</thead>
<tbody>
<?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
        $nofak=$i['jual_nofak'];
        $tgl=$i['jual_tanggal'];
        $barang_id=$i['d_jual_barang_id'];
        $barang_nama=$i['d_jual_barang_nama'];
        $barang_satuan=$i['d_jual_barang_satuan'];
        $barang_harjul=$i['d_jual_barang_harjul'];
        $barang_qty=$i['d_jual_qty'];
        $barang_diskon=$i['d_jual_diskon'];
        $barang_total=$i['d_jual_total'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:left;"><?php echo $nofak;?></td>
        <td style="text-align:left;"><?php echo $tgl;?></td>
        <td style="text-align:left;"><?php echo $barang_id;?></td>
        <td style="text-align:left;"><?php echo $barang_nama;?></td>
        <td style="text-align:left;"><?php echo $barang_satuan;?></td>
        <td style="text-align:left;"><?php echo 'Rp '.number_format($barang_harjul);?></td>
        <td style="text-align:center;"><?php echo $barang_qty;?></td>
        <td style="text-align:center;"><?php echo 'Rp '.number_format($barang_diskon);?></td>
        <td style="text-align:right;"><?php echo 'Rp '.number_format($barang_total);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>
<?php 
    $b=$jml->row_array();
?>
    <tr>
        <td colspan="9" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:right;"><b><?php echo 'Rp '.number_format($b['total']);?></b></td>
    </tr>
</tfoot>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right">Bandung, <?php echo date('d-M-Y')?></td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>
   
    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>    
    <tr>
        <td align="right">( <?php echo $this->session->userdata('nama');?> )</td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
</div>
</body>
</html>_