<div class="slim-sidebar">
	<label class="sidebar-label">Navigation</label>

	<ul class="nav nav-sidebar">
	  <li class="sidebar-nav-item with-sub">
		<a href="" class="sidebar-nav-link"><i class="icon ion-ios-home-outline"></i> Table de bord</a>
		<ul class="nav sidebar-nav-sub">
		  <li class="nav-sub-item"><a href="{{ route('admin.home') }}" class="nav-sub-link active">Récapulatif</a></li>
		  <li class="nav-sub-item"><a href="{{ route('admin.home') }}" class="nav-sub-link">Statistiques</a></li>
		  <li class="nav-sub-item"><a href="{{ route('admin.home') }}" class="nav-sub-link">Finantial</a></li>
		</ul>
	  </li>
	  <li class="sidebar-nav-item with-sub">
		<a href="" class="sidebar-nav-link"><i class="icon ion-ios-lightbulb-outline"></i> Contact & Booking</a>
		<ul class="nav sidebar-nav-sub">
		  <li class="nav-sub-item"><a href="{{ route('admin.contact.index') }}" class="nav-sub-link">Contact</a></li>
		  <li class="nav-sub-item"><a href="{{ route('admin.devis.index') }}" class="nav-sub-link">Devis </a></li>
		  
		</ul>
	  </li>
	  
	  <li class="sidebar-nav-item with-sub">
		<a href="" class="sidebar-nav-link"><i class="icon ion-ios-folder-outline icon"></i> Nos Produits</a>
		<ul class="nav sidebar-nav-sub">
		  <li class="nav-sub-item"><a href="{{ route('admin.produit.index') }}" class="nav-sub-link">Listes</a></li>
		  <li class="nav-sub-item"><a href="{{ route('admin.produit.create') }}" class="nav-sub-link">Ajouter</a></li>
		</ul>
	  </li>
	  <li class="sidebar-nav-item with-sub">
		<a href="" class="sidebar-nav-link"><i class="icon ion-ios-folder-outline icon"></i> Nos Recettes</a>
		<ul class="nav sidebar-nav-sub">
		  <li class="nav-sub-item"><a href="{{ route('admin.recette.index') }}" class="nav-sub-link">Listes</a></li>
		  <li class="nav-sub-item"><a href="{{ route('admin.recette.create') }}" class="nav-sub-link">Ajouter</a></li>
		</ul>
	  </li>
	  <li class="sidebar-nav-item with-sub">
		<a href="" class="sidebar-nav-link"><i class="icon ion-ios-folder-outline icon"></i> Blog</a>
		<ul class="nav sidebar-nav-sub">
		  <li class="nav-sub-item"><a href="{{ route('admin.post.index') }}" class="nav-sub-link">Listes</a></li>
		  <li class="nav-sub-item"><a href="{{ route('admin.post.create') }}" class="nav-sub-link">Ajouter</a></li>
		</ul>
	  </li>
	</ul>
  </div>
