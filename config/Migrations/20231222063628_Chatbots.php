<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Chatbots extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('chatbots');
        $table->addColumn('messages', 'text', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('response', 'text', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('jp_response', 'text', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('my_response', 'text', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
