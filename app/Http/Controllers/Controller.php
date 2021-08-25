<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function flash_data($type, $title, $msg, $icon = null) {
		if ($icon == null) {
			switch ($type) {
				case 'success':
				$icon = "fa fa-check";
				$alert = "alert-success";
				break;
				case 'error':
				$icon = "fa fa-ban";
				$alert = "alert-danger";
				break;
				case 'warning':
				$icon = "fa fa-warning";
				$alert = "alert-warning";
				break;
				case 'info':
				$icon = "fa fa-info";
				$alert = "alert-info";
				break;
				default:
				$icon = "fa fa-ban";
				$alert = "alert-danger";
				break;
			}
		}
		return '<div class="alert '.$alert.' alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h4><i class="icon '.$icon.'"></i> '.$title.'</h4> '.$msg.'</div>';
	}
    public function debug($var){
    	echo "<pre>";
    	print_r($var);
    	echo "</pre>";
    }
}