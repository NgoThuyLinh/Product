let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 // Web
 	// css
	mix.babel('resources/assets/css/webs/magento-style.css','public/css/webs/magento-style.css');
	mix.babel('resources/assets/css/webs/style.css','public/css/webs/style.css');
	mix.babel('resources/assets/css/webs/style-font.css','public/css/webs/style-font.css');
	mix.babel('resources/assets/css/webs/slick.css','public/css/webs/slick.css');
	mix.babel('resources/assets/css/webs/nouislider.css','public/css/webs/nouislider.css');
	mix.babel('resources/assets/css/webs/settings.css','public/css/webs/settings.css');
	mix.babel('resources/assets/css/webs/bootstrap-select.css','public/css/webs/bootstrap-select.css');
	mix.babel('resources/assets/css/webs/magnific-popup.css','public/css/webs/magnific-popup.css');
	mix.babel('resources/assets/css/webs/slick-theme.css','public/css/webs/slick-theme.css');

	// js
	mix.babel('resources/assets/js/webs/modernizr.js','public/js/webs/modernizr.js');
	mix.babel('resources/assets/js/webs/js-product.js','public/js/webs/js-product.js');
	mix.babel('resources/assets/js/webs/jquery-2.1.4.min.js','public/js/webs/jquery-2.1.4.min.js');
	mix.babel('resources/assets/js/webs/bootstrap.js','public/js/webs/bootstrap.js');
	mix.babel('resources/assets/js/webs/bootstrap-select.min.js','public/js/webs/bootstrap-select.min.js');
	mix.babel('resources/assets/js/webs/slick.js','public/js/webs/slick.js');
	mix.babel('resources/assets/js/webs//jquery.parallax-1.1.3.js','public/js/webs//jquery.parallax-1.1.3.js');
	mix.babel('resources/assets/js/webs/custom.js','public/js/webs/custom.js');
	mix.babel('resources/assets/js/webs/google_map_init.js','public/js/webs/google_map_init.js');
	mix.babel('resources/assets/js/webs/nouislider.js','public/js/webs/nouislider.js');
	mix.babel('resources/assets/js/webs/js-index-01.js','public/js/webs/js-index-01.js');
	mix.babel('resources/assets/js/webs/jquery.themepunch.revolution.min.js','public/js/webs/jquery.themepunch.revolution.min.js');
	mix.babel('resources/assets/js/webs/jquery.themepunch.tools.min.js','public/js/webs/jquery.themepunch.tools.min.js');
	mix.babel('resources/assets/js/webs/jquery.colorbox-min.js','public/js/webs/jquery.colorbox-min.js');
	mix.babel('resources/assets/js/webs/imagesloaded.pkgd.min.js','public/js/webs/imagesloaded.pkgd.min.js');
	mix.babel('resources/assets/js/webs/instafeed.min.js','public/js/webs/instafeed.min.js');
	mix.babel('resources/assets/js/webs/jquery.magnific-popup.min.js','public/js/webs/jquery.magnific-popup.min.js');
	mix.babel('resources/assets/js/webs/isotope.pkgd.min.js','public/js/webs/isotope.pkgd.min.js');
	mix.babel('resources/assets/js/webs/jquery.plugin.min.js','public/js/webs/jquery.plugin.min.js');
	mix.babel('resources/assets/js/webs/jquery.countdown.min.js','public/js/webs/jquery.countdown.min.js');
	mix.copy('resources/assets/images/','public/images/',false);
	mix.copy('resources/assets/fonts/','public/fonts/',false);
// /web ---------------


// Admin
	// css
	mix.babel('resources/assets/css/admin/adminlte.css','public/css/admin/adminlte.css');
	mix.babel('resources/assets/css/admin/product.css','public/css/admin/product.css');
	mix.babel('resources/assets/css/admin/bootstrap.css','public/css/admin/bootstrap.css');
	mix.babel('resources/assets/css/admin/dataTables.bootstrap4.css','public/css/admin/dataTables.bootstrap4.css');
	//js
	mix.babel('resources/assets/js/admin/fastclick.js','public/js/admin/fastclick.js');
	mix.babel('resources/assets/js/admin/jquery.slimscroll.js','public/js/admin/jquery.slimscroll.js');
	mix.babel('resources/assets/js/admin/dataTables.bootstrap4.js','public/js/admin/dataTables.bootstrap4.js');
	mix.babel('resources/assets/js/admin/bootstrap.bundle.js','public/js/admin/bootstrap.bundle.js');
	mix.babel('resources/assets/js/admin/demo.js','public/js/admin/demo.js');
	mix.babel('resources/assets/js/admin/jquery.js','public/js/admin/jquery.js');
	mix.babel('resources/assets/js/admin/adminlte.js','public/js/admin/adminlte.js');
	mix.babel('resources/assets/js/admin/product.js','public/js/admin/product.js');
	mix.babel('resources/assets/js/admin/vendor.js','public/js/admin/vendor.js');
	mix.babel('resources/assets/js/admin/color.js','public/js/admin/color.js');
	mix.babel('resources/assets/js/admin/category.js','public/js/admin/category.js');
	mix.babel('resources/assets/js/admin/size.js','public/js/admin/size.js');
	mix.babel('resources/assets/js/admin/validate.js','public/js/admin/validate.js');
	mix.copy('resources/assets/img/','public/images/',false);
	if (mix.inProduction()) {
		mix.version();
	}
