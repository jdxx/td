<?php
class Application_View_Helper_ListEntry extends Zend_View_Helper_Abstract
{
    public function ListEntry($type, $troopType, $castleID, $castleDate, $castleTime, $castleColor, $castleCurrent, $typeUnit)
    {
//         $request = Zend_Controller_Front::getInstance()->getRequest();
    	$html = '<td class="' . $troopType . '">';
    	$html = $html . '<input name="' . $type . $castleID . '" id="' . $type . $castleID . '" type="checkbox" data-wrapper-class="td-margin0">';
    	$html = $html . '<label for="' . $type . $castleID . '" ';
    	$html = $html . 'title="' . $castleDate . ' / ' . $castleCurrent . ' ' . $typeUnit . '" ';
    	$html = $html . 'class="resource-color-' . $castleColor . '">';
    	$html = $html . $castleTime;
    	$html = $html . '</label>';
    	$html = $html . '</td>';
    	
        return $html;   
    }
}