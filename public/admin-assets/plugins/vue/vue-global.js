// --- Global Mixin --- //
Vue.mixin({
    methods: {

    }
});

// --- Global Filters ---- //
Vue.filter('capitalize', function (value) {
    if (!value) return '';
    value = value.toString();
    return value.charAt(0).toUpperCase() + value.slice(1)
});

Vue.filter('slugify', function (value) {
    return value.toString().toLowerCase().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '').replace(/\-\-+/g, '-').replace(/^-+/, '').replace(/-+$/, '');
});

Vue.filter('date', function (value, argument) {
    return moment(value).format(argument);
});

Vue.filter('str_limit', function (string, value) {
    if (string) {
        if (string.length <= value)
            return string;

        return string.substring(0, value) + '...';
    }
    return string;
});
