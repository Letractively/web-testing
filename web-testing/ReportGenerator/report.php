<?php
header("Content-Type: text/html; charset=utf-8");
?>
<?php
class report
{
var $user;
var $answers;
var $points;
var $kerds = 1;
/*************************************************/

function report($us, $ans) {
	$this->user = $us;
	$this->answers = $ans;
}
function irdKi($user, $R = 0, $G = 0, $B = 0) {
		require('pdfgen/fpdf.php');
		$this->pdf=new FPDF();
		$this->pdf->AddPage();
		
		 $this->pdf->SetFont('arial', '', 12);
		$this->pdf->SetTextColor($R, $G, $B);
	 	$this->pdf->write(5, "A felhaszn�l� neve: ". $user[0]."\n");
    	$this->pdf->write(5, "Felhaszn�l� felhaszn�l�neve: ".$user[1]."\n");
	     $this->pdf->write(5, "Felhaszn�l� emailc�me: ".$user[2]."\n\n\n\n");	
	
		$this->pdf->SetFont('Arial', 'B', 54);
		$this->pdf->SetTextColor(0, 0, 0);
		$this->pdf->write(50, '           Oklev�l'."\n");
	
		$this->pdf->SetFont('Arial', '', 12);
		$this->pdf->SetTextColor($R, $G, $B);
	}
function szamoldHelyes($pt, $kerdes){
	$length = count ($kerdes);
	$db = 0;
	for ($i = 0; $i< $length; ++$i)
		$db += ($kerdes[$i] === 'true') ? $pt:0;
	return $db;
}
function ujKerdes($kerdes, $pt) {
	$leng = count($kerdes);
	$pt = $this->szamoldHelyes ($pt, $kerdes);
	$this->pdf->write(5, $this->kerds . ") ".$kerdes[1]. "   (".$pt . "pont)"."\n\n");
	$i = 2;
	$betu = 'a';
	while($i < $leng) {
		if($kerdes[$i+1] === 'true')
			$this->pdf->SetFont('Arial','U', 12);
		$this->pdf->write(5, " ".$betu.") ".$kerdes[$i] ."\n");
		$i = $i + 2;
		$betu++;
		$this->pdf->SetFont('Arial','', 12);
	}
	$this->pdf->write(5, "\n\n\n");
	$this->kerds++;
	
}	
function envalaszaim($ans) {
	$this->pdf->write(10, "Felhaszn�l� v�laszai: \n");
	$num = count($ans);
	for($i = 0; $i < $num; ++$i) 
		$this->pdf->write(5, $ans[$i] . ",    ");
	$this->pdf->write(10, "\n");
} 
function pontokSzama($pontok) {
	$this->pdf->write(10, "Az el�rt pontjaidnak a sz�ma: " .$pontok);
}
function lezar() {
	$this->pdf->Output('Diploma.PDF', 'I');
}
} 
?>