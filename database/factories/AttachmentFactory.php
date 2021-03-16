<?php

namespace Database\Factories;

use App\Models\Attachment;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttachmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attachment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fileNames = ['file1.pdf','file2.pdf','file3.png','file4.png'];
        return [
            'name' => array_rand($fileNames,1),
            'ticket_id' => Ticket::factory()
        ];
    }
}
