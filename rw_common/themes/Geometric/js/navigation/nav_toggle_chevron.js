
elixir.mobileNavigationToggleIcon={};elixir.mobileNavigationToggleIcon=(function(){var jQuery=elixir.jQuery;var $=jQuery;var $elixir=jQuery.noConflict();function mobileNavigationToggleIconFunction(){$elixir('#mobile_navigation_toggle_icon').addClass('fa-angle-down');$elixir('#mobile_navigation_toggle').click(function(){$elixir('#mobile_navigation').slideToggle(250);$elixir(this).find('i').toggleClass('fa-angle-down').toggleClass('fa-angle-up');});}
$elixir(document).ready(function(){mobileNavigationToggleIconFunction();});})(elixir.mobileNavigationToggleIcon);