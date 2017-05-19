<div class="bread left hide-on-med-and-down">
	<a href="{{ route('front.dashboard.index') }}" class="breadcrumb">Dashboard</a>
	@foreach(bcs()->render() as $breadcrumb)
	@if($breadcrumb['route'] == 'last')
	<span class="breadcrumb">{{ $breadcrumb['text'] }}</span>
	@else
	<a href="{{ $breadcrumb['route'] }}" class="breadcrumb">{{ $breadcrumb['text'] }}</a>
	@endif
	@endforeach
</div>