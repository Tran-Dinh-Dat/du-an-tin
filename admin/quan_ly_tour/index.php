<?php 
require "../../global.php";
require "../../pdo.php";
require '../../dao/tour.php';
extract($_REQUEST);
if (exist_param('new')) {
		$VIEW_NAME='new.php';
	}elseif (exist_param("them")) {
		$up_hinh = save_file("hinh", "$IMAGE_DIR/products/");
    	$hinh = strlen($up_hinh) > 0 ? $up_hinh : "abc.jpg";
		try {
			tour_insert($ma_tour ,$ten_tour,$hinh,$ma_kvt,$gia,$so_ngay,$so_luot_xem,$so_luot_yt,$ngay_khoi_hanh,$chi_tiet);
            unset($ma_tour, $ten_tour,$hinh,$ma_kvt,$gia,$so_ngay,$So_luot_xem,$so_luot_yeu_thich,$ngay_khoi_hanh,$chi_tiet);
        	echo '<script type="text/javascript">alert("ok")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript">alert("Sai")</script>';
		}
		$VIEW_NAME = "new.php";
	}elseif(exist_param('delete')){
		try {
			delete($ma_tour);
			$tour=tour();
			echo '<script type="text/javascript"> alert("Xoá thành công")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Xoá thất bại")</script>';
		}
		$VIEW_NAME='view.php';
	}elseif(exist_param("edit")) {
		$kvt=kvt_byid($ma_tour);
		extract($kvt);
		$VIEW_NAME = "edit.php";
	}elseif(exist_param("edit_tour")) {
		$up_hinh = save_file("up_hinh", "$IMAGE_DIR/products/");
    	$hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
		try {
			kvt_update($ma_tour,$ten_tour,$hinh);
			echo '<script type="text/javascript"> alert("Cập nhật thành công")</script>';
		}catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Cập nhật thất bại")</script>';
		}
		$VIEW_NAME = "edit.php";
	}
	else{
		$tour = tour();
		$VIEW_NAME='quan_ly_tour/view.php';
	}
require '../layout.php';
?>
