
elixir.bannerCentered={};elixir.bannerCentered=(function(){var jQuery=elixir.jQuery;var $=jQuery;var $elixir=jQuery.noConflict();function bannerCenteredFunction(){$elixir('#banner').addClass('row').css({'margin-bottom':'20px'});$elixir('#banner_columns').addClass('large-12, columns');$elixir('.banner_image').css({'border-radius':'4px'});banner_height=$elixir('#banner img').height();$elixir('#alignment_wrapper .items li .outerContainer').css({'height':banner_height});}
$elixir(window).load(function(){bannerCenteredFunction();});})(elixir.bannerCentered);