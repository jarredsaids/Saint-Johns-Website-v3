jQuery(document).ready(function ($) {

    var dt = new Date();
    var m = dt.getMonth() + 1;
    var dy = dt.getDate();
    var y = dt.getFullYear();

    /**  TEST DATES  **/
    // var m = 5;
    // var dy = 25;
    // var y = 2026;

    var color = "#6a8fab";
    var alt_color = "#486d89";
    var backstretch = 'images/backgrounds/sun.jpg';

    if (screen.width > 80) { // mobile performance - no full image background if device not capable of showing media query width 480px
        if (m == 7 && dy == 4) {
            color = '#ff0c00';
            alt_color = '#dd0a00';
            backstretch = 'images/backgrounds/fireworks.jpg';
        } else if (m == 10 && dy == 31) {
            color = '#ff9400';
            alt_color = '#dd7200';
            backstretch = 'images/backgrounds/pumpkin.jpg';
        } else if (m == 11) {
            if (dy > 19 && dy < 27) {
                color = '#995901';
                alt_color = '#773700';
                backstretch = 'images/backgrounds/thanksgiving.jpg';
            }else if( dy == 11){
                color = '#04147a';
                alt_color = '#D0312D';
                backstretch = 'images/backgrounds/veterans.jpg';
            }
        } else if (m == 12) {
            if (dy > 19) {
                color = '#016000';
                alt_color = '#004000';
                backstretch = 'images/backgrounds/christmas.jpg';
            }
        } else if (m == 1 && dy == 1) {
            backstretch = 'images/backgrounds/newyear.jpeg';
            color = '#00137f';
            alt_color = '#00015d';
        } else if (m == 2 && dy == 2) {
            backstretch = 'images/backgrounds/groundhog.jpeg';
            color = '#795C34';
            alt_color = '#4B371C';
        } else if (m == 2 && dy == 14) {
            color = '#af0f0f';
            alt_color = '#8d0d0d';
            backstretch = 'images/backgrounds/valentine.jpg';
        } else if (m == 6 && dy == 14) {
            color = '#04147a';
            alt_color = '#020258';
            backstretch = 'images/backgrounds/flag.jpg';
        } else if (y == 2021) {
            if (m == 4 && dy == 4) {
                color = '#f7aaed';
                alt_color = '#d588cb';
                backstretch = 'images/backgrounds/easter.jpg';
            }
        } else if (y == 2022) {
            if (m == 4 && dy == 17) {
                color = '#f7aaed';
                alt_color = '#d588cb';
                backstretch = 'images/backgrounds/easter.jpg';
            }else if (m == 5 && dy == 30) {
                color = '#595959';
                alt_color = '#262626';
                backstretch = 'images/backgrounds/memorial.jpg';
            }
        } else if (y == 2023) {
            if (m == 4 && dy == 9) {
                color = '#f7aaed';
                alt_color = '#d588cb';
                backstretch = 'images/backgrounds/easter.jpg';
            }else if (m == 5 && dy == 29) {
                color = '#595959';
                alt_color = '#262626';
                backstretch = 'images/backgrounds/memorial.jpg';
            }
        } else if (y == 2024) {
            if (m == 3 && dy == 31) {
                color = '#f7aaed';
                alt_color = '#d588cb';
                backstretch = 'images/backgrounds/easter.jpg';
            }else if (m == 5 && dy == 27) {
                color = '#595959';
                alt_color = '#262626';
                backstretch = 'images/backgrounds/memorial.jpg';
            }
        } else if (y == 2025) {
            if (m == 4 && dy == 20) {
                color = '#f7aaed';
                alt_color = '#d588cb';
                backstretch = 'images/backgrounds/easter.jpg';
            }else if (m == 5 && dy == 26) {
                color = '#595959';
                alt_color = '#262626';
                backstretch = 'images/backgrounds/memorial.jpg';
            }
        } else if (y == 2026) {
            if (m == 4 && dy == 5) {
                color = '#f7aaed';
                alt_color = '#d588cb';
                backstretch = 'images/backgrounds/easter.jpg';
            }else if (m == 5 && dy == 25) {
                color = '#595959';
                alt_color = '#262626';
                backstretch = 'images/backgrounds/memorial.jpg';
            }


        }
    }
    jQuery.backstretch(backstretch);
    document.getElementById("insideLabel").innerHTML = '<style type="text/css"> .badge-secondary, .view-cap, .date-label, .day, .agenda-scrollboxBoundary, .view-container-border {background:  ' + color + ' !important;} .jumbotron, .navbar-toggler {background-color:  ' + alt_color + ' !important;}</style>';
    document.getElementById("menuStyle").innerHTML = '<style type="text/css"> .nav-link:hover {color: '+ alt_color +' !important;} .nav-link {color: white;!important}  .navbar, .dropdown-item, .dropdown-menu {color: white !important; background-color: ' + color + ' !important;} .dropdown-item:hover{background-color:  ' + alt_color + ' !important;}</style>';
    document.getElementById("bday-style").innerHTML = '<style type="text/css"> .alert {margin: auto; background-color:  ' + color + ' !important; padding: 10px; color: white !important;} .close {margin-left: 10px; color: white;!important font-weight: bold; float: right; font-size: 22px; line-height: 20px; cursor: pointer; transition: 0.3s; } .close:hover {color: black !important;} #bday-table {width: 100%; color: white;} .bday-header {background-color: ' + alt_color + ' !important; color: white !important; font-weight: bold; text-align: center;}</style>';
});
