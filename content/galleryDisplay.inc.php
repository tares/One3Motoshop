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
        	<div id="topBanner" style="background-image:url(source/images/banner/topBanner-1.png); background-repeat:no-repeat;"></div>
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
                    <div id="paddingWrapper" style="padding-bottom:10px;">
                    	<h1>Honda Project</h1> 
                   		<p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.</p>
                    </div>
                    <div id="paddingWrapper_gallery">
                        <div id="product-box-row" style="margin-bottom:0px;">
                            <div id="brandWrapper">
                                <center>
                                	<a class="fancybox-buttons" data-fancybox-group="button" href="source/images/gallery/picture/honda_cbr250r_1.jpg"><img id="gallery_picThumb" src="source/images/gallery/thumbnail/honda_cbr250r_1.png" width="180" height="180" alt="Picture Thumbnail" /></a>
                                    <a class="fancybox-buttons" data-fancybox-group="button" href="source/images/gallery/picture/honda_cbr250r_2.jpg"><img id="gallery_picThumb" src="source/images/gallery/thumbnail/honda_cbr250r_2.png" width="180" height="180" alt="Picture Thumbnail" /></a>
                                    <a class="fancybox-buttons" data-fancybox-group="button" href="source/images/gallery/picture/honda_cbr250r_3.jpg"><img id="gallery_picThumb" src="source/images/gallery/thumbnail/honda_cbr250r_3.png" width="180" height="180" alt="Picture Thumbnail" /></a>
                                    <a class="fancybox-buttons" data-fancybox-group="button" href="source/images/gallery/picture/honda_cbr250r_4.jpg"><img id="gallery_picThumb" src="source/images/gallery/thumbnail/honda_cbr250r_4.png" width="180" height="180" alt="Picture Thumbnail" /></a>
                                    <a class="fancybox-buttons" data-fancybox-group="button" href="source/images/gallery/picture/honda_cbr250r_5.jpg"><img id="gallery_picThumb" src="source/images/gallery/thumbnail/honda_cbr250r_5.png" width="180" height="180" alt="Picture Thumbnail" /></a>
                                    <a class="fancybox-buttons" data-fancybox-group="button" href="source/images/gallery/picture/honda_cbr250r_6.jpg"><img id="gallery_picThumb" src="source/images/gallery/thumbnail/honda_cbr250r_6.png" width="180" height="180" alt="Picture Thumbnail" /></a>
                                    <a class="fancybox-buttons" data-fancybox-group="button" href="source/images/gallery/picture/honda_cbr250r_7.jpg"><img id="gallery_picThumb" src="source/images/gallery/thumbnail/honda_cbr250r_7.png" width="180" height="180" alt="Picture Thumbnail" /></a>
                                    <a class="fancybox-buttons" data-fancybox-group="button" href="source/images/gallery/picture/honda_cbr250r_8.jpg"><img id="gallery_picThumb" src="source/images/gallery/thumbnail/honda_cbr250r_8.png" width="180" height="180" alt="Picture Thumbnail" /></a>
                                    <a class="fancybox-buttons" data-fancybox-group="button" href="source/images/gallery/picture/honda_cbr250r_9.jpg"><img id="gallery_picThumb" src="source/images/gallery/thumbnail/honda_cbr250r_9.png" width="180" height="180" alt="Picture Thumbnail" /></a>
                                    <a class="fancybox-buttons" data-fancybox-group="button" href="source/images/gallery/picture/honda_cbr250r_10.jpg"><img id="gallery_picThumb" src="source/images/gallery/thumbnail/honda_cbr250r_10.png" width="180" height="180" alt="Picture Thumbnail" /></a>
                                </center>
                            </div>
                        </div>
                     </div>
                     <div id="paddingWrapper">
                        <div id="bottBanner" style="background-image:url(source/images/banner/news.png);" class="dropShadow_lighter"></div>
                    </div>
                </div>
            </div>
        </div>