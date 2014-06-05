@include('site::_partials/header')


<div class="content">
	<div class="text">
		<div class="media">
			<div class="project">
				<p>
					<strong class="breathe">{{ $entry->title }}</strong>
				</p>
				<div id="more" class="description">
					<p>
						{{ $entry->body }}
					</p>
				</div>
			</div>
		</div>

	</div>
</div>

@include('site::_partials/footer')
