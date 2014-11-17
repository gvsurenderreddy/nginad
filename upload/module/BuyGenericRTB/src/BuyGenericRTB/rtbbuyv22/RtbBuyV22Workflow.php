<?php
/**
 * CDNPAL NGINAD Project
 *
 * @link http://www.nginad.com
 * @copyright Copyright (c) 2013-2015 CDNPAL Ltd. All Rights Reserved
 * @license GPLv3
 */

namespace rtbbuyv22;

use rtbbuy\RtbBuyWorkflow;

abstract class RtbBuyV22Workflow extends RtbBuyWorkflow
{
	
    public function process_business_rules_workflow($config, $rtb_seat_id, \model\openrtb\RtbBidRequest &$RtbBidRequest) {

    	$logger = \rtbbuyv22\RtbBuyV22Logger::get_instance();
    	$DisplayWorkflow = new \buyrtb\workflows\DisplayWorkflow();
    	
    	return $DisplayWorkflow->process_business_rules_workflow($logger, $config, $rtb_seat_id, $RtbBidRequest);
    
    }

}
