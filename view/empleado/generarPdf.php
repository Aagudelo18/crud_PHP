<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<?php
    require_once("c://xampp/htdocs/laparisinamvc/controller/empleadosController.php");
    $obj = new empleadosController();
    $rows = $obj->index();

    require_once ('../../fpdf/fpdf.php');
    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        //$this->image('../img/logo.png', 150, 1, 60); // X, Y, Tamaño
        $this->Ln(20);
        // Arial bold 15
        $this->SetFont('Arial','B',20);
    
        // Movernos a la derecha
        $this->Cell(60);

        // Título
        $this->Cell(70,10,'Tabla Empleados ',0,0,'C');
        // Salto de línea
    
        $this->Ln(15);
        $this->SetFont('Arial','B',10);
        $this->SetX(25);
        $this->Cell(10,10,'Id',1,0,'C',0);
        $this->Cell(50,10,'Tipo Documento',1,0,'C',0);
        $this->Cell(45,10,'Nombre',1,0,'C',0,);
        $this->Cell(30,10,'Cedula',1,0,'C',0);
        $this->Cell(30,10,'Cargo',1,0,'C',0);
        $this->Ln(10);
        
        

    
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
    
        $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
    //$this->SetFillColor(223, 229,235);
        //$this->SetDrawColor(181, 14,246);
        //$this->Ln(0.5);
    }
    }

   

    $conexion=mysqli_connect("localhost","root","","laparisina");
    $id=$_GET["id"];
    $consulta = "SELECT e.idEmpleados, e.Nombre, e.Cedula, e.Cargo, t.Nombre AS nombredocumento FROM empleados AS e INNER JOIN  tipodocumento AS t
    ON e.idTipodocumento=t.idTipodocumento
    WHERE e.idEmpleados=$id";
    $resultado = mysqli_query($conexion, $consulta);

    $pdf = new PDF();

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);
    //$pdf->SetWidths(array(10, 30, 27, 27, 20, 20, 20, 20, 22));
    while ($row=$resultado->fetch_assoc()) {

        $pdf->SetX(25);

        $pdf->Cell(10,10,$row['idEmpleados'],1,0,'C',0);
        $pdf->Cell(50,10,$row['nombredocumento'],1,0,'C',0);
        $pdf->Cell(45,10,$row['Nombre'],1,0,'C',0);
        $pdf->Cell(30,10,$row['Cedula'],1,0,'C',0);
        $pdf->Cell(30,10,$row['Cargo'],1,0,'C',0);
        $pdf->Ln();
        


    } 


        $pdf->Output();
    ?>
<?php } else{ header('location:../login.php'); } ?>