<?php
// URI:       design/admin/templates/popupmenu/popup_bookmark_menu.tpl
// Filename:  design/admin/templates/popupmenu/popup_bookmark_menu.tpl
// Timestamp: 1437139925 (Fri Jul 17 15:32:05 CEST 2015)
$oldSetArray_500c86a49f3a42a27e83064362ee8432 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/ezdemo_site/cache/template/compiled/common.php' );

$text .= '<!-- Bookmark popup menu -->
<script type="text/javascript">
menuArray[\'BookmarkMenu\'] = { \'depth\': 0, \'headerID\': \'bookmark-header\' };
menuArray[\'BookmarkMenu\'][\'elements\'] = {};
menuArray[\'BookmarkMenu\'][\'elements\'][\'bookmark-view\'] = { \'url\': "/administration/content/view/full/%nodeID%" };
menuArray[\'BookmarkMenu\'][\'elements\'][\'bookmark-edit\'] = { \'url\': "/administration/content/edit/%objectID%" };
</script>

<div class="popupmenu" id="BookmarkMenu">
    <div class="popupmenuheader"><h3 id="bookmark-header">XXX</h3>

        <div class="break"></div>
    </div>
    <a id="bookmark-view" href="#" onmouseover="ezpopmenu_mouseOver( \'BookmarkMenu\' )">View</a>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'multilingual_site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['multilingual_site'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <a id="bookmark-edit-in" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'EditSubmenu\', \'bookmark-edit-in\' ); return false;">Edit in</a>';
}
else
{
$text .= '    <a id="bookmark-edit" href="#" onmouseover="ezpopmenu_mouseOver( \'BookmarkMenu\' )">Edit</a>';
}
unset( $if_cond );
// if ends

$text .= '    <hr />
    <a id="bookmark-remove" href="#" onmouseover="ezpopmenu_mouseOver( \'BookmarkMenu\' )"
        onclick="ezpopmenu_submitForm( \'menu-form-removebookmark\' ); return false;">Remove bookmark</a>

    
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_7148f3ee5b36ee2661bb77851cf1dd14_41 ) ) $fe_variable_stack_7148f3ee5b36ee2661bb77851cf1dd14_41 = array();
$fe_variable_stack_7148f3ee5b36ee2661bb77851cf1dd14_41[] = compact( 'fe_array_7148f3ee5b36ee2661bb77851cf1dd14_41', 'fe_array_keys_7148f3ee5b36ee2661bb77851cf1dd14_41', 'fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41', 'fe_n_items_processed_7148f3ee5b36ee2661bb77851cf1dd14_41', 'fe_i_7148f3ee5b36ee2661bb77851cf1dd14_41', 'fe_key_7148f3ee5b36ee2661bb77851cf1dd14_41', 'fe_val_7148f3ee5b36ee2661bb77851cf1dd14_41', 'fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41', 'fe_max_7148f3ee5b36ee2661bb77851cf1dd14_41', 'fe_reverse_7148f3ee5b36ee2661bb77851cf1dd14_41', 'fe_first_val_7148f3ee5b36ee2661bb77851cf1dd14_41', 'fe_last_val_7148f3ee5b36ee2661bb77851cf1dd14_41' );
$fe_array_7148f3ee5b36ee2661bb77851cf1dd14_41 = array (
);
$fe_array_keys_7148f3ee5b36ee2661bb77851cf1dd14_41 = is_array( $fe_array_7148f3ee5b36ee2661bb77851cf1dd14_41 ) ? array_keys( $fe_array_7148f3ee5b36ee2661bb77851cf1dd14_41 ) : array();
$fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41 = count( $fe_array_keys_7148f3ee5b36ee2661bb77851cf1dd14_41 );
$fe_n_items_processed_7148f3ee5b36ee2661bb77851cf1dd14_41 = 0;
$fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41 = 0;
$fe_max_7148f3ee5b36ee2661bb77851cf1dd14_41 = $fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41 - $fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41;
$fe_reverse_7148f3ee5b36ee2661bb77851cf1dd14_41 = false;
if ( $fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41 < 0 || $fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41 >= $fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41 )
{
    $fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41 = ( $fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41 < 0 ) ? 0 : $fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41;
    if ( $fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41 || $fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41'. Array count: $fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41");   
}
}
if ( $fe_max_7148f3ee5b36ee2661bb77851cf1dd14_41 < 0 || $fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41 + $fe_max_7148f3ee5b36ee2661bb77851cf1dd14_41 > $fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41 )
{
    if ( $fe_max_7148f3ee5b36ee2661bb77851cf1dd14_41 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_7148f3ee5b36ee2661bb77851cf1dd14_41");
    $fe_max_7148f3ee5b36ee2661bb77851cf1dd14_41 = $fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41 - $fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41;
}
if ( $fe_reverse_7148f3ee5b36ee2661bb77851cf1dd14_41 )
{
    $fe_first_val_7148f3ee5b36ee2661bb77851cf1dd14_41 = $fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41 - 1 - $fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41;
    $fe_last_val_7148f3ee5b36ee2661bb77851cf1dd14_41  = 0;
}
else
{
    $fe_first_val_7148f3ee5b36ee2661bb77851cf1dd14_41 = $fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41;
    $fe_last_val_7148f3ee5b36ee2661bb77851cf1dd14_41  = $fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41 - 1;
}
// foreach
for ( $fe_i_7148f3ee5b36ee2661bb77851cf1dd14_41 = $fe_first_val_7148f3ee5b36ee2661bb77851cf1dd14_41; $fe_n_items_processed_7148f3ee5b36ee2661bb77851cf1dd14_41 < $fe_max_7148f3ee5b36ee2661bb77851cf1dd14_41 && ( $fe_reverse_7148f3ee5b36ee2661bb77851cf1dd14_41 ? $fe_i_7148f3ee5b36ee2661bb77851cf1dd14_41 >= $fe_last_val_7148f3ee5b36ee2661bb77851cf1dd14_41 : $fe_i_7148f3ee5b36ee2661bb77851cf1dd14_41 <= $fe_last_val_7148f3ee5b36ee2661bb77851cf1dd14_41 ); $fe_reverse_7148f3ee5b36ee2661bb77851cf1dd14_41 ? $fe_i_7148f3ee5b36ee2661bb77851cf1dd14_41-- : $fe_i_7148f3ee5b36ee2661bb77851cf1dd14_41++ )
{
$fe_key_7148f3ee5b36ee2661bb77851cf1dd14_41 = $fe_array_keys_7148f3ee5b36ee2661bb77851cf1dd14_41[$fe_i_7148f3ee5b36ee2661bb77851cf1dd14_41];
$fe_val_7148f3ee5b36ee2661bb77851cf1dd14_41 = $fe_array_7148f3ee5b36ee2661bb77851cf1dd14_41[$fe_key_7148f3ee5b36ee2661bb77851cf1dd14_41];
$vars[$rootNamespace]['template'] = $fe_val_7148f3ee5b36ee2661bb77851cf1dd14_41;
$text .= '        ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'template',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 26,
    1 => 8,
    2 => 1638,
  ),
  1 => 
  array (
    0 => 26,
    1 => 49,
    2 => 1679,
  ),
  2 => 'design/admin/templates/popupmenu/popup_bookmark_menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
$fe_n_items_processed_7148f3ee5b36ee2661bb77851cf1dd14_41++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_7148f3ee5b36ee2661bb77851cf1dd14_41 ) ) extract( array_pop( $fe_variable_stack_7148f3ee5b36ee2661bb77851cf1dd14_41 ) );

else
{

unset( $fe_array_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_array_keys_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_n_items_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_n_items_processed_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_i_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_key_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_val_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_offset_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_max_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_reverse_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_first_val_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_last_val_7148f3ee5b36ee2661bb77851cf1dd14_41 );

unset( $fe_variable_stack_7148f3ee5b36ee2661bb77851cf1dd14_41 );

}

// foreach ends
$text .= '</div>


<form id="menu-form-removebookmark" method="post" action="/administration/content/bookmark">
  <input type="hidden" name="DeleteIDArray[]" value="%bookmarkID%" />
  <input type="hidden" name="RemoveButton" value="x" />
  <input type="hidden" name="NeedRedirectBack" value="x" />
</form>';

$setArray = $oldSetArray_500c86a49f3a42a27e83064362ee8432;
$tpl->Level--;
?>