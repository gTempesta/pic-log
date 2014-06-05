@include('site::_partials/header')

<div class="btn-group">
  <button type="button" class="colors btn btn-default"><i class="fa fa-th"></i></button>
  <button type="button" class="defaults btn btn-default active"><i class="fa fa-minus"></i></button>
</div>

<div class="content">
	<div class="introduction">
		<p>Here at Pic-Log we like to play with the different users who happen to interact with our application. </p>
		<!--
		<p>
		Here for exmple you can see which user has uploaded any single image. 
		</p>
	-->
		<p>
			If you want you can also switch your view depending on the user you select. 
		</p>
		<ul>
		<li class="red list"><div class="square"></div> <p>Giorgio</p></li>
		
		
		<li class="yellow list"><div class="square"></div> <p>Matteo</p></li>
	
	
		<li class="blue list"><div class="square"></div> <p>Simone </p></li>
	
	
		<li class="green list"><div class="square"></div> <p>Pietro</p></li>
	</ul>

	</div>
	<div class="text">
		<div class="media">
			@foreach ($entries as $entry)
			{{-- */ $art_id=$entry->author->id; /* --}}
				<?php

				switch ($art_id) {
				  case 1:
				    $color_class="green";
				    break;
				  case 2:
				    $color_class="red"; 
				    break;
				  case 3:
				    $color_class="blue"; 
				    break;
				  case 4:
				    $color_class="yellow"; 
				    break;
				  default:
				    $color_class="default"; 
				}

				?>

			<div class="project <?php echo $color_class ?> default">
				<p>
				<strong class="breathe">Project</strong> <!--Sita Murt Spring Summer 2010 -->
					<a href="{{ route('article', $entry->slug) }}">{{ $entry->title }}</a>
				</p>
				{{-- 
				<h5>Created at {{ $entry->created_at }} &bull; 
				 

				by {{ $entry->author->email }}
				
				ID: {{ $entry->author->id }} --}}
				
				</h5>
				

				@if ($entry->image)
				<p>
					<img class="fim" src="{{asset('site/assets/img/empty.png')}}"  alt="" data-echo="{{ Image::resize($entry->image, 800, 600) }}" style="opacity: 1;">
				</p>
				@endif
				<div id="more" class="description">
					<p> <strong class="breathe">Description</strong> {{ Str::limit($entry->body, 100) }}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

@include('site::_partials/footer')
