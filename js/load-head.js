/* 
 *  Author: Anthea Jung
 *  Created: 10/20/2015
 *  Last modified: 11/18/2015
 *  
 *  This page provides common head tag elements to all pages
 *  To add a new js/css/meta, concatenate a new string to data */

var data =
        "<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0'/>"
        +
        "<link rel='stylesheet' type='text/css' href='/elle-investments/css/main.css'/>"
        +
        "<link id='navigationId' rel='stylesheet' type='text/css'  href='/elle-investments/css/navigation.css'/>"
        +
        "<link rel='stylesheet' type='text/css' href='/elle-investments/css/footer.css'/>"
        +
        "<link class='/elle-investments/responsive_css'>"
        +
        "<link rel='stylesheet' type='text/css'  media='only screen and (min-width:737px) and (max-width:880px)' href='/elle-investments/css/screen_layout_medium.css'/>"
        +
        "<link rel='stylesheet' type='text/css'  media='only screen and (min-width:50px) and (max-width:736px)' href='/elle-investments/css/screen_layout_small.css'/>"
        +
        "<link rel='stylesheet' type='text/css'  media='only screen and (max-height:440px)' href='/elle-investments/css/screen_layout_small.css'/>"
        +
        "<script src='/elle-investments/js/jquery.cookie.js'></script>"
        +
        "<script src='/elle-investments/js/plus-minus.js'></script>";


// adds the string above into head tag
$('head').append(data);