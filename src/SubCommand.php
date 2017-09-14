<?php namespace Tarsana\Command;

use Tarsana\Command\Command;

/**
 * A SubCommand which has a parent command and can access it.
 */
class SubCommand extends Command {

    /**
     * The parent command.
     *
     * @var Tarsana\Command\Command
     */
    protected $parent;

    /**
     * Creates a new SubCommand.
     *
     * @param Command $parent
     */
    public function __construct(Command $parent)
    {
        parent::__construct();
        $this->parent($parent)
             ->console($parent->console())
             ->fs($parent->fs)
             ->templatesLoader($parent->templatesLoader);
             $this->config = $parent->config;
    }

    /**
     * parent getter and setter.
     *
     * @param  Tarsana\Command\Command|null
     * @return Tarsana\Command\Command
     */
    public function parent(Command $value = null)
    {
        if (null === $value) {
            return $this->parent;
        }
        $this->parent = $value;
        return $this;
    }

}
