<?php
	
	require('fpdf182/fpdf.php');

	$pdf = new FPDF();
	$pdf->AddPage();
	
	$pdf->SetY(4);
	$pdf->Image('tlogo.jpg', 10, 8, 40); 

	//logo over

	//address start
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(0,0,0);
	$pdf->SetY(19);
	$pdf->SetX(13);
	$pdf->Cell(20,10,'123 MainStreet',0,1);
	$pdf->SetY(25);
	$pdf->SetX(13);
	$pdf->Cell(20,10,'Rajkot',0,1);
	//address over

	//invoice heading
	$pdf->SetFont('Times','B',25);
	$pdf->SetY(5);
	$pdf->SetX(170);
	$pdf->SetTextColor(51,51,255);
	$pdf->Cell(30,20,'Invoice',0,1,'C');
	//invoice heading end

	//payment mode
	$pdf->SetY(25);
	$pdf->SetX(130);
	$pdf->SetDrawColor(51,51,255);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(255,255,255);
	$pdf->SetFillColor(51,51,255);
	$pdf->Cell(70,6	,'Payment Mode: Cash On Delivery',1,1,'C','true');
	//payment mode end

	//bill to
	$pdf->SetY(65);
	$pdf->SetX(15);
	$pdf->SetDrawColor(51,51,255);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(255,255,255);
	$pdf->SetFillColor(51,51,255);
	$pdf->Cell(40,6	,'Bill To',1,1,'C','true');
	$pdf->SetTextColor(0,0,0);

	$pdf->Cell(15, 15, $_POST['FirstName'],0,0);
	$pdf->Cell(10, 15, $_POST['LastName'],0,0);
	$pdf->SetX(10);
	$pdf->Cell(20, 30, $_POST['MailAddress'],0,1);
	$pdf->SetY(72);
	$pdf->Cell(20, 45, $_POST['Contactno'],0,1);
	$pdf->SetY(97.5);
	$pdf->Cell(15, 10, $_POST['City'],0,0);
	$pdf->Cell(18, 10, $_POST['State'],0,0);
	$pdf->Cell(15, 10, $_POST['Country'],0,0);
	$pdf->SetY(106);
	$pdf->Cell(20, 10, $_POST['Zip'],0,1);
	//bill to end
	
	//products start

	//description
	$pdf->SetY(140);
	$pdf->SetX(15);
	$pdf->SetDrawColor(51,51,255);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(255,255,255);
	$pdf->SetFillColor(51,51,255);
	$pdf->Cell(60,6	,'Description',0,0,'C','true');
	$pdf->SetTextColor(0,0,0);

	//quantity
	$pdf->SetY(140);
	$pdf->SetX(75);
	$pdf->SetDrawColor(51,51,255);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(255,255,255);
	$pdf->SetFillColor(51,51,255);
	$pdf->Cell(40,6	,'Quantity',0,0,'C','true');
	$pdf->SetTextColor(0,0,0);

	//unitprice
	$pdf->SetY(140);
	$pdf->SetX(115);
	$pdf->SetDrawColor(51,51,255);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(255,255,255);
	$pdf->SetFillColor(51,51,255);
	$pdf->Cell(40,6	,'UnitPrice',0,0,'C','true');
	$pdf->SetTextColor(0,0,0);

	//amount
	$pdf->SetY(140);
	$pdf->SetX(150);
	$pdf->SetDrawColor(51,51,255);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(255,255,255);
	$pdf->SetFillColor(51,51,255);
	$pdf->Cell(40,6	,'Amount',0,0,'C','true');
	$pdf->SetTextColor(0,0,0);


	//draw line
	$pdf->SetDrawColor(192,192,192);
	$pdf->Line(15,146,15,237);
	$pdf->Line(75,146,75,237);
	$pdf->Line(115,146,115,237);
	$pdf->Line(155,146,155,237);
	$pdf->Line(190,146,190,237);
	$pdf->Line(15,237,190,237);


	//printing all products details
	
	$userid = $_SESSION['UserID'];
	$con = mysqli_connect("localhost","root","","tshirtlab");
	$selectquery = "SELECT * FROM cart WHERE UserID = $userid";
	$result = mysqli_query($con, $selectquery);
	
	foreach($result As $row)
	{
		$pdf->SetY(140);
		$pdf->SetX(15);
		$pdf->Cell(15,20,$row['T_ShirtName'],0,1);

		$pdf->SetY(140);
		$pdf->SetX(75);
		$pdf->Cell(15,20,$row['Quantity'],0,1);

		$pdf->SetY(140);
		$pdf->SetX(115);
		$pdf->Cell(15,20,'200',0,1);

		$pdf->SetY(140);
		$pdf->SetX(155);
		$pdf->Cell(15,20,$row['Price'],0,1);
	}

	
	

	//total and sub total blocks
	$pdf->SetY(237);
	$pdf->SetX(120);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFillColor(125,185,232);
	$pdf->Cell(30,8,'SubTotal',0,0,'C','true');

	$pdf->SetY(245);
	$pdf->SetX(120);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFillColor(125,185,232);
	$pdf->Cell(30,8,'Shipping',0,0,'C','true');

	$pdf->SetY(253);
	$pdf->SetX(120);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFillColor(125,185,232);
	$pdf->Cell(30,8,'Total',0,0,'C','true');

	$pdf->SetY(237);
	$pdf->SetX(150);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFillColor(114,160,193);
	$pdf->Cell(30,8,'Rs.' . $_POST['subtotals'],0,0,'C','true');

	$pdf->SetY(245);
	$pdf->SetX(150);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFillColor(114,160,193);
	$pdf->Cell(30,8,'Rs.50',0,0,'C','true');

	$pdf->SetY(253);
	$pdf->SetX(150);
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFillColor(114,160,193);
	$pdf->Cell(30,8,'Rs.' . $_POST['totals'],0,0,'C','true');
	
		
	//products end

	// $pdf->SetFont('Times','B',12);
	// $pdf->SetY(35);
	// $pdf->Cell(27,5,'FirstName: ',1,0);
	// $pdf->Cell(20, 10, $_POST['FirstName'],0,1);
	$pdf->Output();
?>