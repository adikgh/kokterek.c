<? include '../config/core.php';

	// header('location: /catalog/');

	// site setting
	$menu_name = 'number';
	$site_set['visible'] = 'after';
	$site_set['header_wh'] = true;
	$site_set['plyr'] = true;
	// $site_set['header_logo'] = 'cl';
	$site_set['preload'] = true;
?>
<? include '../block/header.php'; ?>

	<!-- block 5 -->
	<div class="blx3" id="treatment">
        <div class="bl_c">
            <div class="head_c">
                <h1 class="txt_tu txt_c">Виды лечения</h1>
            </div>
            <div class="blx3_c">
                
                <? $sql = db::query("select * from sanatorium_lesh where type = 1 and rek = 1 ORDER BY number ASC limit 5"); ?>
                <? while ($ana = mysqli_fetch_array($sql)): ?>
                    <div class="bl5_i " href="#em-vanna.php" >
                        <div class="bl5_ia lazy_bag" data-src="/assets/uploads/em/<?=$ana['img']?>"></div>
                        <div class="bl5_ic">
                            <div class="bl5_ict"><?=$ana['name']?></div>
                        </div>
                    </div>
                <? endwhile ?>

                <div class="bl5_i bl5_iclc" >
					<div class="btn">Показать все</div>
				</div>
			</div>

            <!-- <div class="bl5_b ">
                <p>У нас есть подходящие процедуры для каждого гостя</p>
                <a href="lechenie.php"><div class="btn"><span>Посмотреть все процедуры </span><i class="far fa-long-arrow-right"></i></div></a>
            </div> -->

        </div>
    </div>

	
<? include '../block/footer.php'; ?>