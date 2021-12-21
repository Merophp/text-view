<?php
declare(strict_types=1);

namespace Merophp\TextViewPlugin;

use Merophp\ViewEngine\ViewInterface;

class TextView implements ViewInterface{

    /**
     * @var string
     */
	protected string $text;

    /**
     * @var string
     */
    protected string $contentType = 'text/plain;charset=utf-8';

    /**
     * @return string
     */
	public function render(): string
    {
		ob_start();
		echo $this->text;
		$result=ob_get_contents();
		ob_end_clean();
		return $result;
	}


    /**
     * @param mixed $value
     * @api
     */
    public function text($value)
    {
	    $this->text = strval($value);
	}

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }
}
