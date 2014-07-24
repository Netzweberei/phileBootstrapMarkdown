<?php
namespace Phile\Plugin\Ntzwbr\Philebootstrap;

use Phile\ServiceLocator\ParserInterface;

class Parser implements ParserInterface {

	public function __construct($config = null) {
		// no settings for this parser
	}

	// overload parse with the Parsedown parser
	public function parse($data) {
        // default markdown and parse full text
        $parser = new \cebe\markdown\BootstrapMarkdown();
        return $parser->parse($data);
	}
}
