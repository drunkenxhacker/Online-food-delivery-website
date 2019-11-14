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








                        <h3>About US</h3>
                        <div class="hero-unit-table">

							<div id="accordion">
                <h3>About The Company</h3>
                <div>Golden Crown Restaurant is one of the most reputed and established chain of multi
cuisine family restaurants. Here you are treated with attentive care by our special and handpicked staff who are well experienced in their profession.
Golden Crown Restaurant takes utmost efforts in maintain the highest of standards in all aspects including impeccable hygiene.  </div>
                <h3>Mission</h3>
                <div>
                We take pride on our own menu being fresh to make the freshest sea food combinations you’ll
                find anywhere and serving you the tastes and flavors that takes you back to your last
                sea- side vacation. It houses a food court that caters to multi cuisines. The aromas
                that waft through the air spells of Chinese, Indian and Italian dishes that rouse mouth
                watering appetite. </div>
                <h3>Vision</h3>
                <div>You and your family can experience the explosion of the taste
                with heightened sense of pleasure , celebration or togetherness while enjoying
                delicious food as delicious as it is.</div>
							</div>
                        </div>
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
		<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#radioset" ).buttonset();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
</body>
</html>
