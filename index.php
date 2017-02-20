
<!DOCTYPE html>
<html lang="lt">
    <head>
	    <meta charset="utf-8">
        <title>Gedas - Atviras Vilnius</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="http://atviras.vilnius.lt/themes/responsiv-flat/assets/images/logo_atviras.png" />
		<meta property="og:image" content="http://atviras.vilnius.lt/themes/responsiv-flat/assets/images/logo_atviras.png"/>
		<meta property="og:title" content="Pradinis puslapis - Atviras Vilnius"/>
		<meta property="fb:admins" content="1189325999"/>
		<meta property="fb:app_id" content="196892457324467"/>
		<meta property="og:type"   content="article" />
		<style type="text/css">
			html,body{
				background:#EAC85D;
    			height: 100%;
    			margin:0;
    			padding:0;
			}
			/*body{
				background-image: url('gedas.png');
				background-repeat: no-repeat;
				background-position: bottom left;  
			}*/
			#bg {
			  position: fixed; 
			  top: 0; 
			  left: 0; 
				
			  /* Preserve aspet ratio */
			  height: 100%;
			}
			#bg:hover{
				cursor:pointer;
			}
			#textbox{
			    background: #fff;
			    border-radius: 50px;
			    padding: 40px;
			    font-size: 28px;
			    line-height: 38px;
			    color: #000;
			    font-family: Helvetica;
			    font-weight: bold;
			    min-height: 115px;
			    width: 320px;
			    max-width: 500px;
			    margin-left: 20%;
			    margin-top: 5%;
			    border:0;
			    display:block;
			    text-align:center;
			    z-index:9999;
			    position:absolute;
			}
		</style>
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
		<script type="text/javascript">
			function flip(){
				if($('#bg').attr('src')=="gedas.png"){
					$('#bg').attr('src', "gedas_right.png");
					$("#bg").css('right', 0);
					$("#bg").css('left', 'auto');
					$("#textbox").css('right', 0);
					$("#textbox").css('left', 'auto');
					$("#textbox").css('margin-right', '20%');
				}
				else{
					$('#bg').attr('src', "gedas.png");
					$("#bg").css('right', 'auto');
					$("#bg").css('left', 0);
					$("#textbox").css('right', 'auto');
					$("#textbox").css('left', 0);
					$("#textbox").css('margin-left', '20%');
				}
			}
		</script>
    </head>
    <body >
		<img src="gedas.png" id="bg" alt="" onclick="flip();">
		
		<textarea id="textbox" spellcheck="false" placeholder="paspauskite ir įrašykite savo nustebusio Gedo žodžius"></textarea>
		
		
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-72198439-1', 'auto');
		  ga('send', 'pageview');
		
		</script>        


    </body>
</html>