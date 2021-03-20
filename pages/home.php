

            <h3 class="titre">Réalisations :</h3>

            <div class="row light-blue lighten-3  z-depth-3 boi">
                <div class="col-6 center-align card1">
                    <h1>Web Concept Site</h1>
                    <h5> Laurent Allègre Développeur web, Création de site web Monteux</h5>
                    <p> Il est important que vous ayez un site Web bien conçu pour commencer.
                        Vous avez besoin d'un blog, site vitrine, boutique e-commerce pour votre commerce, restaurant, location immobilière, cabinet ou encore votre association ?
                        Ou la refonte de votre site web déjà existant ? Je vous propose mes services :
                    </p>
                    <h5>N'hésitez pas à aller sur mes réalisations pour voir d'autres concrétisations:</h5>
                </div>
                    <hr>
                    <div class="col-6 center-align rea "><h5>Les 2 dernières réalisations :</h5></div>
            </div>

            <div class="row">

            <?php

            $posts = get_posts();
            foreach($posts as $post){
                ?>
                    <div class="col l6 m6 s12">
                        <div class="card  z-depth-1">
                            <div class="card-content">
                                <h5 class="grey-text text-darken-2"><?= $post->title ?></h5>
                                <h6 class="grey-text">Le <?= date("d/m/Y à H:i",strtotime($post->date)); ?> par <?= $post->name ?></h6>
                            </div>
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="img/posts/<?= $post->image ?>" class="activator" alt="<?= $post->title ?>"/>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">control_point</i></span>
                                <p><a href="index.php?page=post&id=<?= $post->id ?>">Voir l'article complet</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><?= $post->title ?> <i class="material-icons right">close</i></span>
                                <p><?= substr(nl2br($post->content),0,1000); ?>...</p>
                            </div>
                        </div>
                    </div>
                <?php
            }

            ?>
            </div>