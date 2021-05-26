<div class="section-title">
<?php 
$this->load->model('user_model');
$count_reviews = count($this->user_model->get_reviews());

print "<a href = '#collapseReview' data-toggle = 'collapse' role = 'button' aria-controls='collapseReview'><i class = 'far fa-comment'></i> Reviews : (".$count_reviews.")</a>";
?>
</div>

<div class="collapse" id="collapseReview">
  <div class="card card-body">
    <table class="table table-hover">
	<tbody>
		<?php foreach($reviews as $comment): ?>
		<tr>
			<?php print '<td style="width: 230px">';
			print '<b class = "text-info">'.htmlentities($comment->name).'</b>';
			print '<p>'.htmlentities($comment->email).'</p>';
			print '<small>'.date('h:i a, d M Y', strtotime($comment->dateTime)).'</small>';
			print '</td>'; ?>
			<?php print '<td><p>'.nl2br(htmlentities($comment->review)).'</p></td>'; ?>
		</tr>
		<?php endforeach ?>
	</tbody>
	</table>
  </div>
</div><br>
