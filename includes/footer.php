<!-- footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12">
				© IDS - Todos os direitos reservados. Criação e desenvolvimento 
				<a href="http://www.assesim.com.br/novo/" target="_blank" title="Visitar Assesim">Assesim</a>
			</div>
		</div>
	</div>
</footer>
<!-- !footer -->

<!-- scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="assets/main.js"></script>
<script type="text/javascript">
	$(".form-control").focus(function(){
		$(this).parent().addClass("focus");
	}).blur(function(){
		if($(this).val() === ''){
			$(this).parent().removeClass("focus");
		}
	})
</script>
<script type="text/javascript">
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
	    this.classList.toggle("active");
	    var panel = this.nextElementSibling;
	    if (panel.style.maxHeight){
	      panel.style.maxHeight = null;
	    } else {
	      panel.style.maxHeight = panel.scrollHeight + "px";
	    } 
	  });
	}
</script>
</body>
<!-- Init code pzw.io  //-->
<script>var $_PowerZAP = { lang: "pt-br", defaultCountry: '+55', widget_id: '415', company: "4398" }; (function(i,s,o,g,r,a,m){ i[r]={context:{id:'ff2fbb8cde7083e487a77f42d9620401'}};a=o;o=s.createElement(o); o.async=1;o.src=g;m=s.getElementsByTagName(a)[0];m.parentNode.insertBefore(o,m); })(window,document,'script','https://widget-omni.powerzap.com.br/js/widget.js?v=5.0.2.96','pwz');</script>
<!-- End code pzw.io  //-->
</html>