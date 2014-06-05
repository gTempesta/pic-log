

 <ul class="navigation">
 				<!--
		    	<li class="navigation-main"><a href="http://www.clasebcn.com/en/sita-murt-spring-summer-2010?category=fashion#categories">About</a></li>-->
		    	<li class="navigation-main {{ (Route::is('page') and Request::segment(1) == 'about') ? 'active' : null }}"><a href="{{ route('page', 'about') }}">About</a></li>
		        <li class="navigation-main {{ (Route::is('article.list') or Route::is('article')) ? 'active' : null }}"><a href="{{ route('article.list') }}">Pictures</a></li>	
		        <li class="navigation-main {{ (Route::is('page') and Request::segment(1) == 'contact') ? 'active' : null }}"><a href="{{ route('page', 'contact') }}">Contact</a></li>


		    </ul>