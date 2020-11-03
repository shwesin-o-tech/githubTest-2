<?php 
require '../../config/config.php';

//call autoload
require '../../vendor/autoload.php';

//load phpspreadsheet class using namespaces
use PhpOffice\PhpSpreadsheet\Spreadsheet;
//call iofactory instead of xlsx writer
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border; 
//styling arrays
//table head style
$tableHead=[
	'font'=>[
		'color'=>[
			'rgb'=> 'FFFFFF'
		],
		'bold'=>true,
		'size'=>11
	],
	'fill'=>[
		'fillType' => Fill::FILL_SOLID,
		'startColor'=>[
			'rgb'=>'0d9a9a'
		],

	],
	'borders' => [
        'allBorders' => [
	        'borderStyle' => Border::BORDER_THIN,
	        'color' => ['argb' => '000000'],
                       ],
                ],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical' => Alignment::VERTICAL_CENTER,
    ]

];

//event row
$evenRow=[
	'fill'=>[
		'fillType'=>Fill::FILL_SOLID,
		'startColor'=>[
			'rgb'=>'faffff'
		],
	],
	 'borders' => [
                    'allBorders' => [
                        	'borderStyle' => Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
      ],

      'alignment' => [
        'horizontal' =>Alignment::HORIZONTAL_CENTER,
        'vertical' =>Alignment::VERTICAL_CENTER,
    ]

    
];
//odd row
$oddRow=[
	'fill'=>[
		'fillType'=>Fill::FILL_SOLID,
		'startColor'=>[
			'rgb'=>'ffffff'
		],
	],
	 'borders' => [
                    'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
     ],
    'alignment' => [
        'horizontal' =>Alignment::HORIZONTAL_CENTER,
        'vertical' =>Alignment::VERTICAL_CENTER,
    ]
];


//styling arrays end

//make a new spredsheet object
$spreadsheet = new Spreadsheet();

//get current active sheet(first sheet)
$sheet=$spreadsheet->getActiveSheet();
//$sheet->getDefaultRowDimension()->setRowHeight(30);
//set default font
$spreadsheet->getDefaultStyle()
			->getFont()
			->setName('Arial')
			->setSize(10);

$spreadsheet->getActiveSheet()->getDefaultRowDimension()->setRowHeight(30);
//heading
$spreadsheet->getActiveSheet()
			->setCellValue('B2',"Client List");

//merge heading
$spreadsheet->getActiveSheet()->mergeCells("B2:F2");		

//set font style
$spreadsheet->getActiveSheet()->getStyle('B2')->getFont()->setSize(20);

//set cell alignment
$spreadsheet->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('B2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

//setting column width
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(30);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(50);
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(40);
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(10);


//header text
$spreadsheet->getActiveSheet()
			->setCellValue('B4',"Company Name")
			->setCellValue('C4',"Postal Code")
			->setCellValue('D4',"Address")
			->setCellValue('E4',"Bldg Name")
			->setCellValue('F4',"Enable");
			

// set font style and background color
$spreadsheet->getActiveSheet()->getStyle('B4:F4')->applyFromArray($tableHead);

//row height

//$spreadsheet->getActiveSheet()->getDefaultRowDimension('B4:F4')->setRowHeight(30);


//change worksheet name
$spreadsheet->getActiveSheet()
			->setTitle('client list');

//table content
$sql_enable="SELECT * FROM tbl_clients WHERE enable='1' ORDER BY client_id DESC ";
$result_enable=mysqli_query($con,$sql_enable);

$i =5;
foreach ($result_enable as $row) {

		$spreadsheet->getActiveSheet()->setCellValue('B'.$i, $row['company_name']);
		$spreadsheet->getActiveSheet()->setCellValue('C'.$i, $row['postal_code']);
		$spreadsheet->getActiveSheet()->setCellValue('D'.$i, $row['address']);
		$spreadsheet->getActiveSheet()->setCellValue('E'.$i, $row['bldg_name']);
		$spreadsheet->getActiveSheet()->setCellValue('F'.$i, $row['enable']);

		$spreadsheet->getActiveSheet()-> getRowDimension($i) -> setRowHeight (30); // set the row height
		$spreadsheet->getActiveSheet()->getStyle('B'.$i.':F'.$i)->applyFromArray($evenRow);

		$i++;
	}


// while($row=mysqli_fetch_assoc($result_enable)){

// 		//$sheet->getActiveSheet()->getDefaultRowDimension($i)->setRowHeight(30);// set the row height
// 		$sheet->getDefaultRowDimension($i)->setRowHeight(30);
// 		$spreadsheet->getActiveSheet()->setCellValue('B'.$i, $row['company_name']);
// 		$spreadsheet->getActiveSheet()->setCellValue('C'.$i, $row['postal_code']);
// 		$spreadsheet->getActiveSheet()->setCellValue('D'.$i, $row['address']);
// 		$spreadsheet->getActiveSheet()->setCellValue('E'.$i, $row['bldg_name']);
// 		$spreadsheet->getActiveSheet()->setCellValue('F'.$i, $row['enable']);
		

// 		$spreadsheet->getActiveSheet()->getStyle('B'.$i.':F'.$i)->applyFromArray($evenRow);


// 	//set row style
// 	// if($i % 5==0){
// 	// 	//even row
// 	// 	$spreadsheet->getActiveSheet()->getStyle('B'.$i.':C'.$i)->applyFromArray($evenRow);
// 	// }else{
// 	// 	//odd row
// 	// 	$spreadsheet->getActiveSheet()->getStyle('B'.$i.':C'.$i)->applyFromArray($oddRow);
// 	// }

// 	$i++;

// }

$year=date("y");
$y = substr( $year, -2);
$m = date("m");
$d = date("d");
// set the header first, so the result will be treated as an xlsx file.
header('Content-type: application/vnd.ms-excel');
header('Content-type: application/csv');
// make it an attachment so we can define filename
header('Content-Disposition: attachment; filename="client_list_'.$y."-".$m."-".$d.'.xls');
header("Pragma: no-cache");
header("Expires: 0");

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');