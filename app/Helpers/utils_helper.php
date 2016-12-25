<?php

namespace App\Helpers;

class utils_helper {

		public static function twodim_to_keyval($data) {
		    if (is_array($data) && sizeof($data) > 0) {
		        $dataNew = array();
		        foreach ($data as $key => $value) {
		            $valTmp = array();
		            foreach ($value as $val) {
		                $valTmp[] = $val;
		            }
		            $dataNew[] = array($valTmp[0] => $valTmp[1]);
		        }
		        return $dataNew;
		    } else {
		        return array(array('No Data!'));
		    }
		}

	public static function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

}