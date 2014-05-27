<?php 
function debug_to_console($data){
			$output = '';
			if(is_array($data)){
				$t=gettype($data);
				$output .= "<script>console.log('{$t}: " . implode(',', $data) . "' );</script>";
			} 
			else if(is_object($data)){
				$data = var_export($data, TRUE);
				$data = explode("\n", $data);
				foreach($data as $line){
					if(trim($line)){
						$line = addslashes($line);
						$output .= "console.log('{$line}');";
					}
				}
				$output = "<script>$output</script>";
			}
			else {
				$t=gettype($data);
				$output .= "<script>console.log('{$t}: {$data}');</script>";
			}
			echo $output;
		}
?>