
require.config({
	// baseUrl: 'js/',
	paths: {
		'vue': 'bower_components/vue/dist/vue',
		'qwest': 'bower_components/qwest/qwest.min',
		'ramda': 'bower_components/ramda/dist/ramda.min',
		'bacon': 'bower_components/bacon/dist/Bacon.min',
		'components': '../components',
		'text': 'bower_components/text/text',
	},
});

require(['app']);


