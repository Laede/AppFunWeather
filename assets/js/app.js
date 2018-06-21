var $ = require('jquery');

var greet = require('./greet');
require('bootstrap-sass');
require('../css/app.scss');


$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});