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
	.iframe_yt{
		width: 100%;
		height: 315px;
	}
	@media (max-width:768px){
		.iframe_yt{
			width: 100%;
			/*height: 315px;*/
		}
	}
</style>
@endpush
@section('content')
<?php if ($selected_video == null) {
	$selected_video = $latest_videos[0];
	unset($latest_videos[0]);
} else {
	$selected_video = $selected_video;
} ?>
<main id="main">
	<section class="breadcrumbs">
		<div class="container my-auto">
			<ol>
				<li><a href="{{ url('/') }}">Beranda</a></li>
				<li><a href="{{ url('video') }}">Video</a></li>
			</ol>
			<h2>{{ $playlist != null ? $playlist->title : "Terbaru" }}</h2>
		</div>
	</section>
	<section id="team" class="team">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-md-6">
					<center><iframe class="iframe_yt" src="https://www.youtube.com/embed/{{ $selected_video->video_id }}" title="{{ $selected_video->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
					
				</div>
				<div class="col-md-6">
					<h1 class="fs-4 fw-bold mb-4">{{ $selected_video->title }}</h1>
					<p>Dipublikasikan pada <?php echo date("d/m/Y, H:i", strtotime($selected_video->tgl_upload)) ?> WIB</p>
					<p >{{ $selected_video->description }}</p>
				</div>
			</div>
			<div class="row mt-5 gy-4" id="container_videos">
				<h5 class="fw-bold text-center">Video Lainnya</h5>
				<hr class="m-0">
				@foreach ($latest_videos as $v)
				<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
					<div class="member">
						<a href="{{ url('/video/terbaru/'.$v->seo_title) }}" class="yt_wrapper">
							<img src="{{ asset($v->mq_thumbnail) }}" class="w-100" alt="{{ $v->title }}">
							<img class="play-btn" src="{{ asset('assets/img/icons/yt-button.svg') }}" alt="Play button" width="70">
						</a>
						<div class="member-info">
							<a href="{{ url('/video/terbaru/'.$v->seo_title) }}"><p style="font-weight: 700; color: #424143;">{{ $v->title }}</p></a>
						</div>
					</div>
				</div>
				@endForeach
			</div>
			<center><a href="javascript:void(0)" id="btn_load_more" class="btn-buy rounded">Muat Lainnya</a></center>
		</div>
	</section>
</main>
@endsection
@push('scripts')
<script src="{{ asset('assets/vendor/ytPopup/grt-youtube-popup.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function($) {
		var playlistName = "<?php echo Request::segment(2) ?>";
		var defaultVideos = 6;
		var totalVideos = defaultVideos;
		$("#btn_load_more").on('click', function(e){
			$(this).hide();
			// $('#loadingGif').show();
			$.get('<?php echo url('video/ajax_load_more_video') ?>/'+totalVideos+'/'+playlistName+'<?php echo '/'.$selected_video->video_id ?>', function(res){
				// $('#loadingGif').hide();
				if (res.success) {
					$('#btn_load_more').show();
				} else {
					$('#btn_load_more').hide();
				}
				totalVideos = totalVideos+defaultVideos;
				$('#container_videos').append(res.html);

			},'json');
		})
	});
</script>
@endpush