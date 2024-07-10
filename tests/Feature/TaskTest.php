<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_task()
    {
        $data = [
            'title' => 'Test Task',
            'description' => 'Test Description',
            'status' => 'pending',
        ];

        $this->postJson('/api/tasks', $data)
            ->assertStatus(201)
            ->assertJsonFragment(['title' => 'Test Task']);
    }

    // Additional tests for read, update, delete...
}
