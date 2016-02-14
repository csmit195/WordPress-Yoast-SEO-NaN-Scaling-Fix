imageEdit.scaleChanged = function(key, box) {
	var originalX = jQuery('#imgedit-x-'+key).val();
	var originalY = jQuery('#imgedit-y-'+key).val();
	var width = jQuery('#imgedit-scale-width-'+key);
	var height = jQuery('#imgedit-scale-height-'+key);
	var ratio = originalX / originalY;
	if ( box == 1 ) {
		var newX = Math.floor(width.val()/ratio);
		if (newX > 0) {
			height.val(newX);
		}
	} else if ( box == 0 ) {
		var newY = Math.floor(height.val()*ratio);
		if (newY > 0) {
			width.val(newY);
		}
	}
}