<?php
/**
 * @author    Christof Moser
 * @copyright Actra AG, Embrach, Switzerland, www.actra.ch
 */

namespace framework\template\template;

interface TagInline
{
	public function replaceInline(TemplateEngine $tplEngine, array $tagArr): string;

	public static function getName(): string;
}