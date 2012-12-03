<?php
class table
{
	private $outputString = NULL;
	function __construct()
	{
		$this->outputString = '<table>'.PHP_EOL;
	}

	function addHeader($arr)
	{
		$this->outputString .= '<tr>'.PHP_EOL;
		foreach ($arr as $item)
		{
			$this->outputString .= '<th>';
			$this->outputString .= $item;
			$this->outputString .= '</th>';
		}
		$this->outputString .= '</tr>'.PHP_EOL;
	}
	function addRow($arr)
	{
		// Use isAssoc to check if $arr is associative or not.
	}

	function addSingleRow($arr)
	{
		$this->outputString .= '<tr>'.PHP_EOL;
		foreach ($arr as $item)
		{
			$this->outputString .= '<td>';
			$this->outputString .= $item;
			$this->outputString .= '</td>';
		}
		$this->outputString .= '</tr>'.PHP_EOL;
	}

	function addSingleRowAssoc($arr)
	{
		$this->outputString .= '<tr>'.PHP_EOL;
		foreach ($arr as $item)
		{
			$this->outputString .= '<td>';
			$this->outputString .= $item;
			$this->outputString .= '</td>';
		}
		$this->outputString .= '</tr>'.PHP_EOL;
	}
	
	function addMultipleRows()
	{

	}

	function addCSV()
	{

	}

	function getTable()
	{
		$this->outputString .= '</table>'.PHP_EOL;
		return $this->outputString;
	}

	function __destruct()
	{
	
	}
}
?>