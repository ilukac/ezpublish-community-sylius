<?php
// URI:       extension/ezdemo/design/ezdemo/templates/canonical_link.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/canonical_link.tpl
// Timestamp: 1437211071 (Sat Jul 18 11:17:51 CEST 2015)
$oldSetArray_f7522fe165859aad473a4592b1496dd9 = isset( $setArray ) ? $setArray : array();
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

unset( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161 );
unset( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161 );
$elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_1611 = compiledFetchAttribute( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161, 'canonical_language_url' );
unset( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161 );
$elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161 = $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_1611;
if (! isset( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161 ) ) $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161 = NULL;
while ( is_object( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161 ) and method_exists( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161, 'templateValue' ) )
    $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161 = $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'canonical_url' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    
    <link rel="canonical" href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var2 = compiledFetchAttribute( $var1, 'canonical_url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, 'full' );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
}
elseif ( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161 )
{
$text .= '    
    <link rel="canonical" href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var2 = compiledFetchAttribute( $var1, 'canonical_language_url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_cd2ce1e4e1dc14c6277f1b8cd87333a6_161 );


$setArray = $oldSetArray_f7522fe165859aad473a4592b1496dd9;
$tpl->Level--;
?>
