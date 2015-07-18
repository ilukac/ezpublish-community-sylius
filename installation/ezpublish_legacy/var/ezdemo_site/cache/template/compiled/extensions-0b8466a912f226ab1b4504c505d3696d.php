<?php
// URI:       design:setup/extensions.tpl
// Filename:  design/admin/templates/setup/extensions.tpl
// Timestamp: 1437139925 (Fri Jul 17 15:32:05 CEST 2015)
$oldSetArray_3e77f389ffaed4d9e9da28eeb958d57f = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'warning_messages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['warning_messages'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'warning_messages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['warning_messages'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond3Data = array( 'value' => $if_cond3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond3Data, false, false );
$if_cond3 = $if_cond3Data['value'];
unset( $if_cond3Data );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) >= ( 1 ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="message-warning">
    <h2><span class="time">[';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
$var1 = time();
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ']</span> Problems detected during autoload generation:</h2>
    <ul>
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_5c7fe9fd4786f2216d84ea7066cf92d3_1 ) ) $fe_variable_stack_5c7fe9fd4786f2216d84ea7066cf92d3_1 = array();
$fe_variable_stack_5c7fe9fd4786f2216d84ea7066cf92d3_1[] = compact( 'fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1', 'fe_array_keys_5c7fe9fd4786f2216d84ea7066cf92d3_1', 'fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1', 'fe_n_items_processed_5c7fe9fd4786f2216d84ea7066cf92d3_1', 'fe_i_5c7fe9fd4786f2216d84ea7066cf92d3_1', 'fe_key_5c7fe9fd4786f2216d84ea7066cf92d3_1', 'fe_val_5c7fe9fd4786f2216d84ea7066cf92d3_1', 'fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1', 'fe_max_5c7fe9fd4786f2216d84ea7066cf92d3_1', 'fe_reverse_5c7fe9fd4786f2216d84ea7066cf92d3_1', 'fe_first_val_5c7fe9fd4786f2216d84ea7066cf92d3_1', 'fe_last_val_5c7fe9fd4786f2216d84ea7066cf92d3_1' );
unset( $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1 );
unset( $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1 );
$fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'warning_messages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['warning_messages'] : null;
if (! isset( $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1 ) ) $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1 = NULL;
while ( is_object( $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1 ) and method_exists( $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1, 'templateValue' ) )
    $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1 = $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1->templateValue();

$fe_array_keys_5c7fe9fd4786f2216d84ea7066cf92d3_1 = is_array( $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1 ) ? array_keys( $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1 ) : array();
$fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1 = count( $fe_array_keys_5c7fe9fd4786f2216d84ea7066cf92d3_1 );
$fe_n_items_processed_5c7fe9fd4786f2216d84ea7066cf92d3_1 = 0;
$fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1 = 0;
$fe_max_5c7fe9fd4786f2216d84ea7066cf92d3_1 = $fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1 - $fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1;
$fe_reverse_5c7fe9fd4786f2216d84ea7066cf92d3_1 = false;
if ( $fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1 < 0 || $fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1 >= $fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1 )
{
    $fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1 = ( $fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1 < 0 ) ? 0 : $fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1;
    if ( $fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1 || $fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1'. Array count: $fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1");   
}
}
if ( $fe_max_5c7fe9fd4786f2216d84ea7066cf92d3_1 < 0 || $fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1 + $fe_max_5c7fe9fd4786f2216d84ea7066cf92d3_1 > $fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1 )
{
    if ( $fe_max_5c7fe9fd4786f2216d84ea7066cf92d3_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_5c7fe9fd4786f2216d84ea7066cf92d3_1");
    $fe_max_5c7fe9fd4786f2216d84ea7066cf92d3_1 = $fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1 - $fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1;
}
if ( $fe_reverse_5c7fe9fd4786f2216d84ea7066cf92d3_1 )
{
    $fe_first_val_5c7fe9fd4786f2216d84ea7066cf92d3_1 = $fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1 - 1 - $fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1;
    $fe_last_val_5c7fe9fd4786f2216d84ea7066cf92d3_1  = 0;
}
else
{
    $fe_first_val_5c7fe9fd4786f2216d84ea7066cf92d3_1 = $fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1;
    $fe_last_val_5c7fe9fd4786f2216d84ea7066cf92d3_1  = $fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1 - 1;
}
// foreach
for ( $fe_i_5c7fe9fd4786f2216d84ea7066cf92d3_1 = $fe_first_val_5c7fe9fd4786f2216d84ea7066cf92d3_1; $fe_n_items_processed_5c7fe9fd4786f2216d84ea7066cf92d3_1 < $fe_max_5c7fe9fd4786f2216d84ea7066cf92d3_1 && ( $fe_reverse_5c7fe9fd4786f2216d84ea7066cf92d3_1 ? $fe_i_5c7fe9fd4786f2216d84ea7066cf92d3_1 >= $fe_last_val_5c7fe9fd4786f2216d84ea7066cf92d3_1 : $fe_i_5c7fe9fd4786f2216d84ea7066cf92d3_1 <= $fe_last_val_5c7fe9fd4786f2216d84ea7066cf92d3_1 ); $fe_reverse_5c7fe9fd4786f2216d84ea7066cf92d3_1 ? $fe_i_5c7fe9fd4786f2216d84ea7066cf92d3_1-- : $fe_i_5c7fe9fd4786f2216d84ea7066cf92d3_1++ )
{
$fe_key_5c7fe9fd4786f2216d84ea7066cf92d3_1 = $fe_array_keys_5c7fe9fd4786f2216d84ea7066cf92d3_1[$fe_i_5c7fe9fd4786f2216d84ea7066cf92d3_1];
$fe_val_5c7fe9fd4786f2216d84ea7066cf92d3_1 = $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1[$fe_key_5c7fe9fd4786f2216d84ea7066cf92d3_1];
$vars[$rootNamespace]['warning'] = $fe_val_5c7fe9fd4786f2216d84ea7066cf92d3_1;
$text .= '        <li><p>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'warning', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['warning'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = nl2br( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p></li>
    ';
$fe_n_items_processed_5c7fe9fd4786f2216d84ea7066cf92d3_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_5c7fe9fd4786f2216d84ea7066cf92d3_1 ) ) extract( array_pop( $fe_variable_stack_5c7fe9fd4786f2216d84ea7066cf92d3_1 ) );

