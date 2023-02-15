<!------ Função para garantir que o arquivo ou conexão desejada será importada apenas uma vez em nossa aplicação---------->
<?php 

require_once("conexao.php");

//CARREGAR DOMPDF
require_once '..autoload.inc.php';
use Dompdf\Dompdf;


//ALIMENTAR OS DADOS NO RELATÓRIO
$html = utf8_encode(file_get_contents("http://localhost/crudpdo/produtos.php"));



//INICIALIZAR A CLASSE DO DOMPDF
$pdf = new DOMPDF();

//Definir o tamanho do papel e orientação da página
$pdf->set_paper('A4', 'portrait');

//CARREGAR O CONTEÚDO HTML
$pdf->load_html(utf8_decode($html));

//RENDERIZAR O PDF
$pdf->render();

//NOMEAR O PDF GERADO
$pdf->stream(
'produtos.pdf',
array("Attachment" => false)
);

?>