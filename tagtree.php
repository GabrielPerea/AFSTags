<?php /* Template Name: TagTree */ ?>
<?php get_header(); ?>

<div class="fl-content-full container">
    <div class="row">
        <div class="fl-content col-md-12">
            <p>There should be an image below:</p>
            <?php
            $kidFacesFolder = content_url('uploads/tag-tree-assets/kids/');
            $suffix = rand(1, 3);
            $suffix = strval($suffix);
            $fullKidFaceSrc = "";
            if (strlen($suffix) === 1) {
                $fullKidFaceSrc .= $kidFacesFolder . "choco0" . $suffix . ".PNG";
            } else {
                $fullKidFaceSrc .= $kidFacesFolder . "choco" . $suffix . ".PNG";
            }

            ?>
            <img src="<?php print $fullKidFaceSrc; ?>">
        </div>
    </div>
</div>

<?php get_footer(); ?>