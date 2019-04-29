<div class="col-sm-14">
			<h2 id="panels-basic" style="text-align: center">Version 0.1</h2>
			<ul class="list-group">
				<li id="elt-menu">
                    <a href="index.php?page=home" class="list-group-item <?php echo ($page == 'home') ? 'active' : ''; ?>" id="action">
                        <img src="icons/home_icon-icons.com_73532.png" width="20px" height="20px" /><span class="titre-menu">Acceuil</span>
                    </a>
                </li>
                
				<li class="" id="elt-menu"><a href="index.php?page=projets&home=Projets" id="action" class="list-group-item <?php echo ($page == 'projets') ? 'active' : ''; ?>"><img src="icons/projets.png" width="20px" height="20px" /><span class="titre-menu">Projets</span></a></li>
                
				<li class="" id="elt-menu"><a href="index.php?page=videos&home=Vidéos" class="list-group-item <?php echo ($page == 'videos') ? 'active' : ''; ?>" id="action"><img src="icons/videos.png" width="20px" height="20px" /><span class="titre-menu">Vidéos</span></a></li>
                
                
				<li id="elt-menu"><a href="index.php?page=galerie&home=Galérie" class="list-group-item <?php echo ($page == 'galerie') ? 'active' : ''; ?>" id="action"><img src="icons/galerie.png" width="20px" height="20px" /><span class="titre-menu">Galerie</span></a></li>

			<?php if(isLogged() == 0){ ?>
				<li id="elt-menu"><a href="index.php?page=seconnecter&home=Se connecter" class="list-group-item <?php echo ($page == 'seconnecter') ? 'active' : ''; ?>" id="action"><img src="icons/seconnecter.png" width="20px" height="20px" /><span class="titre-menu">Se connecter</span></a></li>
			<?php } ?>
                
            <?php if(isLogged() == 1){ ?>
            	<?php if(isAdmin() == 1){ ?>
                <li id="elt-menu"><a href="index.php?page=ajoutUser&home=Ajouter un utilisateur" class="list-group-item <?php echo ($page == 'ajoutUser') ? 'active' : ''; ?>" id="action"><img src="icons/addcontact_113615.png" width="20px" height="20px" /><span class="titre-menu">Ajouter un utilisateur</span></a></li>
            <?php } ?>
                
				<li id="elt-menu"><a href="index.php?page=ajouterInfo&home=Ajouter une information" class="list-group-item <?php echo ($page == 'ajouterInfo') ? 'active' : ''; ?>" id="action"><img src="icons/ajouterInfo.png" width="20px" height="20px" /><span class="titre-menu">Ajouter une information</span></a></li>                
                
				<li id="elt-menu"><a href="index.php?page=gestionProjets&home=Gestion de projets" class="list-group-item <?php echo ($page == 'gestionProjets') ? 'active' : ''; ?>" id="action"><img src="icons/gestions.png" width="20px" height="20px" /><span class="titre-menu">Gestion des projets</span></a></li>
                
				<li id="elt-menu"><a href="index.php?page=gestionVideos&home=Gestion des vidéos" class="list-group-item activ <?php echo ($page == 'gestionVideos') ? 'active' : ''; ?>" id="action"><img src="icons/gestions.png" width="20px" height="20px" /><span class="titre-menu">Gestion des vidéos</span></a></li>
                
				<li id="elt-menu"><a href="index.php?page=gestionImg&home=Gestion des images" class="list-group-item <?php echo ($page == 'gestionImg') ? 'active' : ''; ?>" id="action"><img src="icons/gestions.png" width="20px" height="20px" /><span class="titre-menu">Gestion des images</span></a></li>
				<?php if(isAdmin() == 1){ ?>
				<li id="elt-menu"><a href="index.php?page=couriers&home=Gestion des couriers" class="list-group-item <?php echo ($page == 'couriers') ? 'active' : ''; ?>" id="action"><img src="icons/education_school_notebook_icon-icons.com_66108.png" width="20px" height="20px" /><span class="titre-menu">Couriers</span></a></li>
				<?php } ?>
            <?php } ?>
			</ul>
</div>
