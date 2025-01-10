<?php
use App\Models\User;
use Illuminate\Support\Facades\Auth;

it('stores a new goal successfully', function () {
    // Create a user
    $user = User::factory()->create();

    // Simulate authentication
    Auth::login($user);

    // Prepare request data
    $data = [
			'name' => 'This is Goal',
			'target_amount' => 100.00,
			'start_date' => '2025-01-10',
			'end_date' => '2025-06-10',
    ];

    // Hit the store endpoint
    $this->post(route('goals.store'), $data)
        ->assertStatus(302) // Assuming the method redirects upon success
        ->assertSessionHasNoErrors();

    // Assert that the goal is stored in the database
    $this->assertDatabaseHas('goals', [
        'user_id' => $user->id,
        'name' => $data['name'],
				'target_amount' => $data['target_amount'],
        'start_date' => $data['start_date'],
        'end_date' => $data['end_date'],
    ]);
});

it('validates the store request data', function () {
	// Create a user
	$user = User::factory()->create();

	// Simulate authentication
	Auth::login($user);

	// Invalid data
	$data = [
			'name' => '',
			'start_date' => 'invalid-date',
			'end_date' => '',
			'target_amount' => 'invalid-amount',	
	];

	// Hit the store endpoint
	$this->post(route('goals.store'), $data)
			->assertStatus(302) // Assuming validation redirects back
			->assertSessionHasErrors(['name', 'start_date', 'end_date', 'target_amount']);
});

