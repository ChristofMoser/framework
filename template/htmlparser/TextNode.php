<?php
/**
 * @author    Christof Moser
 * @copyright Actra AG, Embrach, Switzerland, www.actra.ch
 */

namespace framework\template\htmlparser;

class TextNode extends HtmlNode
{
	public function __construct()
	{
		parent::__construct(nodeType: HtmlNode::TEXT_NODE);
	}
}