<!--? Gallery Area Start -->
<div class="gallery-area">
    <div class="container-fluid p-0 fix">
        <div class="row">
			<?php
			$gallery_images = CFS()->get('gallery_images');
			foreach ($gallery_images as $image) {
				echo '<img src="'.$image["image"].'"/>';
			}?>
        </div>
    </div>
</div>
