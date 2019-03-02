<?php

get_header(); the_post(); ?>

<div id="main">
	<div id="m_inner">
		<div id="contents">

				<ul id="pankuzu" class="clearfix">
					<?php the_pankuzu_keni( ' &gt; ' ); ?>
				</ul>
				<div id="seko_single">
				<h3 class="main_tit">施工事例</h3>

		<!--customer_navi-->
		<div class="customer_navi_c clearfix">
			<div class="page_back_btn01">
				<p class="page_back_text01">
					<?php previous_post_link('%link', '&lt; 前の施工事例へ'); ?>
				</p>
			</div>

			<div class="page_back_btn02">
				<p class="page_back_text02"><a href="<?php echo get_post_type_archive_link( 'seko' ); ?>">施工事例 一覧</a></p>
			</div>

			<div class="page_back_btn02">
					<p class="page_back_text02">
					<?php next_post_link('%link', '次の施工事例へ &gt;'); ?>
					</p>
			</div>
		</div>
		<!--customer_navi-->

		<div class="seko_top">
		<h4 class="ra10"><?php the_title(); ?></h4>



			<p class="im_box" ><?
			if(post_custom('seko_before_image')){
			echo gr_get_image( 'seko_before_image', array( 'width' => 350 ) );
			}else if(get_post_meta($post->ID,'seko_csv1',true)){
			 ?><img src="/wp-content/themes/gaiheki/page_image<?php echo post_custom( 'seko_csv1' ); ?>" border="0" width="350px"><?
			} ?>





