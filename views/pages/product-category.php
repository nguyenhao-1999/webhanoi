<?php 
$product=loadModel('product');
$category=loadModel('category');
$cat=$_REQUEST['url'];
$rowcat=$category->category_rowslug($cat);
$rowcat['category_id'];
$rowparentid=$category->category_rowid($rowcat['category_parentid']);
$listid=$category->category_listid($rowcat['category_id']);
$list_product=$product->product_category($listid);
 ?>
<?php require_once('views/header.php'); ?>

<section class="sec-content-page">
	<div class="wp-bread-page">
        <div class="container">
            <div class="bread-page">
                <ul itemprop="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#" class="breadcrumb">
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="index.html" itemprop="url"><span itemprop="title">bepanthinh.com</span></a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?php echo $rowparentid['category_slug']; ?>.html" itemprop="url"><span itemprop="title"><?php echo $rowparentid['category_name']; ?></span></a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?php echo $rowcat['category_slug']; ?>.html" itemprop="url"><span itemprop="title"><?php echo $rowcat['category_name']; ?></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end bread page -->
    <div class="wp-main-content-page">
        <div class="container">
            <div class="main-content-page">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12 fl-right">
                        <div class="wp-right-page">
                            <div class="wp-content-sp-page danhmuc-sp-mb">
                                <div class="wp-box-post-sp">
                                    <div class="wp-title-ct-sp">
                                        <h1 class="h1-title"><?php echo $rowcat['category_name']; ?></h1>
                                    </div>
                                    <div class="wp-post-title scroll">
                                    </div>
                                </div>
                                <div class="hidden-md hidden-lg">
                                    <input type="hidden" id="URLFilter" value="bep-tu.html" />
                                    <div class="wp-boloc-mobile hidden-md hidden-lg">
                                        <div class="box-filter-mb box-filter-mb1">
                                            <select name="" id="FilterBrand" onchange="filterBrand();">
                                                <option value="0">- Hãng SX -</option>
                                                <option value="bep-tu-abbaka.html">Abbaka</option>
                                                <option value="bep-tu-aeg.html">AEG</option>
                                                <option value="bep-tu-amica.html">Amica</option>
                                                <option value="bep-tu-arber.html">Arber</option>
                                                <option value="bep-tu-ariston.html">Ariston</option>
                                                <option value="bep-tu-aroka.html">Aroka</option>
                                                <option value="bep-tu-atg.html">ATG</option>
                                                <option value="bep-tu-batani.html">Batani</option>
                                                <option value="bep-tu-bauer.html">Bauer</option>
                                                <option value="bep-tu-benza.html">Benza</option>
                                                <option value="bep-tu-binova.html">Binova</option>
                                                <option value="bep-tu-bomann.html">Bomann</option>
                                                <option value="bep-tu-bosch.html">Bosch</option>
                                                <option value="bep-tu-brandt.html">Brandt</option>
                                                <option value="bep-tu-canzy.html">Canzy</option>
                                                <option value="bep-tu-cata.html">Cata</option>
                                                <option value="bep-tu-chefs.html">Chef's</option>
                                                <option value="bep-tu-dandy.html">DANDY</option>
                                                <option value="bep-tu-dmestik.html">D'mestik</option>
                                                <option value="bep-tu-elag.html">Elag</option>
                                                <option value="bep-tu-elba.html">ELBA</option>
                                                <option value="bep-tu-electrolux.html">Electrolux</option>
                                                <option value="bep-tu-essen.html">Essen</option>
                                                <option value="bep-tu-faber.html">Faber</option>
                                                <option value="bep-tu-fagor.html">Fagor</option>
                                                <option value="bep-tu-fandi.html">Fandi</option>
                                                <option value="bep-tu-faro.html">Faro</option>
                                                <option value="bep-tu-faster.html">Faster</option>
                                                <option value="bep-tu-feuer.html">Feuer</option>
                                                <option value="bep-tu-giovani.html">Giovani</option>
                                                <option value="bep-tu-hafele.html">Hafele</option>
                                                <option value="bep-tu-kaff.html">KAFF</option>
                                                <option value="bep-tu-kocher.html">KOCHER</option>
                                                <option value="bep-tu-koenic.html">KOENIC</option>
                                                <option value="bep-tu-kucy.html">Kucy</option>
                                                <option value="bep-tu-latino.html">Latino</option>
                                                <option value="bep-tu-lorca.html">Lorca</option>
                                                <option value="bep-tu-malloca.html">Malloca</option>
                                                <option value="bep-tu-mastercook.html">Mastercook</option>
                                                <option value="bep-tu-munchen.html">Munchen</option>
                                                <option value="bep-tu-napoli.html">Napoli</option>
                                                <option value="bep-tu-napoliz.html">Napoliz</option>
                                                <option value="bep-tu-nardi.html">Nardi</option>
                                                <option value="bep-tu-pramie.html">Pramie</option>
                                                <option value="bep-tu-romal.html">Romal</option>
                                                <option value="bep-tu-rommelsbacher.html">Rommelsbacher</option>
                                                <option value="bep-tu-rosieres.html">Rosieres</option>
                                                <option value="bep-tu-sevilla.html">Sevilla</option>
                                                <option value="bep-tu-siemens.html">Siemens</option>
                                                <option value="bep-tu-smaragd.html">Smaragd</option>
                                                <option value="bep-tu-spelier.html">Spelier</option>
                                                <option value="bep-tu-sunhouse.html">Sunhouse</option>
                                                <option value="bep-tu-taka.html">Taka</option>
                                                <option value="bep-tu-teka.html">Teka</option>
                                                <option value="bep-tu-topy.html">Topy</option>
                                                <option value="bep-tu-uber.html">Uber</option>
                                                <option value="bep-tu-vasia.html">Vasia</option>
                                                <option value="bep-tu-zegu.html">ZEGU</option>
                                            </select>
                                        </div>
                                        <div class="box-filter-mb box-filter-mb1 filter-property ">
                                            <select name="" id="muc-gia" class="FilterProperty" onchange="filterProperty();">
                                                <option value="0">- Mức Giá -</option>
                                                <option value="102">Dưới 5 triệu</option>
                                                <option value="103"> 5 triệu - 10 triệu</option>
                                                <option value="104"> 10 triệu - 15 triệu</option>
                                                <option value="105">Trên 15 triệu</option>
                                            </select>
                                        </div>
                                        <div class="box-filter-mb box-filter-mb1 filter-property ">
                                            <select name="" id="so-bep-nau" class="FilterProperty" onchange="filterProperty();">
                                                <option value="0">- Số Bếp Nấu -</option>
                                                <option value="113">1 bếp</option>
                                                <option value="99">2 bếp</option>
                                                <option value="100">3 bếp</option>
                                                <option value="101">4 bếp</option>
                                                <option value="112">5 bếp</option>
                                                <option value="515">Bếp đa điểm</option>
                                            </select>
                                        </div>
                                        <div class="box-filter-mb box-filter-mb1 filter-property hidden-xs ">
                                            <select name="" id="thuong-hieu" class="FilterProperty" onchange="filterProperty();">
                                                <option value="0">- Thương Hiệu -</option>
                                                <option value="75">Germany</option>
                                                <option value="76">Spain</option>
                                                <option value="77">Italy</option>
                                                <option value="80">France</option>
                                                <option value="464">Japan</option>
                                                <option value="466">Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        function filterBrand() {
                                            var url = $("#FilterBrand").val();
                                            location.href = url;
                                        }

                                        function filterProperty() {
                                            url = $("#URLFilter").val();
                                            $('.loading').show();
                                            var select = $('.filter-property select').map(function() {
                                                return $(this).val();
                                            }).get();
                                            var atr = select.join('-');
                                            url = url + '?page=' + page + '&atr=' + atr;
                                            console.log('filter:' + url);
                                            $.ajax({
                                                url: url,
                                                type: 'get',
                                                dataType: 'html',
                                                success: function(data) {
                                                    data = $(data).find('.product-fs').html();
                                                    data = $.trim(data);
                                                    $('.product-fs').html(data);
                                                    $('.product-fs li').click(function() {
                                                        location.href = $(this).data('url');
                                                    })
                                                    $('.loading').hide();
                                                },
                                                error: function() {}
                                            });
                                        }

                                        function paging_productmb(url) {
                                            $('.loading').show();
                                            //atr
                                            var select = $('.filter-property select').map(function() {
                                                return $(this).val();
                                            }).get();
                                            var atr = select.join('-');
                                            url = url + '?page=' + page + '&atr=' + atr;
                                            console.log('paging:' + url);
                                            $.ajax({
                                                url: url,
                                                type: 'get',
                                                dataType: 'html',
                                                success: function(data) {
                                                    data = $(data).find('.product-fs').html();
                                                    data = $.trim(data);
                                                    if (data == '')
                                                        $('.pagination a').hide();
                                                    $('.product-fs').append(data);
                                                    $('.product-fs li').click(function() {
                                                        location.href = $(this).data('url');
                                                    })
                                                    $('.loading').hide();
                                                },
                                                error: function() {}
                                            });
                                        }
                                    </script>
                                </div>
                                <!-- end box text top -->
                                <div class="wp-list-sp-page">
                                    <div class="wp-filter1-page-sp hidden-sm hidden-xs">
                                        <select name="" id="sort" onchange="filter_product('bep-tu.html');">
                                            <option value="0">- Sắp xếp theo -</option>
                                            <option value="price_asc">Giá thấp đến cao</option>
                                            <option value="price_desc">Giá cao đến thấp</option>
                                            <option value="view">Xem nhiều nhất</option>
                                        </select>
                                    </div>
                                    <!-- end filter 1 -->
                                    <div class="main-list-sp-page product-fs productListVuSon">
                                        <div class="row">
                                            <?php foreach($list_product as $row): ?>
                                            <div class="col-md-4 col-sm-4 col-xs-6 ">
                                                <div class="wp-item-sp-page">
                                                    <div class="img-item-sp-page">
                                                        <a href="<?php echo $row['product_slug']; ?>.html">
                                                            <img src="public/ResizeImage/images/product/bepanthinh/anhchinh/<?php echo $row['product_img'] ?>" alt="<?php echo $row['product_name']; ?>"></a>
                                                    </div>
                                                    <div class="text-item-sp-page">
                                                        <h3 class="h3-title"><a href="<?php echo $row['product_slug']; ?>.html"><?php echo $row['product_name']; ?></a></h3>
                                                        <div class="price">
                                                            <span class="s-ins">1</span>
                                                            <span class="s-dell">1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <!-- end list sp page -->
                                <div class="phantrang text-center">
                                    <div class="pagination ajax">
                                        <a href="javascript:void(0)" data-url="https://bepanthinh.com/bep-tu.html" rel="nofollow">Xem thêm</a>
                                        <div class="loading"><i class="icon">Loading</i></div>
                                    </div>
                                </div>
                                <!-- end phan trang -->
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 fl-left">
                        <div class="box-sidebar box-hang-sx-s1 hidden-sm hidden-xs">
                            <div class="wp-title-sidebar">
                                <h2 class="h2-title">Hãng sản xuất</h2>
                            </div>
                            <div class="content-box box-hsx scroll box-filter-1">
                                <div class="box-search-sb">
                                    <form onsubmit="filter">
                                        <div class="wp-form-sb">
                                            <input type="text" class="form-control" name="keyword1" id="keyword1" onkeyup="searchBrand(this.value,'2039')" autocomplete="off" placeholder="Tìm kiếm nhanh">
                                            <button class="btn btn-danger btn-search-sb"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <ul class="ul-b list-item-box listform_filter filterBrand">
                                    <li data-url="bep-tu-abbaka.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/abbaka.png" class="icImgBrand" alt="Abbaka" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-aeg.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/aeg.png" class="icImgBrand" alt="AEG" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-amica.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/Amica.png" class="icImgBrand" alt="Amica" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-arber.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/arber-19.png" class="icImgBrand" alt="Arber" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-ariston.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/ariston-21.jpg" class="icImgBrand" alt="Ariston" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-aroka.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/aroka-102.png" class="icImgBrand" alt="Aroka" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-atg.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/atg-131.png" class="icImgBrand" alt="ATG" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-batani.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/batani-73.jpg" class="icImgBrand" alt="Batani" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-bauer.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/bauer-88.png" class="icImgBrand" alt="Bauer" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-benza.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/benza.png" class="icImgBrand" alt="Benza" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-binova.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/binova.png" class="icImgBrand" alt="Binova" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-bomann.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/bomann-82.jpg" class="icImgBrand" alt="Bomann" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-bosch.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/bosch.png" class="icImgBrand" alt="Bosch" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-brandt.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/brandt.png" class="icImgBrand" alt="Brandt" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-canzy.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/canzy(1).png" class="icImgBrand" alt="Canzy" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-cata.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/cata.png" class="icImgBrand" alt="Cata" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-chefs.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/chefs.png" class="icImgBrand" alt="Chef's" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-dandy.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/dandy.png" class="icImgBrand" alt="DANDY" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-dmestik.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/dmestik.png" class="icImgBrand" alt="D'mestik" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-elag.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/elag-122.png" class="icImgBrand" alt="Elag" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-elba.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/elba-106.jpg" class="icImgBrand" alt="ELBA" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-electrolux.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/electrolux.png" class="icImgBrand" alt="Electrolux" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-essen.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/essen-34.jpg" class="icImgBrand" alt="Essen" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-faber.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/faber.png" class="icImgBrand" alt="Faber" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-fagor.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/fagor.png" class="icImgBrand" alt="Fagor" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-fandi.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/fandi.png" class="icImgBrand" alt="Fandi" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-faro.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/faro-78.jpg" class="icImgBrand" alt="Faro" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-faster.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand/faster.png" class="icImgBrand" alt="Faster" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-feuer.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/feuer-81.jpg" class="icImgBrand" alt="Feuer" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-giovani.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/giovani.png" class="icImgBrand" alt="Giovani" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-hafele.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/hafele.png" class="icImgBrand" alt="Hafele" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-kaff.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/kaaff.png" class="icImgBrand" alt="KAFF" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-kocher.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/kocher-127.png" class="icImgBrand" alt="KOCHER" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-koenic.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/koenic-110.png" class="icImgBrand" alt="KOENIC" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-kucy.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/kucy-44.jpg" class="icImgBrand" alt="Kucy" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-latino.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/latino.png" class="icImgBrand" alt="Latino" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-lorca.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/lorca-45.png" class="icImgBrand" alt="Lorca" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-malloca.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/malloca.png" class="icImgBrand" alt="Malloca" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-mastercook.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/mastercook-47.png" class="icImgBrand" alt="Mastercook" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-munchen.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/munchen-6.jpg" class="icImgBrand" alt="Munchen" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-napoli.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/napoli.png" class="icImgBrand" alt="Napoli" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-napoliz.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/napoliz(1).png" class="icImgBrand" alt="Napoliz" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-nardi.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/nardi-48.jpg" class="icImgBrand" alt="Nardi" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-pramie.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/pramie-105.png" class="icImgBrand" alt="Pramie" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-romal.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/romal-54.png" class="icImgBrand" alt="Romal" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-rommelsbacher.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/rommelsbacher-55.jpg" class="icImgBrand" alt="Rommelsbacher" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-rosieres.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/rosieres-93.jpg" class="icImgBrand" alt="Rosieres" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-sevilla.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/sivilla-57.png" class="icImgBrand" alt="Sevilla" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-siemens.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/siemens-59.jpg" class="icImgBrand" alt="Siemens" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-smaragd.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/smaragd-135.jpg" class="icImgBrand" alt="Smaragd" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-spelier.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/spelier-114.jpg" class="icImgBrand" alt="Spelier" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-sunhouse.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/sunhouse.png" class="icImgBrand" alt="Sunhouse" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-taka.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/taka.png" class="icImgBrand" alt="Taka" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-teka.html">
                                        <div class="checkbox">
                                            <img src="public/upload/files/teka.png" class="icImgBrand" alt="Teka" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-topy.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/topy-83.png" class="icImgBrand" alt="Topy" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-uber.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/uber-133.jpg" class="icImgBrand" alt="Uber" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-vasia.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/vasia-86.jpg" class="icImgBrand" alt="Vasia" />
                                        </div>
                                    </li>
                                    <li data-url="bep-tu-zegu.html">
                                        <div class="checkbox">
                                            <img src="public/upload/images/Brand2/zegu-124.jpg" class="icImgBrand" alt="ZEGU" />
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-sidebar box-filter">
                            <div class="wp-title-sidebar2">
                                <h2 class="h2-title-filter">BỘ LỌC DANH MỤC SẢN PHẨM</h2>
                                <span>Giúp lọc nhanh sản phẩm bạn tìm kiếm</span>
                            </div>
                            <div class="content-box box-filterc2 scroll">
                                <div class="box-filter-1">
                                    <div class="title-filter">
                                        <h3 class="h3-title-filter">Mức Giá</h3>
                                    </div>
                                    <div class="wp-ul-filter">
                                        <ul class="listform_filter right-property ul-b list-finter-box">
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="muc-gia" id="muc-gia102" data-url="https://bepanthinh.com/bep-tu.html" value="102" />
                                                    <label for="muc-gia102">Dưới 5 triệu</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="muc-gia" id="muc-gia103" data-url="https://bepanthinh.com/bep-tu.html" value="103" />
                                                    <label for="muc-gia103"> 5 triệu - 10 triệu</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="muc-gia" id="muc-gia104" data-url="https://bepanthinh.com/bep-tu.html" value="104" />
                                                    <label for="muc-gia104"> 10 triệu - 15 triệu</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="muc-gia" id="muc-gia105" data-url="https://bepanthinh.com/bep-tu.html" value="105" />
                                                    <label for="muc-gia105">Trên 15 triệu</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-filter-1">
                                    <div class="title-filter">
                                        <h3 class="h3-title-filter">Số Bếp Nấu</h3>
                                    </div>
                                    <div class="wp-ul-filter">
                                        <ul class="listform_filter right-property ul-b list-finter-box">
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="so-bep-nau" id="so-bep-nau113" data-url="https://bepanthinh.com/bep-tu.html" value="113" />
                                                    <label for="so-bep-nau113">1 bếp</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="so-bep-nau" id="so-bep-nau99" data-url="https://bepanthinh.com/bep-tu.html" value="99" />
                                                    <label for="so-bep-nau99">2 bếp</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="so-bep-nau" id="so-bep-nau100" data-url="https://bepanthinh.com/bep-tu.html" value="100" />
                                                    <label for="so-bep-nau100">3 bếp</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="so-bep-nau" id="so-bep-nau101" data-url="https://bepanthinh.com/bep-tu.html" value="101" />
                                                    <label for="so-bep-nau101">4 bếp</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="so-bep-nau" id="so-bep-nau112" data-url="https://bepanthinh.com/bep-tu.html" value="112" />
                                                    <label for="so-bep-nau112">5 bếp</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="so-bep-nau" id="so-bep-nau515" data-url="https://bepanthinh.com/bep-tu.html" value="515" />
                                                    <label for="so-bep-nau515">Bếp đa điểm</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-filter-1">
                                    <div class="title-filter">
                                        <h3 class="h3-title-filter">Thương Hiệu</h3>
                                    </div>
                                    <div class="wp-ul-filter">
                                        <ul class="listform_filter right-property ul-b list-finter-box">
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="thuong-hieu" id="thuong-hieu75" data-url="https://bepanthinh.com/bep-tu.html" value="75" />
                                                    <label for="thuong-hieu75">Germany</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="thuong-hieu" id="thuong-hieu76" data-url="https://bepanthinh.com/bep-tu.html" value="76" />
                                                    <label for="thuong-hieu76">Spain</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="thuong-hieu" id="thuong-hieu77" data-url="https://bepanthinh.com/bep-tu.html" value="77" />
                                                    <label for="thuong-hieu77">Italy</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="thuong-hieu" id="thuong-hieu80" data-url="https://bepanthinh.com/bep-tu.html" value="80" />
                                                    <label for="thuong-hieu80">France</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="thuong-hieu" id="thuong-hieu464" data-url="https://bepanthinh.com/bep-tu.html" value="464" />
                                                    <label for="thuong-hieu464">Japan</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox form-group">
                                                    <input type="checkbox" name="thuong-hieu" id="thuong-hieu466" data-url="https://bepanthinh.com/bep-tu.html" value="466" />
                                                    <label for="thuong-hieu466">Thailand</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-sidebar box-exp hidden-xs">
                            <div class="wp-title-sidebar">
                                <h2 class="h2-title"><a href="kinh-nghiem-hay.html">Kinh nghiệm mua Bếp từ</a></h2>
                            </div>
                            <div class="content-box box-2">
                                <ul class="ul-b list-item-box">
                                    <li>
                                        <div class="img-exp-sb">
                                            <a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html">
                                                <img src="public/ResizeImage/images/hut-mui-am-tu-boschx500x500x4.jpg" alt="Chuyên gia hướng dẫn cách sử dụng máy hút mùi đúng cách, hiệu quả"></a>
                                        </div>
                                        <div class="text-exp-sb">
                                            <h3 class="h3-title"><a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html">Chuyên gia hướng dẫn cách sử dụng máy hút mùi đúng cách, hiệu quả</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-exp-sb">
                                            <a href="nhung-luu-y-khi-su-dung-va-huong-dan-bao-quan-lo-nuong-dien-dung-cach.html">
                                                <img src="public/ResizeImage/images/583_lo_nuong_sunhouse_shd4226__3_x500x500x4.jpg" alt="Những lưu ý khi sử dụng và hướng dẫn bảo quản lò nướng điện đúng cách"></a>
                                        </div>
                                        <div class="text-exp-sb">
                                            <h3 class="h3-title"><a href="nhung-luu-y-khi-su-dung-va-huong-dan-bao-quan-lo-nuong-dien-dung-cach.html">Những lưu ý khi sử dụng và hướng dẫn bảo quản lò nướng điện đúng cách</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-exp-sb">
                                            <a href="gioi-thieu-ve-bep-hong-ngoai-la-gi-bep-cua-thoi-dai-cong-nghe-moi.html">
                                                <img src="public/ResizeImage/images/Bep-hong-ngoai-Philips-HR-2015-Made-in-Thailand-4x500x500x4.jpg" alt="Giới thiệu về bếp hồng ngoại là gì? - bếp của thời đại công nghệ mới"></a>
                                        </div>
                                        <div class="text-exp-sb">
                                            <h3 class="h3-title"><a href="gioi-thieu-ve-bep-hong-ngoai-la-gi-bep-cua-thoi-dai-cong-nghe-moi.html">Giới thiệu về bếp hồng ngoại là gì? - bếp của thời đại công nghệ mới</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-exp-sb">
                                            <a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/anh-3x500x500x4.png" alt="Bí quyết chọn đồ phù hợp cho bếp xinh"></a>
                                        </div>
                                        <div class="text-exp-sb">
                                            <h3 class="h3-title"><a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh.html">Bí quyết chọn đồ phù hợp cho bếp xinh</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-exp-sb">
                                            <a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh-bat-kip-xu-the-hien-dai.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/bep-xinhx500x500x4.png" alt="Bí quyết chọn đồ phù hợp cho bếp xinh bắt kịp xu thế hiện đại"></a>
                                        </div>
                                        <div class="text-exp-sb">
                                            <h3 class="h3-title"><a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh-bat-kip-xu-the-hien-dai.html">Bí quyết chọn đồ phù hợp cho bếp xinh bắt kịp xu thế hiện đại</a></h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-sidebar box-phongthuy hidden-xs">
                            <div class="wp-title-sidebar">
                                <h2 class="h2-title"><a href="phong-thuy-nha-bep.html">Phong thủy nhà bếp</a></h2>
                            </div>
                            <div class="content-box">
                                <ul class="ul-b list-item-box">
                                    <li>
                                        <div class="img-phongthuy-sb">
                                            <a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html">
                                                <img src="public/ResizeImage/images/hut-mui-am-tu-boschx500x500x4.jpg" alt="Chuyên gia hướng dẫn cách sử dụng máy hút mùi đúng cách, hiệu quả"></a>
                                        </div>
                                        <div class="text-phongthuy-sb">
                                            <h3 class="h3-title"><a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html">Chuyên gia hướng dẫn cách sử dụng máy hút mùi đúng cách, hiệu quả</a></h3>
                                            <a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html" class="a-xemthem">Xem thêm <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-phongthuy-sb">
                                            <a href="nhung-luu-y-khi-su-dung-va-huong-dan-bao-quan-lo-nuong-dien-dung-cach.html">
                                                <img src="public/ResizeImage/images/583_lo_nuong_sunhouse_shd4226__3_x500x500x4.jpg" alt="Những lưu ý khi sử dụng và hướng dẫn bảo quản lò nướng điện đúng cách"></a>
                                        </div>
                                        <div class="text-phongthuy-sb">
                                            <h3 class="h3-title"><a href="nhung-luu-y-khi-su-dung-va-huong-dan-bao-quan-lo-nuong-dien-dung-cach.html">Những lưu ý khi sử dụng và hướng dẫn bảo quản lò nướng điện đúng cách</a></h3>
                                            <span class="s-date">23/08/2019 4:50:06 CH</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-phongthuy-sb">
                                            <a href="gioi-thieu-ve-bep-hong-ngoai-la-gi-bep-cua-thoi-dai-cong-nghe-moi.html">
                                                <img src="public/ResizeImage/images/Bep-hong-ngoai-Philips-HR-2015-Made-in-Thailand-4x500x500x4.jpg" alt="Giới thiệu về bếp hồng ngoại là gì? - bếp của thời đại công nghệ mới"></a>
                                        </div>
                                        <div class="text-phongthuy-sb">
                                            <h3 class="h3-title"><a href="gioi-thieu-ve-bep-hong-ngoai-la-gi-bep-cua-thoi-dai-cong-nghe-moi.html">Giới thiệu về bếp hồng ngoại là gì? - bếp của thời đại công nghệ mới</a></h3>
                                            <span class="s-date">23/08/2019 4:02:34 CH</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-phongthuy-sb">
                                            <a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/anh-3x500x500x4.png" alt="Bí quyết chọn đồ phù hợp cho bếp xinh"></a>
                                        </div>
                                        <div class="text-phongthuy-sb">
                                            <h3 class="h3-title"><a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh.html">Bí quyết chọn đồ phù hợp cho bếp xinh</a></h3>
                                            <span class="s-date">08/08/2019 11:23:29 SA</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-phongthuy-sb">
                                            <a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh-bat-kip-xu-the-hien-dai.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/bep-xinhx500x500x4.png" alt="Bí quyết chọn đồ phù hợp cho bếp xinh bắt kịp xu thế hiện đại"></a>
                                        </div>
                                        <div class="text-phongthuy-sb">
                                            <h3 class="h3-title"><a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh-bat-kip-xu-the-hien-dai.html">Bí quyết chọn đồ phù hợp cho bếp xinh bắt kịp xu thế hiện đại</a></h3>
                                            <span class="s-date">23/08/2019 11:41:00 SA</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end box 3 -->
                        <div class="box-sidebar box-exp hidden-xs">
                            <div class="wp-title-sidebar">
                                <h2 class="h2-title">Tư vấn trực tuyến</h2>
                            </div>
                            <div class="content-box box-2 box-tuvan">
                                <ul class="ul-b list-item-box">
                                    <li class="item-avt-sp">
                                        <div class="img-avt">
                                            <a href="#"><img src="Content/pc/images/icon-sp1.png" alt=""></a>
                                        </div>
                                        <div class="text-avt">
                                            <h3 class="h3-title">Kinh Doanh Hà Nội</h3><span>0913 14 1368</span></div>
                                    </li>
                                    <li class="item-avt-sp">
                                        <div class="img-avt">
                                            <a href="#"><img src="Content/pc/images/icon-sp1.png" alt=""></a>
                                        </div>
                                        <div class="text-avt">
                                            <h3 class="h3-title">Kinh Doanh HCM</h3><span>0888 34 1368</span></div>
                                    </li>
                                    <li class="item-avt-sp">
                                        <div class="img-avt">
                                            <a href="#"><img src="Content/pc/images/icon-sp1.png" alt=""></a>
                                        </div>
                                        <div class="text-avt">
                                            <h3 class="h3-title">Góp Ý Dịch Vụ</h3><span>0914 03 1368</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end box tu van -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main content page -->
