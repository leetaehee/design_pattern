<?php

class Factory extends Builder
{
    public function __construct($algorism = null)
    {
        echo __CLASS__ . '객체를 생성하였습니다. \n';

        if ($algorism) {
            $this->algorism = $algorism;
        }
    }

    public function build()
    {
        echo '=== 빌드 합니다. ===';

        $this->algorism->setCpu('i7');
        $this->algorism->setRam([8,8]);
        $this->algorism->setStorage([256, 512]);

        return $this;
    }
}