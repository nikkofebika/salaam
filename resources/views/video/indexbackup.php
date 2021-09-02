@extends('layouts.default')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/ytPopup/grt-youtube-popup.css') }}">
<style type="text/css">
	.yt_wrapper {
		position:relative;
	}
	.play-btn {
		position:absolute;
		z-index:666;
		top:50%;
		left:50%;
		transform:translate(-50%, -50%);
		background-color:transparent;
		border:0;
	}
	.play-btn:hover {
		cursor:pointer;
	}
	.play-btn:focus {
		outline:0;
	}
	.grtyoutube-popup {
		display: flex !important;
	}
	.grtyoutube-popup-content {
		margin: auto!important;
	}
</style>
@endpush
@section('content')
<main id="main">
	<section class="breadcrumbs">
		<div class="container my-auto">
			<ol>
				<li><a href="{{ url('/') }}">Beranda</a></li>
				<li>Video</li>
			</ol>
			<h2>Video</h2>
		</div>
	</section>
	<section id="team" class="team">
		<div class="container" data-aos="fade-up">
			<header class="section-header">
				<!-- <h3>Video Terbaru</h3> -->
				<p>Video Terbaru</p>
			</header>
			<div class="row gy-4">
				@foreach ($latest_videos as $v)
				<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
					<div class="member">
						<div class="yt_wrapper">
							<img src="{{ asset($v->mq_thumbnail) }}" class="w-100 play-video" alt="{{ $v->title }}" youtubeid="{{ $v->video_id }}">
							<img class="play-btn play-video" src="{{ asset('assets/img/icons/yt-button.svg') }}" alt="Play button" width="70" youtubeid="{{ $v->video_id }}">
						</div>
						<div class="member-info">
							<a href="{{ url('/video/terbaru/'.$v->seo_title) }}"><p style="font-weight: 700; color: #424143;">{{ $v->title }}</p></a>
						</div>
					</div>
				</div>
				@endForeach
				<center><a href="{{ url('/video/terbaru') }}" class="btn-buy rounded">Lihat Semua</a></center>
			</div>
			<?php $data_playlist = [];
			foreach ($playlist as $ply) {
				$data_playlist[] = ['playlist_id' => $ply->playlist_id, 'seo_title' => $ply->seo_title] ?>
				<hr>
				<header class="section-header">
					<p>{{ $ply->title }}</p>
				</header>
				<div class="row gy-4 mb-3" id="<?php echo $ply->seo_title ?>">
				</div>
				<center><a href="{{ url('/video/'.$ply->seo_title) }}" class="btn-buy rounded">Lihat Semua</a></center>
			<?php } ?>
		</div>
	</section>
</main>
@endsection
@push('scripts')
<script src="{{ asset('assets/vendor/ytPopup/grt-youtube-popup.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function($) {
		$(".play-video").grtyoutube({
			autoPlay:true,
			theme: "dark"
		}).click(function(){
			$.get("{{ url('video/click_video') }}/"+$(this).attr('youtubeid'));
		})
		var dataPlaylist = <?php echo json_encode($data_playlist) ?>;
		$.each(dataPlaylist, function(i,data){
			$.get(`{{ url('video/get_playlist_item') }}/`+data.playlist_id+'/'+data.seo_title, function(html){
				$('#'+data.seo_title).html(html)
			})
		})
	});
</script>
@endpush