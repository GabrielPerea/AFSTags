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
        <div class="col-12 tt-hero-container" style="position:relative;text-align:center;color:white">
            <picture>
                <img class="img-fluid" style="object-fit:cover;" <?php /* sizes="(max-width: 1400px) 100vw, 1400px" */ ?> <?php /*srcset="
                            <?php print content_url('uploads/tag-tree-assets/images/tagtree-hero/'); ?>tagtree-hero_tbdgpi_c_scale,w_200.jpg 200w,
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
                            */ ?> src="<?php print content_url('uploads/tag-tree-assets/images/'); ?>tagtree-hero-2021.jpg" alt="Excited gift recipient">
            </picture>
            <h1 class="tt-hero-text-container row text-white" style="width:500px;position:absolute;right:5%;bottom:40%;">
                <span class="col-12 display-4 w-full">Alternative Family Services</span>
                <span class="col-12 display-2 w-full">Virtual Gift Drive</span>
            </h1>
            <p class="tt-hero-tagline" style="width:400px;position:absolute;right:2.5%;bottom:5%;">
                <span>A virtual gift drive to ensure youth in care</span> </br>
                <span>receive a gift this holiday season.</span>
            </p>
        </div>
    </div>

    <!-- Tag select row -->
    <div class="row mt-5">
        <div class="col-12">
            <div>
                <!-- Buttons -->
                <div class="row" id="button-row">
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
                <!-- /Buttons -->

                <!-- Choosing a Tag (Purple Box) -->
                <div class="row justify-content-center">
                    <div class="col-11 mt-5" style="background-color:#E9DFFF;">
                        <h2>Choosing a Tag</h2>
                        <ul>
                            <li>Click on the image of your chosen age group to buy a gift</li>
                            <li>Click "new tag" to brows gift options. Hitting the back-arrow will also start the tag search over.</li>
                            <li>Once you choose a foster youth's gift tag, select <span class="font-italic">Donate Money for Gift</span> or <span class="font-italic">Buy & Ship Gift</span>.</li>
                        </ul>
                    </div>
                </div>
                <!-- /Choosing a Tag -->
            </div>
        </div>
    </div>
    <div class="row mb-5" style="background-color:#F1F1F1;">
        <div class="col-12">
            <div>
                <!-- Donate or Buy & Ship -->
                <div class="row justify-content-around mt-5">
                    <div class="col-5" style="background-color:#E2E2E2;">
                        <h3>Donate Money for Gift</h3>
                        <ul>
                            <li>On the tag, click "Donate Money for Gift"</li>
                            <li>You'll be redirected to a secure donation page</li>
                            <li>Enter the youth's name in the "Foster Youth Name" section at checkout</li>
                        </ul>
                    </div>
                    <div class="col-5" style="background-color:#E2E2E2;">
                        <h3>Buy and Ship Gift</h3>
                        <ul>
                            <li>You'll be redirected to a page to enter your information</li>
                            <li>
                                Purchase a gift from any online retailer (include youth's name on gift receipt) and ship to:</br>
                                <span class="">
                                    AFS Development Department, 401 Roland Way</br>
                                    Oakland, CA 94621
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Donate or Buy & Ship -->

                <!-- Overview -->
                <div class="row justify-content-center mt-5">
                    <div class="col-11 ">
                        <h2>Overview</h2>
                        <ul>
                            <li>Individuals, businesses, and community organizations may participate in the virtual holiday gift drive.</li>
                            <li>There is no limit to how many tags can be adopted.</li>
                            <li>Please share this page’s link via your networks and on social media.</li>
                            <li>Questions can be emailed to Simone West, <a href="mailto:swest@afs4kids.org">swest@afs4kids.org</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /Overview -->
            </div>
        </div>
    </div>

    <!-- Sponsors -->
    <div id="sponsors-row" class="row mb-4">
        <div class="col-12">
            <div class="card">
                <h4 class="card-header text-center">Thank you to our corporate and organizational partners!</h4>
                <div class="card-body row justify-content-center">
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


                        print "<div class='col-12 col-md-4 tt-sponsor-col mb-3'>";
                        print   "<a href='$sponsorLink' rel='noopener noreferrer' target='__blank'>";
                        print       "<div class='tt-sponsor-box'>";
                        print           "<img src='$sponsorImageLink' alt='$sponsorName' class='tt-sponsor-image' style='object-fit:contain'>";
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