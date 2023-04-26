jQuery('.wp-block-rss__item-title a').click(function () {
    jQuery(this).attr('target', '_blank').attr('rel', 'noreferrer noopener');
});