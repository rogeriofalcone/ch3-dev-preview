<?php
/*****************************************************************************
*       NQF0034.php
*
*       Author:  ClearHealth Inc. (www.clear-health.com)        2009
*       
*       ClearHealth(TM), HealthCloud(TM), WebVista(TM) and their 
*       respective logos, icons, and terms are registered trademarks 
*       of ClearHealth Inc.
*
*       Though this software is open source you MAY NOT use our 
*       trademarks, graphics, logos and icons without explicit permission. 
*       Derivitive works MUST NOT be primarily identified using our 
*       trademarks, though statements such as "Based on ClearHealth(TM) 
*       Technology" or "incoporating ClearHealth(TM) source code" 
*       are permissible.
*
*       This file is licensed under the GPL V3, you can find
*       a copy of that license by visiting:
*       http://www.fsf.org/licensing/licenses/gpl.html
*       
*****************************************************************************/


class NQF0034 extends NQF {

	// TODO
	/*
	 * com.clearhealth.meaningfulUse.nqf0034-pqri113: CMS - 8
	 * Title: Colorectal Cancer Screening
	 * Description: Percentage of adults 50-75 years of age who had appropriate screening for colorectal cancer.
	 */
	public function populate() {
		$dateStart = $this->dateStart;
		$dateEnd = $this->dateEnd;
		return 0;
	}

}
