<!-- ID <?php // display the ID
the_ID(); ?> -->
<!-- <?php // get the name of the Page Template
$template_path = get_post_meta(get_the_ID(), '_wp_page_template', true);
$templates = wp_get_theme()->get_page_templates();
echo $templates[$template_path];
?>
-->