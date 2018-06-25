var $ = require('jquery');

require('./smoothScroll');
require('./upButton');
require('bootstrap-sass');
require('../scss/app.scss');


$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});