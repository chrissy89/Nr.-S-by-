    
<div class="hero-image">
<div class="hero-image-bg" style="background-image: url('http://chri99v34.apache.eadania.dk/wordpress/wp-content/uploads/2020/06/20.jpg'); background-repeat:no-repeat; background-size:cover;">
<div class="container">
	<h2>Nr. Søby Cykelklub</h2>
	<p>Ikke en klub for nogen, men en klub for alle</p>
</div>
</div>
</div>

<?php get_header();?>

<div class="container entry-content">
    
    
     <h1><?php the_title(); ?></h1>

    
    <?php
        if (have_posts()) : while (have_posts()) : the_post();
        the_content();
        endwhile;
        endif;
    ?>
    
</div>

   <div class="beregner">
    <titel>Cykel højde</titel>
<body>
  

	

	<style>
		input{
		margin-left: 2em;
		background-color: #ffdd;
		text-align: left;
		}
		button{
			background-color: blue;
		}
        .beregner {
            margin-left: 35em;
            margin-bottom: 20em;
        }
	</style>


	<form> <br>Din højde i cm<input type="text" name="højdefelt" id = "højdefelt"><br>
        
		
	 <br>racer  <input type="text" name="racerfelt" id = "racerfelt"><br>
		
		
   <br> <button type ="button" onClick="minFunktion()">beregn racer i cm</button><br>
	</form>
	
</body>


<script>
		function minFunktion(){  
		var højde, racer;           
			
		højde=  document.getElementById("højdefelt").value;
		racer = højde*0.66;			
		}
	
	
	</script>
       </div>

<?php get_footer();?>


