<?php
/**
 * CPdf is a helper class file that provides creating and basic work with PDF documents
 *
 * @project ApPHP Framework
 * @author ApPHP <info@apphp.com>
 * @link http://www.apphpframework.com/
 * @copyright Copyright (c) 2012 - 2016 ApPHP Framework
 * @license http://www.apphpframework.com/license/ 
 *
 * USAGE:
 * ----------
 * 1. Standard call CPdf::config() + CPdf::createDocument()
 * 2. Direct call with default parameters CPdf::createDocument()
 * 
 * PUBLIC (static):			PROTECTED:					PRIVATE:		
 * ----------               ----------                  ----------
 * config
 * createDocument
 * 
 */	  

// Include the main TCPDF library (search for installation path).
include(dirname(__FILE__).'/../vendors/tcpdf/config/tcpdf_config.php');
include(dirname(__FILE__).'/../vendors/tcpdf/tcpdf.php');
		
class CPdf
{
	/** @var */
	private static $_page_orientation = PDF_PAGE_ORIENTATION;
	private static $_unit = PDF_UNIT;
	private static $_pageFormat = PDF_PAGE_FORMAT;
	private static $_unicode = true;
	private static $_encoding = 'UTF-8';
	private static $_creator = PDF_CREATOR;
	private static $_author = PDF_AUTHOR;
	private static $_title = '';
	private static $_subject = ''; 
	private static $_keywords = '';
	private static $_direction = '';
	private static $_pathImages = '';
	private static $_imageScaleRatio = PDF_IMAGE_SCALE_RATIO;
	private static $_headerEnable = true;
	private static $_headerLogo = '';
	private static $_headerLogoWidth = ''; 
	private static $_headerTitle = '';
	private static $_headerString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderString = '';
	private static $_headerMargin = PDF_MARGIN_HEAiderF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF_MrF