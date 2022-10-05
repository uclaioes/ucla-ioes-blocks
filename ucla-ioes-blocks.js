wp.domReady( function () {
    wp.blocks.unregisterBlockType( 'core/archives' );
    wp.blocks.unregisterBlockType( 'core/calendar' );
    wp.blocks.unregisterBlockType( 'core/categories' );
    wp.blocks.unregisterBlockType( 'core/columns' );
    wp.blocks.unregisterBlockType( 'core/latest-comments' );
    wp.blocks.unregisterBlockType( 'core/media-text' );
    wp.blocks.unregisterBlockType( 'core/page-list' );
    wp.blocks.unregisterBlockType( 'core/shortcode' );
    wp.blocks.unregisterBlockType( 'core/tag-cloud' );
    wp.blocks.unregisterBlockType( 'core/verse' );
} );