</section>
<section class="sec-00 sec-sp-muanhieu">
    <div class="container">
        <div class="wp-sec-sanpham wp-sanpham-muanhieu">
            <div class="wp-title-sp">
                <h2 class="h2-title"><a href="http://bepanthinh.akr.vn/san-pham-ban-chay.html">Sản phẩm được mua nhiều nhất</a></h2>
            </div>
            <div class="wp-list-sp">
                <div id="" class="slide-sp owl-carousel owl-theme">
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="bep-tu-munchen-gm2285_8356.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-munchen-GM-2285x500x500x4.jpg" src="public/ResizeImage/images/product/bep-tu-munchen-GM-2285x500x500x4.jpg" alt="Bếp từ munchen GM2285"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="bep-tu-munchen-gm2285_8356.html">Bếp từ munchen GM2285</a></h3>
                                <div class="price">
                                    <span class="s-dell">18.500.000</span>
                                    <span class="s-ins">16.675.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="bep-tu-munchen-gm-292_8192.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-munchen-GM-292x500x500x4.jpg" src="public/ResizeImage/images/product/bep-tu-munchen-GM-292x500x500x4.jpg" alt="Bếp từ Munchen GM 292"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="bep-tu-munchen-gm-292_8192.html">Bếp từ Munchen GM 292</a></h3>
                                <div class="price">
                                    <span class="s-dell">19.100.000</span>
                                    <span class="s-ins">17.200.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="bep-tu-doi-atg-ah968mi_7780.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/pageimage/beptu hutmui/968mix500x500x4.jpg" src="public/ResizeImage/images/pageimage/beptu%20hutmui/968mix500x500x4.jpg" alt="Bếp Từ Đôi ATG-AH968MI"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="bep-tu-doi-atg-ah968mi_7780.html">Bếp Từ Đôi ATG-AH968MI</a></h3>
                                <div class="price">
                                    <span class="s-dell">19.000.000</span>
                                    <span class="s-ins">15.900.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="bep-tu-arber-ab-396_6097.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-arber-ab-396_6097x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-arber-ab-396_6097x500x500x4.png" alt="Bếp từ Arber AB 396"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="bep-tu-arber-ab-396_6097.html">Bếp từ Arber AB 396</a></h3>
                                <div class="price">
                                    <span class="s-dell">17.850.000</span>
                                    <span class="s-ins">10.500.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="bep-tu-munchen-gm-8999_5203.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-munchen-gm-8999_5203x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-munchen-gm-8999_5203x500x500x4.png" alt="Bếp từ Munchen GM 8999"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="bep-tu-munchen-gm-8999_5203.html">Bếp từ Munchen GM 8999</a></h3>
                                <div class="price">
                                    <span class="s-dell">22.500.000</span>
                                    <span class="s-ins">20.475.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="bep-tu-munchen-gm-5656_5158.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-Munchen-GM-5656x500x500x4.png" src="public/ResizeImage/images/product/bep-tu-Munchen-GM-5656x500x500x4.png" alt="Bếp từ Munchen GM 5656"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="bep-tu-munchen-gm-5656_5158.html">Bếp từ Munchen GM 5656</a></h3>
                                <div class="price">
                                    <span class="s-dell">22.500.000</span>
                                    <span class="s-ins">20.475.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="bep-tu-munchen-g60bk_468.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-munchen-g60bkx500x500x4.jpg" src="public/ResizeImage/images/product/bep-tu-munchen-g60bkx500x500x4.jpg" alt="Bếp Từ Munchen G60BK"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="bep-tu-munchen-g60bk_468.html">Bếp Từ Munchen G60BK</a></h3>
                                <div class="price">
                                    <span class="s-dell">17.300.000</span>
                                    <span class="s-ins">15.535.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="bep-tu-topy-a6868-plus.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-Topy-A6868-Plusx500x500x4.png" src="public/ResizeImage/images/product/bep-tu-Topy-A6868-Plusx500x500x4.png" alt="Bếp từ Topy A6868 Plus "></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="bep-tu-topy-a6868-plus.html">Bếp từ Topy A6868 Plus </a></h3>
                                <div class="price">
                                    <span class="s-dell">12.500.000</span>
                                    <span class="s-ins">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="bep-tu-teka-ibc-72301.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-teka-ibc-72301x500x500x4.png" src="public/ResizeImage/images/product/bep-tu-teka-ibc-72301x500x500x4.png" alt="Bếp từ Teka IBC 72301"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="bep-tu-teka-ibc-72301.html">Bếp từ Teka IBC 72301</a></h3>
                                <div class="price">
                                    <span class="s-dell">13.629.000</span>
                                    <span class="s-ins">10.450.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('views/footer.php'); ?>
