<?php define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true); ?>
<?php /* Template Name: TagTree */ ?>
<?php get_header(); ?>

<script>
    // Add assets url path to global scope for our JS to use for loading files
    window.tagTreeAssetsURL = "<?php print content_url('uploads/tag-tree-assets/'); ?>";
    window.siteURL = "<?php print get_site_url() ?>"
</script>

<style>
    /* We can't do this in the main css file since it uses PHP to get the file path */
    .tt-tag-main {
        background: url(<?php print content_url('uploads/tag-tree-assets/images/tagimage.png'); ?>);
        background-repeat: no-repeat;
        background-size: 600px 300px;
        background-position: center;
    }
</style>

<div class="container mt-2" style="position: relative;">
    <!-- Header row with hero image -->
    <div class="row">
        <div class="col-12 col-lg-6 order-lg-1 order-2 text-center">
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
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_1400.jpg 1400w" src="<?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_1400.jpg" alt="Excited gift recipient">
            </picture>
        </div>
        <div class="col-12 col-lg-6 order-lg-2 order-1">
            <div class="jumbotron">
                <h1 class="display-4 text-uppercase">Foster Joy</h1>
                <p class="lead">A virtual gift drive to ensure foster youth receive a gift this holiday season.</p>
            </div>
        </div>
    </div>

    <!-- Tag select row -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header text-center">Choose an age group to donate</h5>
                <div class="card-body row" id="button-row">
                    <div class="col-4 text-center" id="age-group-container-1">
                        <button id="age-group-button-1" class="mx-auto">
                            <img class="img-fluid img-thumbnail" style="object-fit:cover;max-height:100px;" src="<?php print content_url('uploads/tag-tree-assets/images/present-stars.jpg'); ?>" alt="Present for 0-6">
                            <div class="tt-button-label">Age 0-6</div>
                        </button class="button">
                    </div>
                    <div class="col-4 text-center" id="age-group-container-2">
                        <button id="age-group-button-2" class="mx-auto">
                            <img class="img-fluid img-thumbnail" style="object-fit:cover;max-height:100px;" src="<?php print content_url('uploads/tag-tree-assets/images/present-dots.jpg'); ?>" alt="Present for 7-12">
                            <div class="tt-button-label">Age 7-12</div>
                        </button class="button">
                    </div>
                    <div class="col-4 text-center" id="age-group-container-3">
                        <button id="age-group-button-3" class="mx-auto">
                            <img class="img-fluid img-thumbnail" style="object-fit:cover;max-height:100px;" src="<?php print content_url('uploads/tag-tree-assets/images/present-plain.jpg'); ?>" alt="Present for 13-18">
                            <div class="tt-button-label">Age 13-18</div>
                        </button class="button">
                    </div>
                </div>
                <div class="carbody row">
                    <div class="col-12">
                        <hr class="mx-4">
                    </div>
                </div>
                <div class="card-body row">
                    <div class="col-12">
                        <h4>Decide</h4>
                        <p>Choose a gift and then decide whether you'd like to buy it yourself, or donate money and have a caseworker purchase and deliver the gift for you.</p>
                    </div>
                    <div class="col-12">
                        <h4>Choosing a gift</h4>
                        <ul>
                            <li>Chose what age foster youth you'd like to purchase a gift for.</li>
                            <li>Click on the image of the present in your chosen age group.</li>
                            <li>A tag with a foster youth's wish will pop up. If you'd like to select a different tag, click "new tag" or simply click anywhere outside the tag to remove it, and then select another.</li>
                        </ul>
                        <h5>Making a donation</h5>
                        <ul>
                            <li>After choosing your tag, click the included "Donate" button to make a tax deductible financial contribution for the child on your tag.</li>
                            <li>Enter the youth's name in the comments section of the donation page and a caseworker will purchase and deliver the gift for you.</li>
                            <li>You will receive a donation receipt.</li>
                        </ul>
                        <h5>Buying the gift yourself</h5>
                        <ul>
                            <li>After choosing your tag, click "Buy Gift".</li>
                            <li>You will be redirected to a page where you can enter your information. After entering your information, you will receive a confirmation email with instructions on where to send your gift.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- OR -->
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-center tt-or">OR</h1>
        </div>
    </div>

    <!-- Donate row -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header text-center">Make a simple monetary donation</h5>
                <div class="card-body row text-center">
                    <div class="col-12 text-center">
                        <a class="btn btn-danger btn-afsOrange" href="https://app.etapestry.com/hosted/AlternativeFamilyServices/OnlineDonation.html" rel="noopener noreferrer">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sponsors -->
    <div id="sponsors-row" class="row">
        <div class="col-12">
            <div class="card">
                <h4 class="card-header text-center">Thank you to our corporate and organizational partners!</h4>
                <div class="card-body row">
                    <?php
                    // We're going to generate the sponsor box dynamically with php and then just insert them all 
                    // We'll use a JSON file to hold the info (see "/wp-content/uploads/tag-tree-assets/sponsor-info.json")
                    // with a specific folder holding the logos (see "/wp-content/uploads/tag-tree-assets/sponsor-logos")
                    // We're doing this with PHP so that the import happens once and then is cached, as this will be a lot more efficient,
                    // however, this means that whenever you update sponsor-info.json, you'll need to udpate the page on the back end so that 
                    // wordpress re-runs the php (and then Kinsta cache should clear automatically when this page is updated).

                    $rawSponsors = file_get_contents(content_url('uploads/tag-tree-assets/sponsor-info.json'));
                    $sponsors = json_decode($rawSponsors, true);

                    for ($i = 0; $i < count($sponsors); $i++) {

                        $sponsorImageLink = content_url('uploads/tag-tree-assets/sponsor-logos/' . $sponsors[$i]['logo']);
                        $sponsorName = $sponsors[$i]['name'];
                        $sponsorLink = $sponsors[$i]['link'];


                        print "<div class='col-2 col-md-4 tt-sponsor-col'>";
                        print   "<a href='$sponsorLink' rel='noopener noreferrer' target='__blank'>";
                        print       "<div class='tt-sponsor-box'>";
                        print           "<img src='$sponsorImageLink' alt='$sponsorName' class='tt-sponsor-image'>";
                        print       "</div>";
                        print   "</a>";
                        print "</div>";
                    };
                    ?>
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