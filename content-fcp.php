<?php $flexible_content = get_field('flexible_content');
	if($flexible_content) {
		foreach($flexible_content as $fcp) {
			$fc_type = $fcp['acf_fc_layout'];
			include( 'content-fcp-'.$fc_type.'.php' );
		};
	}; 
?>