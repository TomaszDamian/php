<?php require 'partials/header.view.php'; ?>
	<div class="Blog">
		<?php foreach ($blogs as $blog): ?>
			<div class="w-2/3 mt-6 rounded overflow-hidden shadow-lg WhiteBackGround">
				<form action="/EditThisPost" method="GET">
				<input name="id" style="display: none;" value="<?=$blog->id?>">
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">
						<?=$blog->title?>
					</div>
					<p class="text-grey-darker text-base mb-2">
						<?=$blog->body?>
					</p>
					<h6 class="ownerText">
						<?=$blog->owner?>
					</h6>
				</div>
				<button type="submit">Edit this post</button>
			</form>
			</div>
		<?php endforeach ?>
	</div>
<?php require 'partials/footer.view.php'; ?>