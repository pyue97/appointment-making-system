<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function only_logged_in_user_can_go_dashboard()
    {
        $response = $this->get('/home')->assertRedirect('/login');
    }

    /** @test */
    public function a_user_can_be_added_by_admin()
    {
        $this->isActingAdmin();

        $response = $this->post('/users', [
            'inputUsername' => 'Test',
            'inputPassword' => 'testing123',
            'inputName' => 'Test User',
            'inputEmail' => 'test@test.com',
            'inputUserType' => 'Student'
        ]);

        $this->assertCount(2, User::all());
    }

    

    /** @test */
    public function a_username_is_required()
    {
        $this->isActingAdmin();

        $response = $this->post('/users', array_merge($this->data(), ['inputUsername' => '']));

        $response->assertSessionHasErrors('inputUsername');

        $this->assertCount(1, User::all());
    }

    /** @test */
    public function a_password_is_required()
    {
        $this->isActingAdmin();

        $response = $this->post('/users', array_merge($this->data(), ['inputPassword' => '']));

        $response->assertSessionHasErrors('inputPassword');

        $this->assertCount(1, User::all());
    }

    /** @test */
    public function a_password_is_at_least_8_characters()
    {
        $this->isActingAdmin();

        $response = $this->post('/users', array_merge($this->data(), ['inputPassword' => '888']));

        $response->assertSessionHasErrors('inputPassword');

        $this->assertCount(1, User::all());
    }

    /** @test */
    public function a_name_is_required()
    {
        $this->isActingAdmin();

        $response = $this->post('/users', array_merge($this->data(), ['inputName' => '']));

        $response->assertSessionHasErrors('inputName');

        $this->assertCount(1, User::all());
    }

    /** @test */
    public function an_email_is_require()
    {
        $this->isActingAdmin();

        $response = $this->post('/users', array_merge($this->data(), ['inputEmail' => '']));

        $response->assertSessionHasErrors('inputEmail');

        $this->assertCount(1, User::all());
    }

    /** @test */
    public function a_usertype_is_required()
    {
        $this->isActingAdmin();

        $response = $this->post('/users', array_merge($this->data(), ['inputUserType' => '']));

        $response->assertSessionHasErrors('inputUserType');

        $this->assertCount(1, User::all());
    }

    private function isActingAdmin()
    {
        $this->actingAs(factory(User::class)->create([
            'usertype' => 'Admin',
        ]));
    }

    private function data() 
    {
        return [
            'inputUsername' => 'Test',
            'inputPassword' => 'testing123',
            'inputName' => 'Test User',
            'inputEmail' => 'test@test.com',
            'inputUserType' => 'Student',
        ];
    }
 
    private function isActingLecturer()
    {
        $this->actingAs(factory(User::class)->create([
            'usertype' => 'Lecturer',
        ]));
    }

    private function manage() 
    {
        return [

            'inputdate' => '12-12-2019',
            'inputTime' => '9-10',
            'inputLecturerName' => 'Lecturer01',
            'inputStatus' => 'Available',
        ];
    }

    public function only_lecturer_can_logged_in_dashboard()
    {
        $response = $this->get('/manage')->assertRedirect('/login');
    }

    public function lecturer_can_manage_timeslot()
    {
        $this->isActingLecturer();

        $response = $this->post('/lecturer', [
            'inputdate' => '12-12-2019',
            'inputTime' => '9-10',
            'inputLecturerName' => 'Lecturer01',
            'inputStatus' => 'Available',
        ]);

        $this->assertCount(2, User::all());
    }

    public function lecturer_approved()
    {
        $this->isActingLecturer();

        $response = $this->post('/lecturer', [
            'inputdate' => '12-12-2019',
            'inputTime' => '9-10',
            'inputLecturerName' => 'Lecturer01',
            'inputStatus' => 'Approved',
        ]);

        $this->assertCount(2, User::all());
    }


    private function isActingStudent()
    {
        $this->actingAs(factory(User::class)->create([
            'usertype' => 'Student',
        ]));
    }

    private function make() 
    {
        return [

            'inputdate' => '12-12-2019',
            'inputTime' => '9-10',
            'inputLecturerName' => 'Lecturer01',
            'inputStatus' => 'Pending',
            'inputRemark' => 'I want to discuss assignment',
            'inputStudentName' => 'Student01',
        ];
    }

    public function student_makeappoinment()
    {
        $this->isActingStudent();

        $response = $this->post('/student', [
            'inputdate' => '12-12-2019',
            'inputTime' => '9-10',
            'inputLecturerName' => 'Lecturer01',
            'inputRemark' => 'I want to discuss assignment',
            'inputStatus' => 'Pending',
        ]);

        $this->assertCount(2, User::all());
    }
    
    public function student_cancelappoinment()
    {
        $this->isActingStudent();

        $response = $this->post('/student', [
            'inputdate' => '12-12-2019',
            'inputTime' => '9-10',
            'inputLecturerName' => 'Lecturer01',
            'inputStatus' => 'Available',
        ]);

        $this->assertCount(2, User::all());
    }
    
}
