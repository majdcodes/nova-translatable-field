Nova.booting((Vue, router, store) => {
	Vue.config.productionTip = false;
	Vue.config.devtools = true;

	// Translatable field
    Vue.component('index-translatable-field', require('./components/TranslatableField/IndexField'))
    Vue.component('detail-translatable-field', require('./components/TranslatableField/DetailField'))
    Vue.component('form-translatable-field', require('./components/TranslatableField/FormField'))

	// Language activator
	Vue.component('index-language-activator', require('./components/LanguageActivator/IndexField'))
	Vue.component('detail-language-activator', require('./components/LanguageActivator/DetailField'))
	Vue.component('form-language-activator', require('./components/LanguageActivator/FormField'))

	Vue.prototype.$bus = new Vue()
})
