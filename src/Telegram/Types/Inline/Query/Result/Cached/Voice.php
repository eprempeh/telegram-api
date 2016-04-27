<?php

declare(strict_types = 1);

namespace unreal4u\TelegramAPI\Telegram\Types\Inline\Query\Result\Cached;

use unreal4u\TelegramAPI\Telegram\Types\Inline\Query\Result;

/**
 * Represents a link to a voice message stored on the Telegram servers. By default, this voice message will be sent by
 * the user. Alternatively, you can use input_message_content to send a message with the specified content instead of
 * the voice message.
 *
 * Objects defined as-is april 2016
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultcachedvoice
 */
class Voice extends Result
{
    /**
     * Type of the result, must be voice
     * @var string
     */
    public $type = 'voice';

    /**
     * A valid file identifier for the voice message
     * @var string
     */
    public $voice_file_id = '';

    /**
     * Voice message title
     * @var string
     */
    public $title = '';
}