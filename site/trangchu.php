<?php require '../content/slidebar.php' ;
?>

<div class="container">
    <main class="all-tour">
        <h2 class="alert alert-info tieu-de-top">Các tour du lịch nổi tiếng </h2>
        <div class="col-md-8 box-tour-dl">
		<?php foreach ($tour as $key => $value) :
			extract($value)
            // echo "<pre>";
            // print_r($tour);die;
		 ?>
            
                <div class="col-md-6 tour-img">
                    <img style="max-height: 220px" class="img-thumbnail img-responsive tour-img" src="../css/images/<?=$hinh?>" alt="" >
                    <!-- <img class="img-thumbnail img-responsive tour-img" src="https://travel.com.vn/Images/LastMinute/lm_181112043753_539561.jpg" alt="" > -->
                    <div class="xem-chi-tiet">
                       <a class="chi-tiet-tour" href="chitiet/index.php?ma_tour=<?=$ma_tour?>">Chi Tiết</a>
                    </div>    
                </div>
                <div class="col-md-6 tour-content">      
                    <h4><a href="chitiet/index.php?ma_tour=<?=$ma_tour?>"><?=$ten_tour; ?></a></h4>
                    <div class="col-md-6 tour-content-left">
                        <p>Ngày khởi hành: <span><?=$ngay_khoi_hanh ?></span></p>
                        <p>Số ngày: <span> <?=$so_ngay ?></span></p>
                        
                    </div>
                    <div class="col-md-6 tour-content-right">
                        <p>Nơi khởi hành: <br><span><?=$noi_khoi_hanh?></span></p>
                        <p>Số chỗ còn nhận:  8</p>
                    </div>
                    <div class="tour-content-bot col-md-12">
                        <div class="col-md-6">
                            <h4 class="gia-tour"><?=number_format($gia)?> đ</h4>
                        </div>
                        <div class="col-md-6">
                           <button type="button" class="btn btn-default tour-content-bot-btn">Đặt Ngay</button>
                        </div>
                        
                    </div>
                </div>
                <hr class="hr-end-tour">
        <?php endforeach; ?>
            </div>
            

    </main>
    <aside class="col-md-4">  
         <?php  require '../content/aside.php' ;?>
    </aside>
</div>


</div>