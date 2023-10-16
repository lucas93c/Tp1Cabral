<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reserva_aula}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%aula}}`
 */
class m231016_155345_create_reserva_aula_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reserva_aula}}', [
            'id' => $this->primaryKey(),
            'id_aula' => $this->integer()->notNull(),
            'fh_desde' => $this->datetime(),
            'fh_hasta' => $this->datetime(),
            'observacion' => $this->string(256),
        ]);

        // creates index for column `id_aula`
        $this->createIndex(
            '{{%idx-reserva_aula-id_aula}}',
            '{{%reserva_aula}}',
            'id_aula'
        );

        // add foreign key for table `{{%aula}}`
        $this->addForeignKey(
            '{{%fk-reserva_aula-id_aula}}',
            '{{%reserva_aula}}',
            'id_aula',
            '{{%aula}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%aula}}`
        $this->dropForeignKey(
            '{{%fk-reserva_aula-id_aula}}',
            '{{%reserva_aula}}'
        );

        // drops index for column `id_aula`
        $this->dropIndex(
            '{{%idx-reserva_aula-id_aula}}',
            '{{%reserva_aula}}'
        );

        $this->dropTable('{{%reserva_aula}}');
    }
}
