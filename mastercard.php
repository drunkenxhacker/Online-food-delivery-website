<?php include('header.php'); ?>
<body>
    <?php
    include('navtop.php');
    ?>
    <div id="background">

        <div id="page">
             <?php include ('nav_sidebar.php');?>
            <div id="content">
                <div class="hero-unit-table">
                    <div id="header">


                    </div>
                    <div id="body">
                        <h3>Credit Card</h3>

                        <hr>
					<div class = "panel panel-well span6 alert alert-success">
                        <form method = "POST" >
                            <label for="card_number"><span>card_number</span>
                                <input type="text" name="name" id="name">
                            </label>
                            <label for="Secpin"><span>Secpin</span>
                                <input type="text" name="Email" id="email2">
                            </label>
                            <label for="Type"><span>Typed</span>
                                <textarea id="message" style = "resize:none;" name = "message" cols="10" rows="5"></textarea>
                            </label>

                            <button   class="btn btn-success" name = "submit" ><i class="icon-envelope icon-large"></i>&nbsp;Submit</button>

                        </form>
						</div>
						<?php include ('admin/connect.php');

						if (isset ($_POST ['submit']))

						{
							$card_number = $_POST['card_number'];
							$Secpin = $_POST['Secpin'];
							$Type  = $_POST['Type'];


										mysql_query("insert into mastercard(card_number,Secpin,Type) VALUES('$card_number','$Secpin','$Type')");

									echo "<script>
										alert('Your Messages Successfully Sent');
										header ('location :../index.php');
									</script>";
									 }


									 ?>


                    </div>
                    <div id="footer">
                        <?php include('footer.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('footer_bottom.php');
    ?>
</body>
</html>
