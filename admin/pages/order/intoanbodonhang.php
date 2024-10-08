<?php
require('tfpdf/tfpdf.php');

$pdf = new tFPDF();
$pdf->AddPage("0");
// $pdf->SetFont('Arial','B',16);
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',14);

$pdf->SetFillColor(193,229,252);

// $code=$_GET['code'];
$sql_lietke_donhang = "SELECT * FROM tbl_cart_details,tbl_product WHERE tbl_cart_details.id_product=tbl_product.id_product AND tbl_cart_details.code_cart ORDER BY tbl_cart_details.id_cart_details DESC";
$query_lietke_dh = mysqli_query($conn, $sql_lietke_donhang);

$pdf->Write(10,'Đơn hàng của bạn gồm có:');
	$pdf->Ln(10);
	$width_cell=array(20,130,20,20,30,40);
	$pdf->Cell($width_cell[0],10,'Mã hàng',1,0,'C',true);
	$pdf->Cell($width_cell[1],10,'Tên sản phẩm',1,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Số lượng',1,0,'C',true); 
	$pdf->Cell($width_cell[3],10,'Size',1,0,'C',true);
	$pdf->Cell($width_cell[4],10,'Giá',1,0,'C',true);
	$pdf->Cell($width_cell[5],10,'Tổng tiền',1,1,'C',true); 
	$pdf->SetFillColor(235,236,236); 
	$fill=false;
	$i = 0;
    $tongtien=0;
	while($row = mysqli_fetch_array($query_lietke_dh)){
		$i++;
        $thanhtien=$row['soluongmua']*$row['price'];
        $tongtien+=$thanhtien;
		$pdf->Cell($width_cell[0],10,$row['code_cart'],1,0,'C',$fill);
		$pdf->Cell($width_cell[1],10,$row['product_name'],1,0,'C',$fill);
		$pdf->Cell($width_cell[2],10,$row['soluongmua'],1,0,'C',$fill);
		$pdf->Cell($width_cell[3],10,$row['size'],1,0,'C',$fill);
	$pdf->Cell($width_cell[4],10,number_format($row['price']),1,0,'C',$fill);
	$pdf->Cell($width_cell[5],10,number_format($row['soluongmua']*$row['price']),1,1,'C',$fill);
	$fill = !$fill;

}
    $pdf->Write(10,'Tổng doanh thu:');
	$pdf->Write(10,number_format($tongtien));
	$pdf->Write(10,' VNĐ');

	$pdf->Ln(10);
$pdf->Output();
?>