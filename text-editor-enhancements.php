<?php
/*
Plugin Name: Text Editor Enhancements
Description: How to add buttons to the text editor view.  Adds a simple gallery button
Version: 0.1
Author: Katherine Semel
*/

if ( ! class_exists( 'Text_Editor_Enhancements' ) ) {
    
    class Text_Editor_Enhancements {

        function Text_Editor_Enhancements() {
            if ( is_admin() ) {
                if ( strpos( strtolower( $_SERVER[ 'REQUEST_URI' ] ), 'post.php' ) !== false ) {
                    
                    // Add buttons HTML editor toolbars
                    add_action( 'admin_print_footer_scripts', array( $this, 'add_html_editor_buttons' ), 100 );
                }
            }
        }

        function add_html_editor_buttons() {
            // See http://core.svn.wordpress.org/trunk/wp-includes/js/quicktags.js for the docs on Quick Tags
            ?>
            <script type="text/javascript">
                // QTags.addButton( id, display, tagStart, tagEnd, access, '', -1 );
                QTags.addButton( 'gallery','gallery','[gallery]', '', 'n', '', -1 );
            </script>
            <?php
        }
    }

    $Text_Editor_Enhancements = new Text_Editor_Enhancements();
}
    
