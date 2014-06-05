@include('site::_partials/header')

<div class="btn-group">
  <button type="button" class="colors btn btn-default"><i class="fa fa-th"></i></button>
  <button type="button" class="defaults btn btn-default active"><i class="fa fa-minus"></i></button>
</div>

<div class="content">
	<div class="text">
		<div class="media">
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
				
				</h5>
				--}}

				@if ($entry->image)
				<p>
					<img class="fim" src="{{asset('site/assets/img/empty.png')}}"  alt="" data-echo="{{ Image::resize($entry->image, 800, 600) }}" style="opacity: 1;">
				</p>
				@endif
				<div id="more" class="description">
					<p> <strong class="breathe">Description</strong> {{ $entry->body }}</p>
				</div>
			</div>
		</div>
	</div>
</div>

@include('site::_partials/footer')
