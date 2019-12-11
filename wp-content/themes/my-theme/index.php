<?php get_header(); ?>

<div class="container">

<?php 
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    //the_content();
      
 
?>
    
    <section class="section1">
        <div class="section1-content">
              

                <p> <?php the_field('banner_baseline') ?> </p>
                <h1> <?php the_field('banner_title_brown') ?> 
            </h1>
            <h1></h1><?php the_field('banner_title_green')?></h1>
            <?php $banne=get_field('banner_background_image');
                echo $banne['url'];
            
            ?>
            
     
     
                <div class="txtvert"> <a href="https://google.com"> S'INSCRIRE AUX RENCONTRES </br> </a>
             </div>
        </div>
    </section>
    
        
    <section class="section2">
        <h1>LA CONFÉRENCE</h1>
        <div class="txt"> <p> Les Rencontres de la Fondation s'intitulent cette année "Chaîne alimentaire </br>
        végétame et durabilité: une question d'équilibre"! Elles se tiendront le 3 décembre prochain à Bruxelles </br>
et auront pour objectif de décrypter la transition nutritionnelle des systèmes alimentaires à travers le monde, </br>
qui appelle à favoriser une alimentation plus végétale. </p> 
        </div> 
    </section>
    
    


    <section class="section3"> 
        <div class="img3"> </div>
</section>
    
     

<section class="section4"> 
       <div class="trait">
            <h1>AU PROGRAMME</h1> </div>
    
<div class="parent">  
    
    <div class="colonne1">
    <div class="txt2"> 
        <h4>LES VÉGÉTAUX DANS LA CHAÎNE ALIMENTAIRE </h4>
         </div>
    <p> 8:30 Introduction par Christophe Fondation </br>
9:00 Wim de Vries Wageningen University </br>
9:45 Benjamin Alles Paris XII University </br>
10:15 Armando Perez Cueto Copenhagen University </br>
10:42 Cofee break </br>
    </p>
</div>

  <div class="colonne2">
<div class="txt3">
 <h4> LES ACTIVITÉ DE LA FONDATION</h4>
      </div>
    <p> 11:15 Jacynthe Lafrenière, Lauréate du Prix de Recherche </br>
11:35 Le projet EPICALIM de la fondation </br>
12:00 Cérémonie du Prix de Recherche </br>
12:30 Lunch </br>
    </p>
</div>
</div>

<div class="sinscrire">
    <h4> S'INSCRIRE AUX RENCONTRES </h4>
</div>

 </div> 
</section>


<section5 class="section5">

 <h1>LES ORATEURS</h1>
     <div class="txt4"> 
        <h3> Lorem ipsum calidae por portittor et sit amet dolor callis</h3>
         </div>
    



</section5>
    
    
    <?php

  }
}
      
?>

</div>

<?php get_footer(); ?>