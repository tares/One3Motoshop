    <!-- Add jQuery library -->
    <script type="text/javascript" src="source/script/jquery/fancybox/lib/jquery-1.9.0.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="source/script/jquery/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="source/script/jquery/fancybox/source/jquery.fancybox.js?v=2.1.4"></script>
    <link rel="stylesheet" type="text/css" href="source/script/jquery/fancybox/source/jquery.fancybox.css?v=2.1.4" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="source/script/jquery/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="source/script/jquery/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : true,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons	: {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });
        });
    </script>		
        
        <div id="mainSection">
        	<div id="topBanner" style="background-image:url(source/images/banner/topBanner-1.png); background-repeat:no-repeat;">
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
                            Product Catalogue
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
                    
                    <?php 
						include_once("include/sys_inc/estcon.inc.php");
						error_reporting(-1);
					?>
                            	
                    <div id="paddingWrapper" style="padding-bottom:10px;">
                    	<?php
							$type = $_REQUEST['type'];
							$query1 = "	SELECT 	DISTINCT name_galleryGroup, name_motoTypeGroup
												
										FROM 	data_gallery_picTable a, 
												data_gallery_group b, 
												data_gallery_motoType c
												
										WHERE 	a.ID_motoTypeGroup = c.ID_motoTypeGroup 
												AND b.ID_galleryGroup = c.ID_galleryGroup 
												AND c.ID_motoTypeGroup = '".$type."' 
												AND c.flag = '1'
												
										ORDER BY addedDate, urlPic";
							
							$result1 = mysql_query($query1);
							$row1 = mysql_fetch_array($result1);
						?>
                    	<h1><?php echo ''.$row1['name_galleryGroup'].' - [ '.$row1['name_motoTypeGroup'].' ]'; ?></h1> 
                   		<p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.</p>
                    </div>
                    <div id="paddingWrapper_gallery">
                        <div id="product-box-row" style="margin-bottom:0px;">
                            <div id="brandWrapper">
                                <center>
                                
                                	<?php
										//query Gallery brand
										$query = "	SELECT 	c.ID_motoTypeGroup, 
															addedDate, captions, 
															urlThumb, urlPic, 
															c.flag, 
															name_galleryGroup, 
															name_motoTypeGroup
															
													FROM 	data_gallery_picTable a, 
															data_gallery_group b, 
															data_gallery_motoType c
															
													WHERE 	a.ID_motoTypeGroup = c.ID_motoTypeGroup 
															AND b.ID_galleryGroup = c.ID_galleryGroup 
															AND c.ID_motoTypeGroup = '".$type."' 
															AND c.flag = '1'
															
													ORDER BY addedDate, urlPic";
										
										$result = mysql_query($query);
										while($row = mysql_fetch_array($result))
											{
												echo '	<a class="fancybox-buttons" data-fancybox-group="button" href="source/images/gallery/picture/'.$row['urlPic'].'.jpg">';
												echo '		<img id="gallery_picThumb" src="source/images/gallery/thumbnail/'.$row['urlThumb'].'.jpg" width="180" height="180" alt="'.$row['captions'].'" />';
												echo '	</a>';
											}
											
										?>
                                </center>
                            </div>
                        </div>
                     </div>
                     
                    <?php 
						include_once("include/sys_inc/endcon.inc.php");
					?>
                                
                     <div id="paddingWrapper">
                        <div id="bottBanner" style="background-image:url(source/images/banner/news.png);" class="dropShadow_lighter"></div>
                    </div>
                </div>
            </div>
        </div>