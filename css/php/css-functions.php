<?php /* add functions here, but don't change what's here */
function animation_duration($value) {
	echo 'animation-duration: '.$value.'; -moz-animation-duration: '.$value.'; -webkit-animation-duration: '.$value;
}

function animation_iteration_count($value) {
	echo 'animation-iteration-count: '.$value.'; -moz-animation-iteration-count: '.$value.'; -webkit-animation-iteration-count: '.$value;
}

function animation_name($value) {
	echo 'animation-name: '.$value.'; -moz-animation-name: '.$value.'; -webkit-animation-name: '.$value.'; -ms-animation-name: '.$value;
}

function animation_timing_function($value) {
	echo 'animation-timing-function: '.$value.'; -moz-animation-timing-function: '.$value.'; -webkit-animation-timing-function: '.$value;
}

function appearance($value) {
	echo 'appearance: '.$value.'; -moz-appearance: '.$value.'; -webkit-appearance: '.$value;
}

function box_sizing($value) {
	echo 'box-sizing: '.$value.'; -moz-box-sizing: '.$value.'; -webkit-box-sizing: '.$value;
}

function transform($value) {
	echo 'transform: '.$value.'; -moz-transform: '.$value.'; -webkit-transform: '.$value.'; -ms-transform: '.$value;
}

function transition($value) {
	echo 'transition: '.$value.'; -moz-transition: '.$value.'; -webkit-transition: '.$value.'; -ms-transition: '.$value;
}

function transform_origin($value) {
	echo 'transform-origin: '.$value.'; -moz-transform-origin: '.$value.'; -webkit-transform-origin: '.$value;
}

?>
