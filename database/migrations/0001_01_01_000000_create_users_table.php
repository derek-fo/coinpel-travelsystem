<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void // up para criar a tabela no banco de dados
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // cria uma chave primária com auto incremento

            // colunas de texto para nome, email e senha
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            
            $table->boolean('must_change_password')->default(true); // aqui vai controlar se o usuário deve mudar a senha
            
            $table->timestamps(); // cria as colunas created_at e updated_at automaticamente
        });
    }

    // down serve para reverter (deletar) a tabela caso algo dê errado
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};