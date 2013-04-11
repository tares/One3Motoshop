		<div id="mainSection">
        	<div id="topBanner" style="background-image:url(source/images/banner/topBanner-4.png); background-repeat:no-repeat;">
            	<div id="topBanner_logo"></div>
            </div>
        	<div id="searchBOX">
            	<table width="860px" style="margin:0px 20px;">
                	<tr>
                    	<td><b>Find By : </b></td>
                        <td align="right">
                        	Brand :
                            <select class ="brand" name="brand" style="min-width:120px;">
                            	<option value="honda">-- Select Brand --</option>
								<option value="honda">Ducati</option>
								<option value="honda">Ducati</option>
								<option value="honda">Honda</option>
                                <option value="honda">Kawasaki</option>
                                <option value="honda">KTN</option>
                               	<option value="honda">Suzuki</option>
                                <option value="honda">Yamaha</option>
                            </select> 
                        </td>
                        <td align="right">
                        	Type :
                            <select class ="type" name="type" style="min-width:120px;">
                                 <option value="honda">-- Select Type --</option>
                            </select>
                        </td>
                        <td align="right">
                        	Series :
                            <select class ="series" name="series" style="min-width:120px;">
                                 <option value="honda">-- Select Series --</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        	<div id="productWrapper">
            	<div id="section-left" class="dropShadow_lighter"></div>
                <div id="section-right" class="dropShadow_lighter">
                	<div id="sectionTOP" class="dropShadow_lighter">
                        <div id="font-headserSub">
                            Our Project Gallery
                        </div>
                        <!--------SEARCH------>
                        <div id="tools-search">
                            <form action="#" method="post" class="form-wrapper cf">
                                <div>
                                      <input name="search" type="text"/>
                                      <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                         <!-------------------->
                    </div>
                    <div id="paddingWrapper">
                    	<h1>Our Project Gallery</h1> 
                   		<p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.</p>
                    	<div id="product-box-row">
                            <div id="brandWrapper">
                            <?php 
								include_once("include/sys_inc/estcon.inc.php");
							?>
                            	<?php
                             	//query Gallery brand
								$query = "	SELECT * 
											FROM data_gallery_group
											WHERE flag = '1'
											ORDER BY name_galleryGroup;";
								
								$result = mysql_query($query);
								$i=1;
								$flagLine = 1;
								while($row = mysql_fetch_array($result))
									{
										if ($flagLine == 1){
											echo ' <div id="GalleryBoxGroup"> ';
										}
										if ($i%2){
											echo ' 	<div id="GalleryBox" class="GalleryBoxleft"> ';
											echo ' 		<div id="galleryPicture" style="background-image:url(source/images/gallery/cover_brand/'.$row['pic_coverPhoto'].'.jpg);"></div> ';
											echo ' 		<div id="galleryCaptions"> ';
											echo ' 			<h3 onclick="location.href=\'index.php?location=galleryType&brand='.$row['ID_galleryGroup'].'\'">'.$row['name_galleryGroup'].'</h3> ';
											echo ' 			<p>15 Photos</p> ';
											echo ' 		</div> ';
											echo ' 	</div> ';
											$flagLine= 2;
										}else{
											echo ' 	<div id="GalleryBox" class="GalleryBoxright"> ';
											echo ' 		<div id="galleryPicture" style="background-image:url(source/images/gallery/cover_brand/'.$row['pic_coverPhoto'].'.jpg);"></div> ';
											echo ' 		<div id="galleryCaptions"> ';
											echo ' 			<h3 onclick="location.href=\'index.php?location=galleryType&brand='.$row['ID_galleryGroup'].'\'">'.$row['name_galleryGroup'].'</h3> ';
											echo ' 			<p>29 Photos</p> ';
											echo ' 		</div> ';
											echo ' 	</div> ';
											$flagLine= 3;
										}
										
										if ($flagLine == 3){
											echo ' </div> ';
											$flagLine= 1;
										}
										
	
										$i++;
									}
									
									if ($flagLine == 2){
										echo ' </div> ';
										$flagLine= 1;
									}
								?>
                            	<?php 
									include_once("include/sys_inc/endcon.inc.php");
								?>
                                <!--<div id="GalleryBoxGroup">
                                    <div id="GalleryBox" class="GalleryBoxleft">
                                        <div id="galleryPicture" style="background-image:url(source/images/gallery/cover/hondaCover.png);"></div>
                                        <div id="galleryCaptions">
                                            <h3 onclick="location.href='index.php?location=galleryType'">Honda Project</h3>
                                            <p>15 Photos</p>
                                        </div>
                                    </div>
                                    <div id="GalleryBox" class="GalleryBoxright">
                                        <div id="galleryPicture" style="background-image:url(source/images/gallery/cover/yamahaCover.png);"></div>
                                        <div id="galleryCaptions">
                                            <h3>Yamaha Project</h3>
                                            <p>41 Photos</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="GalleryBoxGroup">
                                    <div id="GalleryBox" class="GalleryBoxleft">
                                        <div id="galleryPicture" style="background-image:url(source/images/gallery/cover/ducatiCover.png);"></div>
                                        <div id="galleryCaptions">
                                            <h3>Ducati Project</h3>
                                            <p>15 Photos</p>
                                        </div>
                                    </div>
                                    <div id="GalleryBox" class="GalleryBoxright">
                                        <div id="galleryPicture" style="background-image:url(source/images/gallery/cover/kawasakiCover.png);"></div>
                                        <div id="galleryCaptions">
                                            <h3>Kawasaki Project</h3>
                                            <p>29 Photos</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="GalleryBoxGroup">
                                    <div id="GalleryBox" class="GalleryBoxleft">
                                        <div id="galleryPicture" style="background-image:url(source/images/gallery/cover/apriliaCover.png);"></div>
                                        <div id="galleryCaptions">
                                            <h3>Aprilia Project</h3>
                                            <p>36 Photos</p>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        
                        <div id="bottBanner" style="background-image:url(source/images/banner/news.png);" class="dropShadow_lighter"></div>
                    </div>
                </div>
            </div>
        </div>