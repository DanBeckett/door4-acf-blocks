<?php $flexible_content = get_field('flexible_content');
	if($flexible_content) {
		$i = 0;
		$fcp_count = count($flexible_content);
		foreach($flexible_content as $fcp) {
			$fc_type = $fcp['acf_fc_layout'];
			$i++;
			$fcp_last = ($fcp_count==$i ? true : false);
			include( 'content-fcp-'.$fc_type.'.php' );
		};
	}; 
?>