<? if(post_custom('seko_interview')){ ?>
　<br />
<a href="<? echo nl2br(post_custom('seko_interview')); ?>"><img src="/wp-content/themes/gaiheki/page_image/seko/btn_interview_rollout.jpg" alt="お客様インタビューを見る" /></a>
<? } ?>
</p>





			<div class="bun_box">
				<p><? echo nl2br(post_custom('seko_wish')); ?></p>
				<? if(post_custom('seko_content')||post_custom('seko_duration')||post_custom('seko_price')){ ?>
					<table cellpadding="0" cellspacing="0">
						<? if($text = post_custom('seko_content')){ ?>
						<tr>
							<th>工事内容</th>
							<td><? echo nl2br($text); ?></td>
						</tr>
						<? }
						if($text = post_custom('seko_duration')){ ?>
						<tr>
							<th>リフォーム期間</th>
							<td><? echo $text; ?></td>
						</tr>
						<? }
						if($text = post_custom('seko_price')){ ?>
						<tr>
							<th>価格</th>
							<td><? echo nl2br($text); ?></td>
						</tr>
						<? }
						if($text = post_custom('seko_name')){ ?>
						<tr>
							<th>お客様名</th>
							<td><? echo $text; ?>様</td>
						</tr>
						<? }
						if($text = post_custom('seko_city')){ ?>
						<tr>
							<th>市町村名</th>
							<td><? echo $text; ?></td>
						</tr>
						<? } ?>
					</table>
				<? } ?>
			</div>
			<br clear="all">
		</div>

		<? if(post_custom('seko_after_image')){ ?>
		<div class="after_pic"><a href="<? echo gr_get_image_src('seko_after_image'); ?>" rel="lightbox[seko]" ><? echo gr_get_image( 'seko_after_image', array( 'width' => 730 ) ); ?></a><p class="seko_content_comment"><?php
		if($text = post_custom('seko_comment')){
			echo '<br />' . nl2br($text);
        } ?></p></div>
		<? } else if(get_post_meta($post->ID,'seko_csv2',true)): ?>
		<div class="after_pic"><a href="/wp-content/themes/gaiheki/page_image<?php echo post_custom( 'seko_csv2' ); ?>" rel="lightbox[seko]"><img src="/wp-content/themes/gaiheki/page_image<?php echo post_custom( 'seko_csv2' ); ?>" border="0" width="730" /></a><p class="seko_content_comment"><?
		if($text = post_custom('seko_comment')){
			echo '<br />' . nl2br($text);
		}
		?></p></div>
		<?php endif; ?>

		<?
		for($i=1;$i<11;$i++){
			$j	= $i*3-2;
			$dai	= post_custom("seko_h" . $i);
			$img1	= "seko_point_image" . zeroise($j,2);
			$img2	= "seko_point_image" . zeroise($j+1,2);
			$img3	= "seko_point_image" . zeroise($j+2,2);
			$csv1	= post_custom('seko_csv' . ($j+2));
			$csv2	= post_custom('seko_csv' . ($j+3));
			$csv3	= post_custom('seko_csv' . ($j+4));
		if($dai||post_custom($img1)||post_custom($img2)||post_custom($img3)||$csv1||$csv2||$csv3){ ?>
		<div class="imggroup">
			<? if($dai){ ?><h5><? echo $dai; ?></h5><? } ?>
			<? if(post_custom($img1)||$csv1){ ?>
			<p class="clear_left"><a title="<? echo post_custom("seko_point". zeroise($j,2) ); ?>" href="<? if(post_custom($img1)){echo gr_get_image_src($img1);}else if($csv1){echo '/wp-content/themes/gaiheki/page_image' . $csv1;} ?>" rel="lightbox[seko]" ><? if(post_custom($img1)){echo gr_get_image( $img1, array( 'width' => 300 ) );}else if($csv1){ echo '<img src="/wp-content/themes/gaiheki/page_image' . $csv1 . '" width="300" alt="" />'; } ?></a>
			<? echo nl2br(post_custom("seko_point". zeroise($j,2) )); ?></p>
			<? } ?>
			<? if(post_custom($img2)||$csv2){ ?>
			<p><a href="<? if(post_custom($img2)){echo gr_get_image_src($img2);}else if($csv2){echo '/wp-content/themes/gaiheki/page_image' . $csv2;} ?>" title="<? echo post_custom("seko_point". zeroise($j+1,2) ); ?>" rel="lightbox[seko]" ><? if(post_custom($img2)){echo gr_get_image( $img2, array( 'width' => 300 ) );}else if($csv2){ echo '<img src="/wp-content/themes/gaiheki/page_image' . $csv2 . '" width="300" alt="" />'; } ?></a>
			<? echo nl2br(post_custom("seko_point". zeroise($j+1,2) )); ?></p>
			<? } ?>
			<? if(post_custom($img3)||$csv3){ ?>
			<p><a href="<? if(post_custom($img3)){echo gr_get_image_src($img3);}else if($csv3){echo '/wp-content/themes/gaiheki/page_image' . $csv3;} ?>" title="<? echo post_custom("seko_point". zeroise($j+2,2) ); ?>" rel="lightbox[seko]" ><? if(post_custom($img3)){echo gr_get_image( $img3, array( 'width' => 300 ) );}else if($csv3){ echo '<img src="/wp-content/themes/gaiheki/page_image' . $csv3 . '" width="300" alt="" />'; } ?></a>
			<? echo nl2br(post_custom("seko_point". zeroise($j+2,2) )); ?></p>
			<? } ?>
		</div>
		<? }} ?>

		<? if(post_custom('seko_img')||post_custom('seko_img2')||post_custom('seko_img3')||post_custom('seko_user_voice')){ ?>
		<div class="voice">
		<h5><img src="<? echo get_stylesheet_directory_uri(); ?>/page_image/seko/seko_voice.gif" width="69" height="15" alt="お客様の声" /></h5>
		<? if(post_custom('seko_img')){ ?>
		<p class="img_box clear_left"><a href="<? echo gr_get_image_src('seko_img'); ?>" rel="lightbox[seko]" ><? echo gr_get_image( 'seko_img', array( 'width' => 346 ) ); ?></a></p>
		<? }
		if(post_custom('seko_img2')){ ?>
		<p class="img_box"><a href="<? echo gr_get_image_src('seko_img2'); ?>" rel="lightbox[seko]" ><? echo gr_get_image( 'seko_img2', array( 'width' => 346 ) ); ?></a></p>
		<? }
		if(post_custom('seko_img3')){ ?>
		<p class="img_box"><a href="<? echo gr_get_image_src('seko_img3'); ?>" rel="lightbox[seko]" ><? echo gr_get_image( 'seko_img3', array( 'width' => 346 ) ); ?></a></p>
		<? }
		if(post_custom('seko_user_voice')){ ?>
		<p class="bun_box"><? echo nl2br(post_custom('seko_user_voice')); ?></p>
		<? } ?>
		</div>
		<? } ?>

		<?
		$terms = get_the_terms($post->ID, 'seko_staff');

		if($terms||post_custom('seko_staff_voice')){ ?>
		<div class="seko_content_comment ra10">
			<h5><img src="<? echo get_stylesheet_directory_uri(); ?>/page_image/seko/seko_tantou.gif" width="109" height="14" alt="私が担当しました！" /></h5>




			<?
			if($terms){
			foreach ( $terms as $term ) :
			$args = array(
				'post_type' => 'staff',
				'page_id' => $term->slug,
				'posts_per_page' => 1
			);
			query_posts( $args );
			while(have_posts()): the_post();
			echo '<p class="img_box"><a href="';
			the_permalink();
			echo '">';


			if(post_custom($img = 'staff_new_img')){
				echo gr_get_image( $img, array( 'width' => 100 ) );




			}



			echo '<br />' . get_the_title() . '</a></p>';
			endwhile;
			wp_reset_query();

			endforeach;
			}

			?>

<p class="bun_box"><?php echo nl2br(post_custom('seko_staff_voice')); ?></p>


























		</div>
		<? } ?>

	<!--
		<?
		if($bnr){
			echo '<ul class="seko_content_bnr">';
			$bnr_group = split(',', $bnr);
			$i = 0;
			foreach($bnr_group as $bnr_group):
				if($bnr_group=="増改築"){
					$img = "special";
					$url = "/special/";
				}else if($bnr_group=="キッチン"){
					$img = "kitchen";
					$url = "/reformmenu/kitchen/";
				}else if($bnr_group=="お風呂"){
					$img = "ohuro";
					$url = "/reformmenu/ohuro/";
				}else if($bnr_group=="トイレ"){
					$img = "toilet";
					$url = "/reformmenu/toilet/";
				}else if($bnr_group=="洗面"){
					$img = "senmen";
					$url = "/seko_cat/senmen/";
				}else if($bnr_group=="クロスの張り替え"){
					$img = "kabegami";
					$url = "/reformmenu/kabegami/";
				}else if($bnr_group=="床・フローリング"){
					$img = "yuka";
					$url = "/reformmenu/yuka/";
				}else if($bnr_group=="和室を洋室にしたい"){
					$img = "j2w";
					$url = "/reformmenu/j2w/";
				}else if($bnr_group=="屋根"){
					$img = "yane";
					$url = "/reformmenu/yane/";
				}else if($bnr_group=="外壁"){
					$img = "gaiheki";
					$url = "/reformmenu/gaiheki/";
				}else if($bnr_group=="給湯器"){
					$img = "kyuto";
					$url = "/reformmenu/kyuto/";
				}else if($bnr_group=="エクステリア"){
					$img = "exterior";
					$url = "/seko_cat/exterior/";
				}else if($bnr_group=="オール電化"){
					$img = "alldenka";
					$url = "";
				}else if($bnr_group=="太陽光"){
					$img = "solar";
					$url = "";
				}else if($bnr_group=="耐震"){
					$img = "taishin";
					$url = "/other/taishin/";
				}

				?>
				<li<? if($i%2==0){echo ' class="clear_left"';} ?>><? if($url){echo '<a href="' . $url . '">';} ?><img src="/wp-content/themes/gaiheki/page_image/seko_bnr_<? echo $img; ?>_rollout.jpg" width="250" height="70" alt="<? echo $bnr_group ?>" /><? if($url){echo "</a>";} ?></li>
		<?
		$i++;
		endforeach;
			echo "</ul>";
		} ?>
-->
		<!--customer_navi-->
		<div class="customer_navi_c clearfix">
			<div class="page_back_btn01">
				<p class="page_back_text01">
					<?php previous_post_link('%link', '&lt; 前の施工事例へ'); ?>
				</p>
			</div>

			<div class="page_back_btn02">
				<p class="page_back_text02"><a href="<?php echo get_post_type_archive_link( 'seko' ); ?>">施工事例 一覧</a></p>
			</div>

			<div class="page_back_btn02">
					<p class="page_back_text02">
					<?php next_post_link('%link', '次の施工事例へ &gt;'); ?>
					</p>
			</div>
		</div>
		<!--customer_navi-->
	</div>

<?php gr_kaiyu2(); ?>
<?php gr_contact_banner_kaiyu(); ?>

		</div>
		<!-- / #contents -->
<?php get_sidebar(); ?>


	</div>
</div>
<!-- / #main -->
<?php gr_contact_banner(); ?>
<?php get_footer(); ?>
