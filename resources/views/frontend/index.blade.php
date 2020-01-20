<!DOCTYPE html>
<html lang="en">
  @include('frontend/layouts/head')

	<body>
	@include('frontend/layouts/header')
	@include('frontend/layouts/slider')
	@include('frontend/layouts/section')
	@include('frontend/layouts/section2')

	<div class="visible-lg visible-md">
		<img class="center-block" src="magnews/img/ad-3.jpg" alt="">
	</div>

	@include('frontend/layouts/section3')
	@include('frontend/layouts/section3')
	@include('frontend/layouts/footer')

	<div id="back-to-top"></div>

  @include('frontend/layouts/plugins')

	</body>
</html>
