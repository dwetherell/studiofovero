<?php /* Smarty version 2.6.13, created on 2013-03-23 12:05:32
         compiled from inc/ui.slider.tpl */ ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
js/jq/ui.mouse.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
js/jq/ui.slider.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
css/ui.slider.css" />

<?php echo '
<script type="text/javascript">
var PommoSlider = {
	serial: 0,
	hash: [],
	defaults: {
		minValue: 0,
		maxValue: 100,
		startValue: 50,
		slide: function(e,ui) {
			PommoSlider.onSlide($(e.target).parent()[0],ui.value)
		}
		// handle: \'.ui-slider-handle\',
		// stepping: int, [must be divisible by]
		// steps: int, [# of steps, replaces stepping]
		// stop: function(e,ui),
		// start: function(e,ui),
		// change: function(e,ui)
	},
	init: function(e,p) {
		var p = $.extend(PommoSlider.defaults,p);
		return $(e).each(function(){
			var s = this.pommoSlider || PommoSlider.serial++;

			this.pommoSlider = s;
		
			PommoSlider.hash[s] = {
				params: p,
				value: null
			};
			$(this).slider(p);
		});	
	},
	onSlide: function(slider,value) {
		alert(\'no onSlide event assigned\');
	}
};
</script>
'; ?>