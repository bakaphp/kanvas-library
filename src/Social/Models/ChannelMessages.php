<?php

namespace Kanvas\Packages\Social\Models;

class ChannelMessages extends BaseModel
{
    public $channel_id;
    public $messages_id;
    public $users_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('channel_messages');
    }
}
