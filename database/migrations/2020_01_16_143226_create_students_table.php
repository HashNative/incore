 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
           
            $table->increments('id');
            $table->String('student_name');
           
            $table->String('email_id');
           
            $table->text('phone_number');
            $table->String('course_name');
            $table->String('transfer',10);
            $table->String('inquiry_source');
            $table->String('source');
            $table->String('inquiry_by');
            $table->String('register_by');
            $table->date('date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
