<?php

$properties = array();

$tmp = array(
	'id' => array(
		'type' => 'numberfield'
		,'value' => ''
	)
	,'field' => array(
		'type' => 'numberfield'
		,'value' => 'pagetitle'
	)
	,'prepareTVs' => array(
		'type' => 'textfield'
		,'value' => '1'
	)
	,'processTVs' => array(
		'type' => 'textfield'
		,'value' => ''
	)
	,'where' => array(
		'type' => 'textfield'
		,'value' => ''
	)
	,'context' => array(
		'type' => 'textfield'
		,'desc' => 'pdotools_prop_field_context'
		,'value' => ''
	)
	,'top' => array(
		'type' => 'numberfield'
		,'value' => ''
	)
	,'topLevel' => array(
		'type' => 'numberfield'
		,'value' => ''
	)

);

foreach ($tmp as $k => $v) {
	$properties[] = array_merge(array(
			'name' => $k
			,'desc' => 'pdotools_prop_'.$k
			,'lexicon' => 'pdotools:properties'
		), $v
	);
}

return $properties;