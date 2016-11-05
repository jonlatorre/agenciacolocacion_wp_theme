<?php
/*
* Template Name: colocacion
* */
?>

<?php
include('agencia_colocacion.php');
?>

<?php
get_header(); ?>
    <!-- Page Title -->
<?php get_template_part('breadcrumbs'); ?>
    <!-- End Page Title -->
    <!-- Our Blog Grids -->
    <section class="content_section">
        <div class="content">
            <div class="internal_post_con clearfix">
                <?php
                $imageSize = 'kyma_single_post_image';
                if (get_post_gallery()):
					$icon = 'fa fa-photo';
				elseif (has_post_thumbnail()):
					$icon = 'fa fa-image';
				endif; ?>
                <!-- All Content -->
                <div class="content_block col-md-12">
                    <div class="hm_blog_full_list hm_blog_list clearfix">
                    <?php
                    echo "<table>";
                    echo "<thead><td>Fecha</td><td>Titulo</td><td>Descripcion</td></thead>";
                    echo "<tbody>";

                    foreach ($ofertas as $key => $value) {
                        echo "<tr><td>" . $value["Fecha"] . "</td><td>" . $value["Titulo"] . "</td><td>" . $value["Descripcion"] . "</td></tr>";
                      }

                    echo "</tbody>";
                    echo "</table>";
                    ?>
                    
                    <!-- End Post Container -->
                    <!-- Comments Container -->
                    <?php comments_template('', true); ?>
                    <!-- End Comments Container -->
                </div>
                <!-- End blog List -->
                
            </div>
    </section>
    <!-- End All Content -->
<?php get_footer(); ?>
