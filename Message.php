<?php

namespace App\Hacksaw\Message;

use Illuminate\Database\Eloquent\Model;
use App\Hacksaw\Message\Template;
use App\Hacksaw\Message\Type;
use File;

class Message extends Model
{
    /**
     * The DB table
     */
    protected $table = 'messages';

    /**
     * Mass assignable fields
     * @var [type]
     */
    protected $fillable = [
        'content'
    ];

    /**
     * Template object for each message
     * @var Template
     */
    protected $template;

    /**
     * Type of message used
     */
    protected $type;
    protected $setting;

    public function __construct()
    {
        $this->template = new Template;
    }

    public function setTemplate($name)
    {
        $this->template->loadTemplate($name);
    }

    public function setSetting($name)
    {
        $this->setting = $name;
    }

    public function setType($value)
    {
        if (File::exists(__DIR__ . '/Type/' . $value . '.php')) {
            $class = '\\App\\Hacksaw\\Message\\Type\\' . $value;

            $this->type = new $class;
        } else {
            return false;
        }
    }

    public function send()
    {
        // Load Template from Type
        $this->template = $this->type->getDefaultTemplate();

        // Build the message
        $this->content = $this->build($data);

        // Queue or send
    }

    public function getTypesArray()
    {
        $types = [];

        foreach (File::files(__DIR__ . '/Type') as $file) {
            $filename = explode('/', $file);
            $filename = array_pop($filename);
            $class = '\\App\\Hacksaw\\Message\\Type\\' . explode('.', $filename)[0];

            $type = new $class;

            $types[$type->getValue()] = $type->getName();
        }

        return $types;
    }

    public function getSettings()
    {
        return $this->type->getSettings();
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSetting()
    {
        return $this->setting;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    private function build($data)
    {
        return $this->template->render($data);
    }
}
