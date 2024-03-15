
    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('staff', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
$table->string('image');
$table->string('fakultas');
$table->string('mata_pelajaran');
                $table->integer('status')->default(1);
                $table->timestamp('expires_at')->nullable();
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
            Schema::dropIfExists('Staff');
        }
    };