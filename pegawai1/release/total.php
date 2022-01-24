<tfoot>
			
			<?php {
					$query = mysqli_query($mysqli, "SELECT SUM(netto) AS total FROM `release_terakhir`") or die(mysqli_error());
					$fetch = mysqli_fetch_array($query);
			?>

				<tr>
                    <td colspan="8" class="text-center"><strong>Total Release :<strong></td>
                    <td class="text-center text-danger"><strong><?php echo $fetch['total']?><strong> /-</td>
                    </tr> 
			<?php
				}
			?>
</tfoot>