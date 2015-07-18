<?php
// URI:       extension/ezflow/design/standard/templates/parts/zone_block_top.tpl
// Filename:  extension/ezflow/design/standard/templates/parts/zone_block_top.tpl
// Timestamp: 1437211069 (Sat Jul 18 11:17:49 CEST 2015)
$oldSetArray_32a1f7116d19dbc62f2135e68108f74d = isset( $setArray ) ? $setArray : array();
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

$text .= '
';

$setArray = $oldSetArray_32a1f7116d19dbc62f2135e68108f74d;
$tpl->Level--;
?>
