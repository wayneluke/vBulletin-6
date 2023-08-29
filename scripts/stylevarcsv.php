<?php
/*
 * Goal: Produce a csv for analysis. Find out how many stylevars are using color x. Depth of referenced stylevars.
 * And other things I can't think of.
 *
 * Basically, I can't easily search or use the vbulletin-style.xml file for stylevar definitions. Coupled with the
 * fact that stylevars are stored as serialized arrays makes going through the database lousy, too. Plus, with stylevars
 * as values, the final values would have to be fetched in a roundabout way. Hence this should provide a simple,
 * tab delimited csv which can be loaded into your favorite spread sheet program to filter/search/transform/etc that shows
 * you what the actual value of something is and what its final value should be. I figure it's also better than jumping
 * around in the admincp.
 */

// ######################## SET PHP ENVIRONMENT ###########################
error_reporting(error_reporting() & ~E_NOTICE);

// ##################### DEFINE IMPORTANT CONSTANTS #######################
define('CVS_REVISION', '$RCSfile$ - $Revision: 107437 $');

// ########################## REQUIRE BACK-END ############################

echo "Go!\n";

chdir(dirname(__FILE__) . '/../..');
define('DIR', getcwd());

$stylePath = DIR . '/install/vbulletin-style.xml';
$outputPath = DIR . '/../stylevar_output.txt';

require_once(DIR . '/vb/vb.php');
vB::init();

$output = array();

$xmlobj = new vB_XML_Parser(false, $stylePath, true);
$styleArr =  $xmlobj->parse();

$stylevarDfns = array();
foreach ($styleArr['stylevardfns']['stylevargroup'] AS $stylevarGroup) {
	$groupName = $stylevarGroup['name'];

	if (!isset($stylevarGroup['stylevar'][0]))
	{
		$stylevarGroup['stylevar'] = array($stylevarGroup['stylevar']);
	}

	foreach ($stylevarGroup['stylevar'] AS $stylevar)
	{
		$stylevarDfns[$stylevar['name']] = array(
			'name' => $stylevar['name'],
			'group' => $groupName,
			'datatype' => $stylevar['datatype'],
		);
	}
}
unset($stylevarGroup, $groupName, $stylevar);


$hasStylevarPart = array();
$count = 0;
$stylevarCache = array();
foreach ($styleArr['stylevars']['stylevar'] AS $stylevar)
{
	$parts = unserialize(base64_decode($stylevar['value'][0])); // Apparently, an empty node still has an empty value, which gets appended to the value attribute

	if ($parts === false)
	{
		$parts = array(
			'none' => false,
			'stylevar_none' => false
		);
	}

	$stylevarCache[$stylevar['name']] = $parts;

	foreach ($parts AS $originalPart => $originalValue)
	{
		if (strpos($originalPart, 'stylevar_') === 0)
		{
			continue;
		}

		$part = $originalPart;
		$stylevarPart = 'stylevar_' . $originalPart;
		$value = $parts[$part];

		if (!isset($parts[$stylevarPart]))
		{
			$stylevarPart = '';
			$stylevarValue = '';
		}
		else
		{
			$stylevarValue = $parts[$stylevarPart];
		}

		$finalValue = $value;
		if (!empty($stylevarValue) AND empty($value))
		{
			$hasStylevarPart[] = $count;
			$finalValue = '';
		}

		$output[] = array_merge($stylevarDfns[$stylevar['name']], array(
			'part' => $part,
			'actual_value' => $value,
			'stylevar_part' => $stylevarPart,
			'stylevar_value' => $stylevarValue,
			'final_value' => $finalValue,
			'depth' => 0,
		));
		$count++;
	}
	$stylevarDfns[$stylevar['name']];
}

foreach ($hasStylevarPart AS $index)
{
	$valueAndDepth = fetch_actual_value($stylevarCache, $output[$index]['stylevar_value']);
	$output[$index]['final_value'] = $valueAndDepth['value'];
	$output[$index]['depth'] = $valueAndDepth['depth'];
}


array_unshift($output, array(
	'Stylevar',
	'Group',
	'Datatype',
	'Part',
	'Actual Value',
	'Stylevar Part',
	'Stylevar Value',
	'Final Value',
	'Depth',

));
$outputHandle = fopen($outputPath, 'w');
if ($outputHandle === false)
{
	die('Could not write to ' . $outputPath . "\n");
}
foreach ($output AS $stylevarInfo)
{
	fputcsv($outputHandle, $stylevarInfo, "\t");
}
fclose($outputHandle);

echo "Done!\n";







function fetch_actual_value($stylevarCache, $stylevarPart, $depth = 1)
{
	// Why 10? Just 'cause. Ideally it won't be deeper than 1 or 2... Otherwise the stylevars themselves will get complicated (and slow?)
	if ($depth > 10)
	{
		return array('value' => '', 'depth' => -1); // Yeah... I'm using -1 as my "too many" marker.
	}

	$parts = explode('.', $stylevarPart);
	if (count($parts) != 2)
	{
		return array('value' => $stylevarPart, 'depth' => $depth);
	}

	if (!isset($stylevarCache[$parts[0]]))
	{
		return array('value' => $stylevarPart, 'depth' => $depth);
	}

	if (!empty($stylevarCache[$parts[0]][$parts[1]]))
	{
		return array('value' => $stylevarCache[$parts[0]][$parts[1]], 'depth' => $depth);
	}

	if (!empty($stylevarCache[$parts[0]]['stylevar_' . $parts[1]]))
	{
		return fetch_actual_value($stylevarCache, $stylevarCache[$parts[0]]['stylevar_' . $parts[1]], $depth + 1);
	}

	return array('value' => $stylevarPart, 'depth' => $depth);
}