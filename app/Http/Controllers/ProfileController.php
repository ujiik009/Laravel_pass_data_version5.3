<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
	function getProfile($id){
		$data = $this->get_data_profile();
		//return view("profiles",['data'=> $data]);
		return view('homework2',['profiles'=>$data]);
	}


	function get_data_profile(){
		$profile = [
			'name'  => 'Mr.Apirat Pramchana',
			'age'   => '23',
			'skills'=> [
				'programming' => [
					'php (laravel,Ci)',
					'js (jquery,vue,react)',
					'css (bootstrap,bulma)',
					'Unity3D (c#)'
				],
				'sport' =>[
					'badminton'
				]
			],
			'degree' => 'Bachelor Degree Faculty of Science BSRU',
			'contact'=> '<a href="https://www.facebook.com/">facebook</a>'
		];

		return $profile;
	}
	function data_array(){
		$data = array(
			  array('number_student' => '1','student_code' => '5521310369','student_name' => 'นายนนทรี ปานแสง ','student_sec' => 'D15'),
			  array('number_student' => '1','student_code' => '5921148002','student_name' => 'นางสาวสุวิมล เชิงไกรยัง ','student_sec' => 'D7'),
			  array('number_student' => '1','student_code' => '5921154002','student_name' => 'นางสาวอนันติญา เรืองกระโทก ','student_sec' => 'D1'),
			  array('number_student' => '1','student_code' => '5921154026','student_name' => 'นางสาวธนัชพร พัฒนศิลป์ ','student_sec' => 'D11'),
			  array('number_student' => '1','student_code' => '5921154051','student_name' => 'นางสาวรุ้งฤดี จงใจงาม ','student_sec' => 'D12'),
			  array('number_student' => '1','student_code' => '5921156001','student_name' => 'นางสาวณัฐนันท์ มูลทรัพย์ ','student_sec' => 'D2'),
			  array('number_student' => '1','student_code' => '5921156022','student_name' => 'นางสาวพนิตา ลาวงศ์ ','student_sec' => 'D3'),
			  array('number_student' => '1','student_code' => '5921161001','student_name' => 'นางสาววารินทร์ มีวรรณ์ ','student_sec' => 'D4'),
			  array('number_student' => '1','student_code' => '5921161023','student_name' => 'นายวัชรพล วานิด ','student_sec' => 'D5'),
			  array('number_student' => '1','student_code' => '5921161044','student_name' => 'นางสาววชิราภรณ์ เนตรวิจิตร ','student_sec' => 'D6'),
			  array('number_student' => '1','student_code' => '5921203023','student_name' => 'นางสาววันทนาพร ทองไทย ','student_sec' => 'D13'),
			  array('number_student' => '1','student_code' => '5921203046','student_name' => 'นางสาวณัฐริณีย์ ประเสริฐ','student_sec' => 'D14'),
			  array('number_student' => '1','student_code' => '5921207002','student_name' => 'นายเกียรติศักดิ์ อุดมวิเศษ ','student_sec' => 'D9'),
			  array('number_student' => '1','student_code' => '5921211023','student_name' => 'นางสาวณัฐริกา มีทอง ','student_sec' => 'D8'),
			  array('number_student' => '1','student_code' => '5921256020','student_name' => 'นางสาวปิยะมาศ แก้วกลม ','student_sec' => 'D10'),
			  array('number_student' => '2','student_code' => '5521357011','student_name' => 'นายวราศักดิ์ เงินอยู่ ','student_sec' => 'D15'),
			  array('number_student' => '2','student_code' => '5921148004','student_name' => 'นางสาวณัฐณิชา ตึ้งเจริญ ','student_sec' => 'D7'),
			  array('number_student' => '2','student_code' => '5921154003','student_name' => 'นายเจษฎาภรณ์ เมยขุนทด ','student_sec' => 'D1'),
			  array('number_student' => '2','student_code' => '5921154027','student_name' => 'นางสาวสิทธิยา คำหอม ','student_sec' => 'D11'),
			  array('number_student' => '2','student_code' => '5921154052','student_name' => 'นางสาวเพชรศิริ ปินะถา ','student_sec' => 'D12'),
			  array('number_student' => '2','student_code' => '5921156003','student_name' => 'นางสาวปัทมวรรณ เท่าเทียม ','student_sec' => 'D2'),
			  array('number_student' => '2','student_code' => '5921156023','student_name' => 'นายภาณุวัฒน์ เล็กสาคร ','student_sec' => 'D3'),
			  array('number_student' => '2','student_code' => '5921161002','student_name' => 'นายทรงเดช จันทร์ศรี ','student_sec' => 'D4'),
			  array('number_student' => '2','student_code' => '5921161024','student_name' => 'นางสาวจันทกานต์ ยุทธพันธ์ ','student_sec' => 'D5'),
			  array('number_student' => '2','student_code' => '5921161046','student_name' => 'นางสาวพรสุดา อินอุ่นโชติ ','student_sec' => 'D6'),
			  array('number_student' => '2','student_code' => '5921203024','student_name' => 'นางสาวปัญชิกา มงคลภัทรสุข ','student_sec' => 'D13'),
			  array('number_student' => '2','student_code' => '5921203047','student_name' => 'นางสาวอติพร เฮงกู๋','student_sec' => 'D14'),
			  array('number_student' => '2','student_code' => '5921207003','student_name' => 'นายรัชกร สุรพัชรเดชา ','student_sec' => 'D9'),
			  array('number_student' => '2','student_code' => '5921211026','student_name' => 'นางสาวรัชนก คำลือ ','student_sec' => 'D8'),
			  array('number_student' => '2','student_code' => '5921256021','student_name' => 'นายณัฐสิทธิ์ ปัญจรัก ','student_sec' => 'D10'),
			  array('number_student' => '3','student_code' => '5621161020','student_name' => 'นายภาคินัย เทวรัตน์ ','student_sec' => 'D15'),
			  array('number_student' => '3','student_code' => '5921148006','student_name' => 'นางสาวภาสินี ตะเคียน ','student_sec' => 'D7'),
			  array('number_student' => '3','student_code' => '5921154004','student_name' => 'นางสาวเจนจิรา วรรณรังษี ','student_sec' => 'D1'),
			  array('number_student' => '3','student_code' => '5921154028','student_name' => 'นางสาวอินทิรา เเซ่เตียว ','student_sec' => 'D11'),
			  array('number_student' => '3','student_code' => '5921154053','student_name' => 'นางสาวกนกวรรณ สายจำปา ','student_sec' => 'D12'),
			  array('number_student' => '3','student_code' => '5921156004','student_name' => 'นายธนทัต ธนภพ ','student_sec' => 'D2'),
			  array('number_student' => '3','student_code' => '5921156024','student_name' => 'นายปัญญา เทพมณี ','student_sec' => 'D3'),
			  array('number_student' => '3','student_code' => '5921161003','student_name' => 'นายพงศ์ศิริ เพชรจรัส ','student_sec' => 'D4'),
			  array('number_student' => '3','student_code' => '5921161026','student_name' => 'นายวุฒิโชติ จันทวิชชประภา ','student_sec' => 'D5'),
			  array('number_student' => '3','student_code' => '5921161047','student_name' => 'นางสาวภัทริกา ประกอบศร ','student_sec' => 'D6'),
			  array('number_student' => '3','student_code' => '5921203026','student_name' => 'นางสาวพรรณราย ดีคำไฮ ','student_sec' => 'D13'),
			  array('number_student' => '3','student_code' => '5921203048','student_name' => 'นางสาวนันทกา อายุวงค์','student_sec' => 'D14'),
			  array('number_student' => '3','student_code' => '5921207004','student_name' => 'นายกาญจนชัย ประทังกูล ','student_sec' => 'D9'),
			  array('number_student' => '3','student_code' => '5921211027','student_name' => 'นายทศพล เจริญสุข ','student_sec' => 'D8'),
			  array('number_student' => '3','student_code' => '5921256022','student_name' => 'นางสาวปาริชาติ จิวรรักษ์ ','student_sec' => 'D10'),
			  array('number_student' => '4','student_code' => '5621203047','student_name' => 'นายภาคภูมิ ขิงชัยภูมิ ','student_sec' => 'D15'),
			  array('number_student' => '4','student_code' => '5921148007','student_name' => 'นางสาวนิรมล เหมันต์ ','student_sec' => 'D7'),
			  array('number_student' => '4','student_code' => '5921154005','student_name' => 'นายณัฐพล จอง ','student_sec' => 'D1'),
			  array('number_student' => '4','student_code' => '5921154029','student_name' => 'นางสาวรัตน์สุนีย์ สุขสมัคร ','student_sec' => 'D11'),
			  array('number_student' => '4','student_code' => '5921154055','student_name' => 'นางสาวกนกภรณ์ ศรีเพ็ชร ','student_sec' => 'D12'),
			  array('number_student' => '4','student_code' => '5921156005','student_name' => 'นางสาวทิพย์สุคนธ์ โรจนะ ','student_sec' => 'D2'),
			  array('number_student' => '4','student_code' => '5921156026','student_name' => 'นายสุทธินันท์ โตกราน ','student_sec' => 'D3'),
			  array('number_student' => '4','student_code' => '5921161004','student_name' => 'นางสาวสุจิตรา เพียสุด ','student_sec' => 'D4'),
			  array('number_student' => '4','student_code' => '5921161027','student_name' => 'นางสาวบุญภิรักษ์ ยอดแก้ว ','student_sec' => 'D5'),
			  array('number_student' => '4','student_code' => '5921161048','student_name' => 'นางสาวธมลวรรณ เรืองแก้ว ','student_sec' => 'D6'),
			  array('number_student' => '4','student_code' => '5921203028','student_name' => 'นางสาวกานติมา แก้วตา ','student_sec' => 'D13'),
			  array('number_student' => '4','student_code' => '5921203050','student_name' => 'นายอนุรักษ์ ใสสด','student_sec' => 'D14'),
			  array('number_student' => '4','student_code' => '5921207005','student_name' => 'นายเทวากร ทับทิมศรี ','student_sec' => 'D9'),
			  array('number_student' => '4','student_code' => '5921211028','student_name' => 'นายอภิเดช นาคทอง ','student_sec' => 'D8'),
			  array('number_student' => '4','student_code' => '5921256023','student_name' => 'นางสาวปัทมาพร คงสัมพันธ์ ','student_sec' => 'D10'),
			  array('number_student' => '5','student_code' => '5621203131','student_name' => 'นางสาวพิชชานันท์ มีเพชร ','student_sec' => 'D15'),
			  array('number_student' => '5','student_code' => '5921148008','student_name' => 'นางสาวนุชรี สินเทา ','student_sec' => 'D7'),
			  array('number_student' => '5','student_code' => '5921154006','student_name' => 'นายภัทร มั่งสกุล ','student_sec' => 'D1'),
			  array('number_student' => '5','student_code' => '5921154030','student_name' => 'นายกฤษณะ เหมพรหม ','student_sec' => 'D11'),
			  array('number_student' => '5','student_code' => '5921154056','student_name' => 'นางสาวสุธิมา เม่นอยู่ ','student_sec' => 'D12'),
			  array('number_student' => '5','student_code' => '5921156006','student_name' => 'นายสมชาย ชาวล้อม ','student_sec' => 'D2')
			
			);
		return $data;
	}

}
