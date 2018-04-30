<?php require 'partials/header.view.php'; ?>
	<div class="Blog">
		<?php foreach ($blogs as $blog): ?>
			<div class="w-2/3 mt-6 rounded overflow-hidden shadow-lg WhiteBackGround">
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">
						<?=$blog->title?>
					</div>
					<p class="text-grey-darker text-base">
						<?=$blog->body?>
					</p>
					<h6 class="ownerText"><?=$blog->owner?></h6>
				</div>
			</div>
		<?php endforeach ?>
	</div>
<?php require 'partials/footer.view.php'; ?>