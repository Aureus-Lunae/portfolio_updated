@extends('layouts.master')

@section('content')

<div id="side_left" class="maxheight">


	<div id="sidebar">
		<div class="flex maxheight align_center">
			<h1 class="title_home maxwidth">Erwin Korsten</h1>
			<h2 class="subtitle_home maxwidth">Back-end Web Developer</h2>
			<p class="content_home maxwidth">Experience with:<br /> PHP, Laravel, JS, Node.js</p>
			<p class="content_home maxwidth">Currently Learning:<br />
			C# </p>
			<p id="titles" class="titles maxwidth">Speedrunner</p>
			<p class="content_home maxwidth">Also known as Aureus Lunae.</p>
			<p class="content_home maxwidth">Besides programming, I also have other interrests. Like Speedrunning, Poetry, geocaching.</p>

		</div>
	</div>


	<div id="main" >
		<div class="flex maxheight align_center justify_center">
			<div class="moon-perspective">
				<div class="moon-freya">
					<span class="moon-overlay"></span>
				</div>
			</div>
		</div>
	</div>


</div>

@endsection

@section('scripts')
	<script type="text/javascript" src="/js/textchanger.js"></script>

	<script type="text/javascript">
		const titles = new textSlider(`titles`, [`Speedrunner`, `Poet`, `IGamePress Journalist`, `Speedrun Journalist`], 3000);
		titles.start();
	</script>
@endsection