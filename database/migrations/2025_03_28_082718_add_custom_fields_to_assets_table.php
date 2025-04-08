<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->string('bu')->nullable()->after('notes'); // 添加 BU 字段，可为空
            $table->string('project_group')->nullable()->after('bu'); // 添加 项目组 字段，可为空
            $table->string('report_to_manager')->nullable()->after('project_group'); // 添加 Report to Manager 字段，可为空
            $table->string('serial_number')->nullable()->unique()->after('report_to_manager'); // 添加 设备序列号 字段，可为空且唯一
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->dropColumn('bu'); // 删除 BU 字段
            $table->dropColumn('project_group'); // 删除 项目组 字段
            $table->dropColumn('report_to_manager'); // 删除 Report to Manager 字段
            $table->dropColumn('serial_number'); // 删除 设备序列号 字段
        });
    }
};