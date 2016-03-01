var elixir = require('laravel-elixir');
require('laravel-elixir-vueify');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

	var nodePath = '../../node_modules';

    mix.less('nlpt.less', 'resources/assets/css')
    .browserify('vue.js', 'resources/assets/js/compiledVue.js')
    .scripts([
		nodePath + '/jquery/dist/jquery.js',
		nodePath + '/bootstrap-less/js/bootstrap.js',
		nodePath + '/jquery.easing/jquery.easing.js',
		'js/nlpt.js', 
	    'js/compiledVue.js',
	    'js/scrolling-nav.js',
	], 'public/js/nlpt.js', 'resources/assets')
	.styles([
	    'css/nlpt.css',
	    'css/scrolling-nav.css'
	], 'public/css/nlpt.css', 'resources/assets');

	mix.version(['css/nlpt.css', 'js/nlpt.js']);

	mix.copy('resources/images', 'public/images');

});