else
{

unset( $fe_array_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_array_keys_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_n_items_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_n_items_processed_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_i_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_key_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_val_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_offset_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_max_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_reverse_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_first_val_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_last_val_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

unset( $fe_variable_stack_5c7fe9fd4786f2216d84ea7066cf92d3_1 );

}

// foreach ends
$text .= '    </ul>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
<form name="extensionform" method="post" action="/administration/setup/extensions">

<div class="context-block">

<div class="box-header">

<h1 class="context-title">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'available_extension_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['available_extension_array'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%extension_count' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Available extensions (%extension_count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h1>

<div class="header-mainline"></div>

</div>

<div class="box-content">
';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'available_extension_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['available_extension_array'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<table class="list" cellspacing="0">
<tr>
    <th class="tight"><img src="/design/admin/images/toggle-button-16x16.gif" width="16" height="16" alt="Invert selection." title="Toggle all." onclick="ezjs_toggleCheckboxes( document.extensionform, \'ActiveExtensionList[]\' ); return false;"/></th>
    <th>Name</th>
</tr>';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'available_extension_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['available_extension_array'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$sequence = array (
  0 => 'bglight',
  1 => 'bgdark',
);
if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['Extensions'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['Extensions'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

$text .= '<tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Extensions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Extensions'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    
    <td><input type="checkbox" name="ActiveExtensionList[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Extensions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Extensions'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'selected_extension_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['selected_extension_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Extensions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Extensions'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, $if_cond2 ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( $if_cond2, $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' title="';
unset( $var );
$var = 'Activate or deactivate extension. Use the &quot;Update&quot; button to apply the changes.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" /></td>
    
    <td>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Extensions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Extensions'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</td>
</tr>';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
$text .= '</table>';
}
else
{

unset( $show );

$text .= '<div class="block">
    <p>There are no available extensions.</p>
</div>';
}

$text .= '
</div>

<div class=\'block\'>
<div class="controlbar">

<div class="block">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'available_extension_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['available_extension_array'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input class="button" type="submit" name="ActivateExtensionsButton" value="Update" title="Click this button to store changes if you have modified the status of the checkboxes above." />';
}
else
{
$text .= '    <input class="button-disabled" type="submit" name="ActivateExtensionsButton" value="Update" disabled="disabled" />';
}
unset( $if_cond );
// if ends

$text .= '    <input class="button" type="submit" name="GenerateAutoloadArraysButton" value="Regenerate autoload arrays for extensions" title="Click this button to regenerate the autoload arrays used by the system for extensions." />
</div>

</div>
</div>

</div>

</form>



<script type="text/javascript">
$(document).ready(function() {
    var initialExtensionSettings = {};
    var extensionChecks = jQuery(\'[name=extensionform] :checkbox\');

    function styleUpdateButton() {
        var b = jQuery(\'[name=ActivateExtensionsButton]:first\');
        jQuery(extensionChecks).each( function(){
            if (initialExtensionSettings[this.value] !== this.checked) {
                b.removeClass(\'button\').addClass(\'defaultbutton\');
                return false;
            } else {
                b.removeClass(\'defaultbutton\').addClass(\'button\');
            }
        });
    }

    jQuery(extensionChecks).each( function(){
        initialExtensionSettings[this.value] = this.checked;
    }).change(function(){styleUpdateButton();});
});
</script>

';

$setArray = $oldSetArray_3e77f389ffaed4d9e9da28eeb958d57f;
$tpl->Level--;
?>
