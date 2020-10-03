<?php /* Template Name: TagTree */ ?>
<?php get_header(); ?>

<script>
// Add assets url path to global scope for our JS to use for loading files
window.tagTreeAssetsURL = "<?php print content_url('uploads/tag-tree-assets/'); ?>";
</script>

<style>
    .tt-tag {
    display: none;
    position: absolute;
    top: -20px;
    left: 40%;

    height: 150px;
    border: none;
    width: 300px;

    background: url(<?php print content_url('uploads/tag-tree-assets/images/tagimage.png'); ?>);
    background-repeat: no-repeat;
    background-size: 300px 150px;
    background-position: center;
    display: flex;
    justify-content: center;
    align-content: center;
    padding-top: 5px;
    padding-bottom: 5px;
}

.tt-tag-text {
    text-align: left;
    display: block;
    margin-left: 30px;
    padding-top: 20px;
}

.tt-tag-text p {
    margin: 0;
}
</style>

<div class="container mt-2" style="position: relative;">
    <div class="row">
        <div class="col-12 col-lg-6 order-lg-1 order-2 text-center" >
            <picture>
                <img class="img-fluid rounded mx-auto" style="object-fit:cover;max-height:274px;" sizes="(max-width: 1400px) 100vw, 1400px" srcset="<?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_200.jpg 200w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_368.jpg 368w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_499.jpg 499w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_614.jpg 614w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_714.jpg 714w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_803.jpg 803w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_904.jpg 904w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_982.jpg 982w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_1061.jpg 1061w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_1135.jpg 1135w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_1214.jpg 1214w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_1283.jpg 1283w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_1350.jpg 1350w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_1389.jpg 1389w,
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_1400.jpg 1400w" 
                src="<?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_1400.jpg" alt="Excited gift recipient">
            </picture>
        </div>
        <div class="col-12 col-lg-6 order-lg-2 order-1">
            <div class="jumbotron">
                <h1 class="display-4 text-uppercase">Foster Joy</h1>
                <p class="lead">A virtual gift drive to ensure foster youth receive a gift this holiday season.</p>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Choose an age group to donate</h5>
                <div class="card-body row">
                    <div class="col-4 text-center" id="age-group-button-1">
                        <button class="mx-auto">
                            <img class="img-fluid img-thumbnail" style="object-fit:cover;max-height:100px;" src="<?php print content_url('uploads/tag-tree-assets/images/present-stars.jpg'); ?>" alt="Present for 0-6">
                        </button class="button">
                    </div>
                    <div class="col-4 text-center" id="age-group-button-2">
                        <button class="mx-auto">
                            <img class="img-fluid img-thumbnail" style="object-fit:cover;max-height:100px;" src="<?php print content_url('uploads/tag-tree-assets/images/present-dots.jpg'); ?>" alt="Present for 7-12">
                        </button class="button">
                    </div>
                    <div class="col-4 text-center" id="age-group-button-3">
                        <button class="mx-auto">
                            <img class="img-fluid img-thumbnail" style="object-fit:cover;max-height:100px;" src="<?php print content_url('uploads/tag-tree-assets/images/present-plain.jpg'); ?>" alt="Present for 13-18">
                        </button class="button">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>



<?php 
/*
// List of toys
// Each toy name should exactly correspond with an existing image
$toyList = array("truck", "rocking_horse", "doll");
$toy = $toyList[rand(0, count($toyList) - 1)];
$toyPicturesFolder = ;
$toySrc = $toyPicturesFolder . $toy . ".jpg";

// List of names with genders
$nameGenderPairs = file_get_contents(content_url('uploads/tag-tree-assets/humanChildren.json'));
$realHumanChildren = json_decode($nameGenderPairs);
$randomNumber = rand(0, count($realHumanChildren) - 1);
$name = $realHumanChildren[$randomNumber][0];
$gender = strcmp($realHumanChildren[$randomNumber][1], 'm') == 0 ? 'Boy' : "Girl";
$pronoun = strcmp($gender, 'Boy') == 0 ? 'him' : 'her';
$printableToy = str_replace("_", " ", $toy);
*/
?>