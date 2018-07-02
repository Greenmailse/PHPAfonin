<?php include $_SERVER['DOCUMENT_ROOT'].'\views\layout\header.php'; // $_SERVER['DOCUMENT_ROOT'] ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">



                    <div class="account">

                  		<div class="account-top heading">
                  				<h2>ACCOUNT</h2>
                  			</div>
                  			<div class="account-main">
                  				<div class="col-md-6 account-left">
                  					<h3>Войти</h3>
                  					<div class="account-bottom">
                              <form action="autorization.php" method="post">
                    						<input placeholder="Login" type="text" tabindex="3" name="name">
                    						<input placeholder="Password" type="password" tabindex="4" name="password">
                    						<div class="address">

                    							<input type="submit" value="Войти">
                              </form>
                  						</div>
                  					</div>
                  				</div>
                  				<div class="col-md-6 account-right account-left">
                  					<h3>Создать аккаунт</h3>
                  					<p>Создав учетную запись в нашем магазине, вы сможете быстрее переходить через процесс оформления заказа, хранить несколько адресов доставки, просматривать и отслеживать свои заказы в своей учетной записи и многое другое.</p>
                  					<a href="registernew.php">Создать аккаунт</a>
                  				</div>
                  				<div class="clearfix"></div>
                  			</div>

                  	</div>


                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'\views\layout\footer.php'; // $_SERVER['DOCUMENT_ROOT'] ?>
