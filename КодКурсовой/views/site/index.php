<?php include $_SERVER['DOCUMENT_ROOT'].'\views\layout\header.php'; // $_SERVER['DOCUMENT_ROOT']
$db = mysqli_connect ('localhost','root','','bdwatches'); ?>
<script>
	 function redirectUpdate(id) {
		 document.location.href  = 'adminupdate.php' + `?upd_id=${id}`;

	 }
	 function AddinProduct(id) {
		 document.location.href  = `?add_id=${id}`;

	 }

	 function redirectRemove(id) {
		 document.location.href  =  `?del_id=${id}`;

	 }
</script>


	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<img src="/template/images/bnr-1.jpg" alt=""/>
				</li>
				<li>
					<img src="/template/images/bnr-2.jpg" alt=""/>
				</li>
				<li>
					<img src="/template/images/bnr-3.jpg" alt=""/>
				</li>
				<li>
					<img src="/template/images/bnr-4.jpg" alt=""/>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends-->
	<!--Slider-Starts-Here-->
				<script src="/template/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });

			    });
			  </script>
			<!--End-slider-script-->
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-top grid-1">
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="/template/images/abt-1.jpg" alt=""/>
						<figcaption>
							<h2>Nulla maximus nunc</h2>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="/template/images/abt-2.jpg" alt=""/>
						<figcaption>
							<h4>Mauris erat augue</h4>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="/template/images/abt-3.jpg" alt=""/>
						<figcaption>
							<h4>Cras elit mauris</h4>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>
						</figcaption>
					</figure>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--about-end-->
	<!--product-starts-->

				    <?php
							$db = mysqli_connect ('localhost','root','','bdwatches');
								$result = mysqli_query($db,"SELECT id, name, price, image,status FROM product");
				        $_SESSION['name']=='admin';
											$admin = $_SESSION['name'];
				            echo '<li> <a href="adminaddstruc.php" id="projects"> <img src="images/2_menu.jpg" alt=""/> <span class="active"></span> <span class="wrap"> <span class="link">Добавить</span> </span> </a> </li>';
										while ($myrow = mysqli_fetch_array($result)){
											echo '<div class="product">
												<div class="container">
													<div class="product-top">
														<nav>
														  <ul id="menu" class="menu">
											  <div class="col-md-3 product-left">
												<div class="product-main simpleCart_shelfItem">
													<a href="/product/view.php" '.$myrow['id'].' class="mask"><img class="img-responsive zoom-img" src="/template/images/'.$myrow['image'].'" alt="" /></a>
													<div class="product-bottom">
														<h3>'.$myrow['name'].'</h3>

																<a onclick="AddinProduct('.$myrow['id'].')" href="#"><img src="/template/images/плюс.png" alt="" /></a>
														<p>Explore Now</p>
														<h4><a class="item_add" href="/product/view.php"><i></i></a> <span class=" item_price">'.$myrow['price'].'$</span></h4>
													</div>
													</div>

												</div>
												</ul>
											</nav>
										 </div>';

													if ($myrow['status'] == 1) {
														echo'
														<div class="srch">
													<span>-50%</span>ё
												</div>';
												if(isset($_POST['btn'])) {
									if(!mysql_query("INSERT INTO `user`(`idproduct`) VALUES('01')"))
									//	<a href="/product/view.php" '.$myrow['id'].' class="mask"><img class="img-responsive zoom-img" src="/template/images/'.$myrow['image'].'" alt="" /></a>
									die("Проверьте подключение и имя таблицы/полей");
					}
										}


													if ($admin == "admin") {
														echo'
														<a onclick="redirectRemove('.$myrow['id'].')" href="#" >Удалить</a>
														<a onclick="redirectUpdate('.$myrow['id'].')" href="adminupdate.php">Изменить</a>
															<a onclick="AddinProduct('.$myrow['id'].')" href="addingbracket.php">Тест</a>


								 </div>
							 </div>
						 </div>';
										}
									}

				     ?>

	<!--product-end-->
	<!--information-starts-->
	<?php
	if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
	    @$sql = mysqli_query($db, 'DELETE FROM `product` WHERE `id` = '.$_GET['del_id']); //удаляем строку из таблицы
	    exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
	}

	if (isset($_GET['add_id'])) { //проверяем, есть ли переменная
	    @$sql = mysqli_query($db, 'INSERT INTO  `user` WHERE `idproduct` = '.$_GET['add_id']); //удаляем строку из таблицы
	    exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
	}

	if (isset($_GET['upd_id'])) { //проверяем, есть ли переменная
	    @$query = mysqli_query($db, 'SELECT name,  price FROM product WHERE `id` = '.$_GET['upd_id']);
	    exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=adminupdate.php?upd_id=".$_GET['upd_id']."'></head></html>");
	}
	 ?>

	<!--information-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">

				</div>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
<?php include $_SERVER['DOCUMENT_ROOT'].'\views\layout\footer.php'; // $_SERVER['DOCUMENT_ROOT'] ?>
